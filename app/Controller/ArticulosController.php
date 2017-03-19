<?php
App::uses('AppController', 'Controller');
/**
 * Articulos Controller
 *
 * @property Articulo $Articulo
 * @property PaginatorComponent $Paginator
 */
class ArticulosController extends AppController {

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
		$this->Articulo->recursive = 0;
		$this->set('articulos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Articulo->exists($id)) {
			throw new NotFoundException(__('Invalid articulo'));
		}
		$options = array('conditions' => array('Articulo.' . $this->Articulo->primaryKey => $id));
		$this->set('articulo', $this->Articulo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Articulo->create();
			if ($this->Articulo->save($this->request->data)) {
				$this->Session->setFlash(__('The articulo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The articulo could not be saved. Please, try again.'));
			}
		}
		$categorias = $this->Articulo->Categorium->find('list');
		$lins = $this->Articulo->Lin->find('list');
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
		if (!$this->Articulo->exists($id)) {
			throw new NotFoundException(__('Invalid articulo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Articulo->save($this->request->data)) {
				$this->Session->setFlash(__('The articulo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The articulo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Articulo.' . $this->Articulo->primaryKey => $id));
			$this->request->data = $this->Articulo->find('first', $options);
		}
		$categorias = $this->Articulo->Categorium->find('list');
		$lins = $this->Articulo->Lin->find('list');
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
		$this->Articulo->id = $id;
		if (!$this->Articulo->exists()) {
			throw new NotFoundException(__('Invalid articulo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Articulo->delete()) {
			$this->Session->setFlash(__('The articulo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The articulo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function getArticulos($query = 'todos') {
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
		//$data = $this->Cliente->find('all' , array('conditions' => array('Cliente.co_ven' => $id)));
		
		//var_dump($data);
		//return new CakeResponse(array('body' => json_encode($data[0]['Cliente'])));
		//return json_encode(array('clientes' => $data[0]['Cliente']));
		
		
		if($query == 'todos'){
			//$this->Paginator->settings = array(
	       		//'conditions' => array('RTRIM(Cliente.co_ven)' => $id)
    		//);

		}
		else {
			$this->Paginator->settings = array(
	       		'conditions' => array('Articulo.art_des LIKE' => "%$query%")
    		);
		}
		
		$data = $this->Paginator->paginate();
  		

        return json_encode(array('data' => utf8ize($data) , 'pagination' => $this->request->paging));
        //return json_encode($this->Cliente->find('first')); 
	}

	public function getArticulo($id) {
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
		

  		
  		if (!$this->Articulo->exists($id)) {
			return json_encode('Invalid articulo');
		}
		$options = array('conditions' => array('Articulo.id' => $id));
		$data =  $this->Articulo->find('first', $options);

        return json_encode(utf8ize($data));
        //return json_encode($this->Cliente->find('first')); 
	}

	public function fileUpload(){
		// Initialize filename-variable
		$this->autoRender = false;
		// Define a destination
		$targetFolder = 'files/productos'; // Relative to the root
		if (!empty($_FILES)) {
			$tempFile = $_FILES['file']['tmp_name'];
			$targetPath = $targetFolder;
			$path = $_FILES['file']['name'];
			$ext = pathinfo($path, PATHINFO_EXTENSION);
			$targetFile = rtrim($targetPath,'/') . '/' . $_POST['articulo_id'].'.'.$ext;
			
			// Validate the file type
			$fileTypes = array('jpg','jpeg','gif','png'); // File extensions
			$fileParts = pathinfo($_FILES['file']['name']);
			$response = array ();
			if (in_array($fileParts['extension'],$fileTypes)) {
				move_uploaded_file($tempFile,$targetFile);
				$response['success'] = 1;
				foreach ($_POST as $key => $value){
					$response[$key] = $value;
				}
				echo json_encode($response);
			} else {
				$response['success'] = 0;
				$response['error'] = 'Invalid file type.';
				echo json_encode($response);
			}
		}
	}
}
