<?php
App::uses('AppController', 'Controller');
/**
 * Cpedidos Controller
 *
 * @property Cpedido $Cpedido
 * @property PaginatorComponent $Paginator
 */
class CpedidosController extends AppController {

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
		$this->Cpedido->recursive = 0;
		$this->set('cpedidos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cpedido->exists($id)) {
			throw new NotFoundException(__('Invalid cpedido'));
		}
		$options = array('conditions' => array('Cpedido.' . $this->Cpedido->primaryKey => $id));
		$this->set('cpedido', $this->Cpedido->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cpedido->create();
			if ($this->Cpedido->save($this->request->data)) {
				$this->Session->setFlash('El Pedido ha sido creado correctamente', 'default',array('class'=>'container alert alert-success text-center'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Pedido no pudo crearse, intentelo nuevamente', 'default',array('class'=>'container alert alert-danger text-center'));
			}
		}
		$clientes = $this->Cpedido->Cliente->find('list');
		$estados = $this->Cpedido->Estado->find('list');
		$subestados = $this->Cpedido->Subestado->find('list');
		$productos = $this->Cpedido->Producto->find('list');
		$this->set(compact('clientes', 'estados', 'subestados', 'productos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Cpedido->exists($id)) {
			throw new NotFoundException(__('Invalid cpedido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cpedido->save($this->request->data)) {
				$this->Session->setFlash('El Pedido ha sido modificado correctamente', 'default',array('class'=>'container alert alert-success text-center'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Pedido no pudo modificarse, intentelo nuevamente', 'default',array('class'=>'container alert alert-danger text-center'));
			}
		} else {
			$options = array('conditions' => array('Cpedido.' . $this->Cpedido->primaryKey => $id));
			$this->request->data = $this->Cpedido->find('first', $options);
		}
		$clientes = $this->Cpedido->Cliente->find('list');
		$estados = $this->Cpedido->Estado->find('list');
		$subestados = $this->Cpedido->Subestado->find('list');
		$productos = $this->Cpedido->Producto->find('list');
		$this->set(compact('clientes', 'estados', 'subestados', 'productos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Cpedido->id = $id;
		if (!$this->Cpedido->exists()) {
			throw new NotFoundException(__('Invalid cpedido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Cpedido->delete()) {
			$this->Session->setFlash('El Pedido ha sido eliminado correctamente', 'default',array('class'=>'container alert alert-success text-center'));
		} else {
			$this->Session->setFlash('El Pedido no pudo eliminarse, intentelo nuevamente', 'default',array('class'=>'container alert alert-danger text-center'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
