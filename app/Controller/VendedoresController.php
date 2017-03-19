<?php
App::uses('AppController', 'Controller');
/**
 * Vendedores Controller
 *
 * @property Vendedore $Vendedore
 * @property PaginatorComponent $Paginator
 */
class VendedoresController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public $uses = array('Vendedore' , 'Factura' , 'Cliente' , 'Usermgmt.User');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Vendedore->recursive = 0;
		$this->set('vendedores', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Vendedore->exists($id)) {
			throw new NotFoundException(__('Invalid vendedore'));
		}
		$options = array('conditions' => array('Vendedore.' . $this->Vendedore->primaryKey => $id));
		$this->set('vendedore', $this->Vendedore->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Vendedore->create();
			if ($this->Vendedore->save($this->request->data)) {
				$this->Session->setFlash(__('The vendedore has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vendedore could not be saved. Please, try again.'));
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
		if (!$this->Vendedore->exists($id)) {
			throw new NotFoundException(__('Invalid vendedore'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Vendedore->save($this->request->data)) {
				$this->Session->setFlash(__('The vendedore has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vendedore could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Vendedore.' . $this->Vendedore->primaryKey => $id));
			$this->request->data = $this->Vendedore->find('first', $options);
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
		$this->Vendedore->id = $id;
		if (!$this->Vendedore->exists()) {
			throw new NotFoundException(__('Invalid vendedore'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Vendedore->delete()) {
			$this->Session->setFlash(__('The vendedore has been deleted.'));
		} else {
			$this->Session->setFlash(__('The vendedore could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function getVendedor($id){
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
	    //$codigos = $this->Vendedore->getCoven($id);
	    $this->User->recursive = 0;
	    $user = $this->User->find('first' , array('conditions' => array('User.id' => $id))); 
		$codigos = $user['User']['codigos'];
		$data = array();
		$data['Facturas'] = $this->Factura->getCountFacturasVencidas($codigos);
		$data['Clientes'] = $this->Cliente->getCountClientes($codigos);
		$data['FacturaAno'] = $this->Factura->getCountFacturasAno($codigos);
		return json_encode($data);
	}

	public function getVendedores(){
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
	  
		$data = $this->Vendedore->find('all');
		return json_encode($data);
	}
}
