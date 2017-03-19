<?php
App::uses('AppController', 'Controller');
/**
 * Articulos Controller
 *
 * @property Articulo $Articulo
 * @property PaginatorComponent $Paginator
 */
class PresupuestosController extends AppController {
	public $uses = array('Presupuesto','ArticulosPresupuesto');
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
	function add(){
		$this->autoRender=false;
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