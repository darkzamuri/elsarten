<?php
App::uses('AppController', 'Controller');
/**
 * Lins Controller
 *
 * @property Lin $Lin
 * @property PaginatorComponent $Paginator
 */
class LinsController extends AppController {

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
		$this->Lin->recursive = 0;
		//debug($this->Lin->find('all'));
		$this->set('lins', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$options = array('conditions' => array('Lin.co_lin' => $id));
		$data = $this->Lin->find('first', $options);
		if (!$data) {
			throw new NotFoundException(__('Invalid lin'));
		}
		
		$this->set('lin', $data);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Lin->create();
			if ($this->Lin->save($this->request->data)) {
				$this->Session->setFlash(__('The lin has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lin could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Lin->exists($id)) {
			throw new NotFoundException(__('Invalid lin'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Lin->save($this->request->data)) {
				$this->Session->setFlash(__('The lin has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lin could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Lin.' . $this->Lin->primaryKey => $id));
			$this->request->data = $this->Lin->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Lin->id = $id;
		if (!$this->Lin->exists()) {
			throw new NotFoundException(__('Invalid lin'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Lin->delete()) {
			$this->Session->setFlash(__('The lin has been deleted.'));
		} else {
			$this->Session->setFlash(__('The lin could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
