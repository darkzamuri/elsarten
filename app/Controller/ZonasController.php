<?php
App::uses('AppController', 'Controller');
/**
 * Zonas Controller
 *
 * @property Zona $Zona
 * @property PaginatorComponent $Paginator
 */
class ZonasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator' , 'RequestHandler');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Zona->recursive = 0;
		$this->set('zonas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Zona->exists($id)) {
			throw new NotFoundException(__('Invalid zona'));
		}
		$options = array('conditions' => array('Zona.' . $this->Zona->primaryKey => $id));
		$this->set('zona', $this->Zona->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Zona->create();
			if ($this->Zona->save($this->request->data)) {
				$this->Session->setFlash(__('The zona has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The zona could not be saved. Please, try again.'));
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
		if (!$this->Zona->exists($id)) {
			throw new NotFoundException(__('Invalid zona'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Zona->save($this->request->data)) {
				$this->Session->setFlash(__('The zona has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The zona could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Zona.' . $this->Zona->primaryKey => $id));
			$this->request->data = $this->Zona->find('first', $options);
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
		$this->Zona->id = $id;
		if (!$this->Zona->exists()) {
			throw new NotFoundException(__('Invalid zona'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Zona->delete()) {
			$this->Session->setFlash(__('The zona has been deleted.'));
		} else {
			$this->Session->setFlash(__('The zona could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function getZonas(){

 		$this->autoRender = false;
 		
	    // Allow from any origin
	    if (isset($_SERVER['HTTP_ORIGIN'])) {
	        // Decide if the origin in $_SERVER['HTTP_ORIGIN'] is one
	        // you want to allow, and if so:
	        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
	        header('Access-Control-Allow-Credentials: true');
	        header('Access-Control-Max-Age: 86400');    // cache for 1 day
	    }

	    // Access-Control headers are received during OPTIONS requests
	    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

	        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
	            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         

	        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
	            header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

	        exit(0);
	    }
	    $data = $this->Zona->find('all'); // view all data From DB
	    
        
        echo json_encode(utf8ize($data));
        //echo json_encode($data[0]);
				
	}
}
