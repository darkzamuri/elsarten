<?php
App::uses('AppController', 'Controller');
/**
 * Clientes Controller
 *
 * @property Cliente $Cliente
 * @property PaginatorComponent $Paginator
 */
class ClientesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator' , 'RequestHandler');

	public $uses = array('Cliente' , 'Factura' , 'Vendedore' , 'Usermgmt.User');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Cliente->recursive = 0;
		$data = $this->Cliente->find('all');
		$this->set('clientes', $data);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cliente->exists($id)) {
			throw new NotFoundException(__('Invalid cliente'));
		}
		$options = array('conditions' => array('Cliente.' . $this->Cliente->primaryKey => $id));
		$this->set('cliente', $this->Cliente->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cliente->create();
			if ($this->Cliente->save($this->request->data)) {
				$this->Session->setFlash(__('The cliente has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cliente could not be saved. Please, try again.'));
			}
		}
		$vendedores = $this->Cliente->Vendedore->find('list');
		$zonas = $this->Cliente->Zona->find('list');
		$this->set(compact('vendedores', 'zonas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Cliente->exists($id)) {
			throw new NotFoundException(__('Invalid cliente'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cliente->save($this->request->data)) {
				$this->Session->setFlash(__('The cliente has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cliente could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Cliente.' . $this->Cliente->primaryKey => $id));
			$this->request->data = $this->Cliente->find('first', $options);
		}
		$vendedores = $this->Cliente->Vendedore->find('list');
		$zonas = $this->Cliente->Zona->find('list');
		$this->set(compact('vendedores', 'zonas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Cliente->id = $id;
		if (!$this->Cliente->exists()) {
			throw new NotFoundException(__('Invalid cliente'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Cliente->delete()) {
			$this->Session->setFlash(__('The cliente has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cliente could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function getClientesHoy($id) {
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
		
		$dia = '';
		switch (date('l')) {
			case 'Sunday':
				$dia = 'Domingo';
				break;
			case 'Monday':
				$dia = 'Lunes';
				break;
			case 'Tuesday':
				$dia = 'Martes';
				break;
			case 'Wednesday':
				$dia = 'Miercoles';
				break;
			case 'Thursday':
				$dia = 'Jueves';
				break;
			case 'Friday':
				$dia = 'Viernes';
				break;
			case 'Saturday':
				$dia = 'Sabado';
				break;			
		}
		
		$this->User->recursive = 0;
	    $user = $this->User->find('first' , array('conditions' => array('User.id' => $id))); 
		$codigos = $user['User']['codigos'];
		$data['Clientes'] = $this->Cliente->getClientesHoy($codigos ,$dia);
		
		return json_encode(utf8ize($data));	
        
	}

	public function getClientes($id , $page = 1 , $perPage = 20 , $query = 'todos') {
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
		$data['total_pages'] = $this->Cliente->getCountClientes($codigos);
		$data['next_page'] = $page + 1;
		$data['Clientes'] = $this->Cliente->getClientes($codigos ,$page , $perPage);
		
		return json_encode(utf8ize($data));		
	}	

	public function getCliente($id){

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
		$data = $this->Cliente->find('first' , array(
			'conditions' => array('Cliente.id' => $id)
		));
		$idCliente = $data['Cliente']['co_cli'];
		$data['Factura']['vencidas'] = $this->Factura->getFacturasVencidasCli($idCliente);
		$data['Factura']['emitidas'] = $this->Factura->getFacturasCli($idCliente);
		$data['Factura']['pagadas'] = $this->Factura->getFacturasCliPagadas($idCliente);
		

		return json_encode(utf8ize($data));	
	}

	public function searchCliente($id = null , $search = null) {
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
		//var_dump($codigos);
		$data['Clientes'] = $this->Cliente->searchCliente($codigos ,$search);
		
		return json_encode(utf8ize($data));	
        
	}

	public function updateCliente($id = null){

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
		if($id){
			$this->Cliente->id = $id;
		}
		else{
			$this->Cliente->id = $this->request->data['Cliente']['id'];
		}
		

		if($this->Cliente->save($this->request->data)){
			return json_encode(array('code' => 200 , 'mensaje' => 'Datos Actualizados Correctamente'));
		}
		else {
			return json_encode(array('code' => 300 , 'mensaje' => 'error'));
		}
			
	}

	public function addCliente(){

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
		//$this->Cliente->id = $this->request->data['Cliente']['id'];
		if($this->Cliente->save($this->request->data)){
			return json_encode(array('code' => 200 , 'mensaje' => 'Cliente Agregado Exitosamente'));
		}
		else {
			return json_encode(array('code' => 300 , 'mensaje' => 'error'));
		}
			
	}

	public function uploadFile(){
		$this->autoRender = false;
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

		
		$this->Cliente->id = $this->request->data['cliente_id'];
		$data = base64_decode($this->request->data["file"]["base64"]);
		$urlImg = 'files/cliente'.$this->request->data['cliente_id'].'.png';
		file_put_contents($urlImg, $data);
		if($this->Cliente->saveField('img_url',"http://".$_SERVER['HTTP_HOST'].$this->webroot.$urlImg)){
			return json_encode(array('code' => 200 , 'mensaje' => 'success' , 'data' => json_encode($this->Cliente)));
		}
		else {
			return json_encode(array('code' => 300 , 'mensaje' => 'error'));
		}
		$data = base64_decode($this->request->data["data"]["base64"]);
		file_put_contents('files/image.png', $data);

    }


}
