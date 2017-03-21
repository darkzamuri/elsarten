<?php
App::uses('AppController', 'Controller');
/**
 * Facturas Controller
 *
 * @property Factura $Factura
 * @property PaginatorComponent $Paginator
 */
class FacturasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public $uses = array('Factura' , 'Vendedore' , 'Usermgmt.User');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		//$this->Factura->recursive = 0;
		//$data = $this->Factura->find("all" , array('conditions' => array('fec_emis >=' => '2016-01-01') , 'limit' => 10));
		$this->Factura->recursive = 0;
		$this->set('Facturas', $this->Paginator->paginate());
		//$this->set('Facturas', $data);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Factura->exists($id)) {
			throw new NotFoundException(__('Invalid Factura'));
		}
		$options = array('conditions' => array('Factura.' . $this->Factura->primaryKey => $id));
		$this->set('Factura', $this->Factura->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Factura->create();
			if ($this->Factura->save($this->request->data)) {
				$this->Session->setFlash(__('The Factura has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Factura could not be saved. Please, try again.'));
			}
		}
		$categorias = $this->Factura->Categorium->find('list');
		$lins = $this->Factura->Lin->find('list');
		$this->set(compact('categorias', 'lins'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Factura->exists($id)) {
			throw new NotFoundException(__('Invalid Factura'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Factura->save($this->request->data)) {
				$this->Session->setFlash(__('The Factura has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Factura could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Factura.' . $this->Factura->primaryKey => $id));
			$this->request->data = $this->Factura->find('first', $options);
		}
		$categorias = $this->Factura->Categorium->find('list');
		$lins = $this->Factura->Lin->find('list');
		$this->set(compact('categorias', 'lins'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Factura->id = $id;
		if (!$this->Factura->exists()) {
			throw new NotFoundException(__('Invalid Factura'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Factura->delete()) {
			$this->Session->setFlash(__('The Factura has been deleted.'));
		} else {
			$this->Session->setFlash(__('The Factura could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function getFacturas($id ,$query = 'todos') {
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
		
		
		if($query == 'vendedor'){
			$this->Paginator->settings = array(
	       		'conditions' => array('RTRIM(Factura.co_ven)' => $id)	       		
    		);

		}
		else if ($query == 'cliente'){
			$this->Paginator->settings = array(
	       		'conditions' => array('RTRIM(Factura.co_cli)' => $id)
    		);
		}
		else {
			
		}
		
		$data = $this->Paginator->paginate();
  		
  		
  		//var_dump($data);
        return json_encode(utf8ize($data));
        //return json_encode($this->Cliente->find('first')); 
	}

	public function getFactura($id) {
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
		

  		
  		if (!$this->Factura->exists($id)) {
			return json_encode('Invalid Factura');
		}
		$options = array('conditions' => array('Factura.id' => $id));
		$data =  $this->Factura->find('first', $options);

        return json_encode(utf8ize($data));
        //return json_encode($this->Cliente->find('first')); 
	}

	public function getFacturasVencidas($id , $page = 1 , $perPage = 20 , $query = 'todos') {
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


		$this->User->recursive = 0;
	    $user = $this->User->find('first' , array('conditions' => array('User.id' => $id))); 
		$codigos = $user['User']['codigos'];
		$data = array();
		
		$data['Facturas'] = $this->Factura->getFacturasVencidas($codigos ,$page , $perPage);
		
		return json_encode(utf8ize($data));		
	}

	public function getFacturaDetalle($id_factura) {
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

	    $options = array('conditions' => array('Factura.fact_num' => $id_factura));
		$data['Factura'] =  $this->Factura->find('first', $options);
		$data['Articulos'] = $this->Factura->getFacturaDetalle($id_factura);
		
		return json_encode(utf8ize($data));		
	}
	
}
