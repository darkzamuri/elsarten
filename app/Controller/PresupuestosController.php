<?php
App::uses('AppController', 'Controller');
/**
 * Articulos Controller
 *
 * @property Articulo $Articulo
 * @property PaginatorComponent $Paginator
 */
class PresupuestosController extends AppController {
	public $uses = array('Presupuesto','ArticulosPresupuesto' , 'Cliente');
	public $components = array('Paginator');

	function index(){
		$this->Presupuesto->recursive = 0;
		$this->set('Presupuestos', $this->Paginator->paginate());
	}
	function view($id){
		$this->Presupuesto->recursive = 2;
		if (!$this->Presupuesto->exists($id)) {
			throw new NotFoundException(__('Invalid cita'));
		}
		$options = array('conditions' => array('Presupuesto.' . $this->Presupuesto->primaryKey => $id));
		$this->set('presupuesto', $this->Presupuesto->find('first', $options));
	}

	function addApp(){
		$this->autoRender=false;
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
	    $this->Cliente->recursive = 0;
	    $co_cli = $this->request->data['co_cli'];
	    $cliente = $this->Cliente->find('first', array('conditions' => array('Cliente.id' => $co_cli)));
	    $productos = $this->request->data['productos'];
	    $this->Presupuesto->create();
	    $this->Presupuesto->save($cliente);
	    
	    $pId=$this->Presupuesto->getLastInsertID();
	    foreach ($productos as $key => $value) {
				$carrito=array(
					'articulo_id'=>$value['Cotizacione']['id'],
					'cantidad'=>$value['Cotizacione']['cantidad'],
					'presupuesto_id'=>$pId
				);
				
				//var_dump($carrito);
				$this->ArticulosPresupuesto->create();
				$this->ArticulosPresupuesto->save($carrito);
			}

			$presupuesto=$this->Presupuesto->find('first',array('recursive' => 2,'conditions' => array('Presupuesto.id' => $pId)));
			$Email = new CakeEmail();
			$Email->config('default');
			$Email->bcc('manuperazafa@gmail.com');
			$Email->to('llusitano@gmail.com');
			$Email->subject('Solicitud de Presupuesto');
			$Email->from('info@elsarten.com');
			$Email->template('presupuesto');
			$Email->emailFormat('html');	
			$Email->viewVars($presupuesto);
			
			if($Email->send()){
				return json_encode(1);
			}	
			else {
				return json_encode(0);
			}
			
		
	}
	function add(){
		$this->autoRender=false;
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
		$carrito=array();
		$usuario=$this->request->data['carrito']['usuario'];
		//$data=array('email' => $usuario['email']);		
		$this->Presupuesto->create();
		if($this->Presupuesto->save($usuario)){
			$pId=$this->Presupuesto->getLastInsertID();
			foreach ($this->request->data['carrito']['carrito'] as $key => $value) {
				$carrito=array(
					'articulo_id'=>$value['id'],
					'cantidad'=>$value['cantidad'],
					'presupuesto_id'=>$pId
				);
				$this->ArticulosPresupuesto->create();
				$this->ArticulosPresupuesto->save($carrito);
			}
			$presupuesto=$this->Presupuesto->find('first',array('recursive' => 2,'conditions' => array('Presupuesto.id' => $pId)));
			$Email = new CakeEmail();
			$Email->config('default');
			$Email->to('manuperazafa@gmail.com');
			$Email->subject('Solicitud de Presupuesto');
			$Email->from('info@elsarten.com');
			$Email->template('presupuesto');
			$Email->emailFormat('html');	
			$Email->viewVars($presupuesto);
			try {
				$Email->send();	
				$Email2 = new CakeEmail();
				$Email2->config('default');
				$Email2->to($usuario['email']);
				$Email2->subject('Presupuesto');
				$Email2->from('info@elsarten.com');
				$Email2->template('presupuesto2');
				$Email2->emailFormat('html');	
				$Email2->viewVars($presupuesto);
				try {
					$Email2->send();
					return json_encode(1);
				}catch (Exception $ex){
					return json_encode(0);
				}			
			}catch (Exception $ex){
				return json_encode(0);
			}
			
		}
		
		
		
		
	}
}