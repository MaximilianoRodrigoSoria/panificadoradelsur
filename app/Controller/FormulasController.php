<?php
App::uses('AppController', 'Controller');
/**
 * Formulas Controller
 *
 * @property Formula $Formula
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FormulasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Formula->recursive = 0;
		$this->set('formulas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Formula->exists($id)) {
			throw new NotFoundException(__('Invalid formula'));
		}
		$options = array('conditions' => array('Formula.' . $this->Formula->primaryKey => $id));
		$this->set('formula', $this->Formula->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Formula->create();
			if ($this->Formula->save($this->request->data)) {
				$this->Session->setFlash('La Formula ha sido creada correctamente', 'default',array('class'=>'container alert alert-success text-center'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('La Formula no pudo crearse, intentelo nuevamente', 'default',array('class'=>'container alert alert-danger text-center'));
			}
		}
		$estados = $this->Formula->Estado->find('list');
		$insumos = $this->Formula->Insumo->find('list');
		$this->set(compact('estados', 'insumos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Formula->exists($id)) {
			throw new NotFoundException(__('Invalid formula'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Formula->save($this->request->data)) {
				$this->Session->setFlash('La Formula ha sido modificada correctamente', 'default',array('class'=>'container alert alert-success text-center'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('La Formula no pudo modificarse, intentelo nuevamente', 'default',array('class'=>'container alert alert-danger text-center'));
			}
		} else {
			$options = array('conditions' => array('Formula.' . $this->Formula->primaryKey => $id));
			$this->request->data = $this->Formula->find('first', $options);
		}
		$estados = $this->Formula->Estado->find('list');
		$insumos = $this->Formula->Insumo->find('list');
		$this->set(compact('estados', 'insumos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Formula->id = $id;
		if (!$this->Formula->exists()) {
			throw new NotFoundException(__('Invalid formula'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Formula->delete()) {
			$this->Session->setFlash('La Formula ha sido eliminada correctamente', 'default',array('class'=>'container alert alert-success text-center'));
		} else {
			$this->Session->setFlash('La Formula no pudo eliminarse, intentelo nuevamente', 'default',array('class'=>'container alert alert-danger text-center'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
