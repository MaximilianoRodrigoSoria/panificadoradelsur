<?php
App::uses('AppController', 'Controller');
/**
 * Insumos Controller
 *
 * @property Insumo $Insumo
 * @property PaginatorComponent $Paginator
 */
class InsumosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Insumo->recursive = 0;
		$this->set('insumos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Insumo->exists($id)) {
			throw new NotFoundException(__('Invalid insumo'));
		}
		$options = array('conditions' => array('Insumo.' . $this->Insumo->primaryKey => $id));
		$this->set('insumo', $this->Insumo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Insumo->create();
			if ($this->Insumo->save($this->request->data)) {
				$this->Session->setFlash(__('The insumo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The insumo could not be saved. Please, try again.'));
			}
		}
		$estados = $this->Insumo->Estado->find('list');
		$formulas = $this->Insumo->Formula->find('list');
		$this->set(compact('estados', 'formulas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Insumo->exists($id)) {
			throw new NotFoundException(__('Invalid insumo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Insumo->save($this->request->data)) {
				$this->Session->setFlash(__('The insumo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The insumo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Insumo.' . $this->Insumo->primaryKey => $id));
			$this->request->data = $this->Insumo->find('first', $options);
		}
		$estados = $this->Insumo->Estado->find('list');
		$formulas = $this->Insumo->Formula->find('list');
		$this->set(compact('estados', 'formulas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Insumo->id = $id;
		if (!$this->Insumo->exists()) {
			throw new NotFoundException(__('Invalid insumo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Insumo->delete()) {
			$this->Session->setFlash(__('The insumo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The insumo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
