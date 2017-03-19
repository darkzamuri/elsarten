<?php
App::uses('AppController', 'Controller');
/**
 * Cotizaciones Controller
 *
 * @property Cotizacione $Cotizacione
 * @property PaginatorComponent $Paginator
 */
class CotizacionesController extends AppController {

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
		$this->Cotizacione->recursive = 0;
		$this->set('Cotizaciones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cotizacione->exists($id)) {
			throw new NotFoundException(__('Invalid Cotizacione'));
		}
		$options = array('conditions' => array('Cotizacione.' . $this->Cotizacione->primaryKey => $id));
		$this->set('Cotizacione', $this->Cotizacione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cotizacione->create();
			if ($this->Cotizacione->save($this->request->data)) {
				$this->Session->setFlash(__('The Cotizacione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Cotizacione could not be saved. Please, try again.'));
			}
		}
		$clientes = $this->Cotizacione->Cliente->find('list');
		$users = $this->Cotizacione->User->find('list');
		$this->set(compact('clientes', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Cotizacione->exists($id)) {
			throw new NotFoundException(__('Invalid Cotizacione'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cotizacione->save($this->request->data)) {
				$this->Session->setFlash(__('The Cotizacione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Cotizacione could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Cotizacione.' . $this->Cotizacione->primaryKey => $id));
			$this->request->data = $this->Cotizacione->find('first', $options);
		}
		$clientes = $this->Cotizacione->Cliente->find('list');
		$users = $this->Cotizacione->User->find('list');
		$this->set(compact('clientes', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Cotizacione->id = $id;
		if (!$this->Cotizacione->exists()) {
			throw new NotFoundException(__('Invalid Cotizacione'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Cotizacione->delete()) {
			$this->Session->setFlash(__('The Cotizacione has been deleted.'));
		} else {
			$this->Session->setFlash(__('The Cotizacione could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function getCotizaciones($id){

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
	    $this->recursive = 0;
		$data = $this->Cotizacione->find('all' , array('conditions' => array('Cotizacione.co_cli' => $id)));
		return json_encode($data);	
	}


	public function addArticulo($idCli , $idArt , $cantidad = 1){

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
		
		//$data = $this->Cliente->find('first' , array('conditions' => array('Cliente.id' => $id)));
		$data = array();
		$data['Cotizacione']['co_cli'] = $idCli;
		$data['Cotizacione']['co_art'] = $idArt;
		$data['Cotizacione']['cantidad'] = $cantidad;		
		if($this->Cotizacione->save($data)){
			return json_encode(array('code' => 200 , 'mensaje' => 'success'));
		}
		else {
			return json_encode(array('code' => 300 , 'mensaje' => 'error'));
		}	
	}

	public function deleteArticulo($id = null) {
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
		$this->Cotizacione->id = $id;		
		if ($this->Cotizacione->delete()) {
			return json_encode(array('code' => 200 , 'mensaje' => 'success'));
		}
		else {
			return json_encode(array('code' => 300 , 'mensaje' => 'error'));
		}
		
	}		

}
