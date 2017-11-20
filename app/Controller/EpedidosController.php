<?php
App::uses('AppController', 'Controller');
/**
 * Epedidos Controller
 *
 * @property Epedido $Epedido
 * @property PaginatorComponent $Paginator
 */
class EpedidosController extends AppController {

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
		$this->Epedido->recursive = 0;
		$this->set('epedidos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Epedido->exists($id)) {
			throw new NotFoundException(__('Invalid epedido'));
		}
		$options = array('conditions' => array('Epedido.' . $this->Epedido->primaryKey => $id));
		$this->set('epedido', $this->Epedido->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Epedido->create();
			if ($this->Epedido->save($this->request->data)) {
				$this->Session->setFlash(__('The epedido has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The epedido could not be saved. Please, try again.'));
			}
		}
		$users = $this->Epedido->User->find('list');
		$estados = $this->Epedido->Estado->find('list');
		$subestados = $this->Epedido->Subestado->find('list');
		$productos = $this->Epedido->Producto->find('list');
		$tipos = $this->Epedido->Tipo->find('list');
		$this->set(compact('users', 'estados', 'subestados', 'productos', 'tipos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Epedido->exists($id)) {
			throw new NotFoundException(__('Invalid epedido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Epedido->save($this->request->data)) {
				$this->Session->setFlash(__('The epedido has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The epedido could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Epedido.' . $this->Epedido->primaryKey => $id));
			$this->request->data = $this->Epedido->find('first', $options);
		}
		$users = $this->Epedido->User->find('list');
		$estados = $this->Epedido->Estado->find('list');
		$subestados = $this->Epedido->Subestado->find('list');
		$productos = $this->Epedido->Producto->find('list');
		$tipos = $this->Epedido->Tipo->find('list');
		$this->set(compact('users', 'estados', 'subestados', 'productos', 'tipos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Epedido->id = $id;
		if (!$this->Epedido->exists()) {
			throw new NotFoundException(__('Invalid epedido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Epedido->delete()) {
			$this->Session->setFlash(__('The epedido has been deleted.'));
		} else {
			$this->Session->setFlash(__('The epedido could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
