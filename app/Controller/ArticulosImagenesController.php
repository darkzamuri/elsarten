<?php
App::uses('AppController', 'Controller');
/**
 * ArticulosImagenes Controller
 *
 * @property ArticulosImagene $ArticulosImagene
 * @property PaginatorComponent $Paginator
 */
class ArticulosImagenesController extends AppController {

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
		$this->ArticulosImagene->recursive = 0;
		$this->set('articulosImagenes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ArticulosImagene->exists($id)) {
			throw new NotFoundException(__('Invalid articulos imagene'));
		}
		$options = array('conditions' => array('ArticulosImagene.' . $this->ArticulosImagene->primaryKey => $id));
		$this->set('articulosImagene', $this->ArticulosImagene->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ArticulosImagene->create();
			if ($this->ArticulosImagene->save($this->request->data)) {
				$this->Session->setFlash(__('The articulos imagene has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The articulos imagene could not be saved. Please, try again.'));
			}
		}
		$articulos = $this->ArticulosImagene->Articulo->find('list');
		$this->set(compact('articulos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ArticulosImagene->exists($id)) {
			throw new NotFoundException(__('Invalid articulos imagene'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ArticulosImagene->save($this->request->data)) {
				$this->Session->setFlash(__('The articulos imagene has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The articulos imagene could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ArticulosImagene.' . $this->ArticulosImagene->primaryKey => $id));
			$this->request->data = $this->ArticulosImagene->find('first', $options);
		}
		$articulos = $this->ArticulosImagene->Articulo->find('list');
		$this->set(compact('articulos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ArticulosImagene->id = $id;
		if (!$this->ArticulosImagene->exists()) {
			throw new NotFoundException(__('Invalid articulos imagene'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ArticulosImagene->delete()) {
			$this->Session->setFlash(__('The articulos imagene has been deleted.'));
		} else {
			$this->Session->setFlash(__('The articulos imagene could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
