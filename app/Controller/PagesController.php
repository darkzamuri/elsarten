<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Articulo' , 'Content' , 'Medias','Lin');

	public $components = array('Paginator');

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	public function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			return $this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		if(!empty($this->request->query(['search']))){
			$articulo = $this->searchjson($this->request->query(['search']));
		}else{
			$this->Articulo->recursive = 1;
			$articulo = $this->Paginator->paginate();
		}
		
		$medias = $this->Medias->find('all');
		$filtro= $this->Lin->find('all',array('fields'=>array('co_lin','lin_des')));
		$this->set(compact('page', 'subpage', 'title_for_layout' , 'articulo' , 'medias','filtro'));

		try {
			$this->render(implode('/', $path));
		} catch (MissingViewException $e) {
			if (Configure::read('debug')) {
				throw $e;
			}
			throw new NotFoundException();
		}

	}
	public function producto($page = null , $id = null){
		$producto = $this->Articulo->find('first', array('conditions' => array('Articulo.id' => $id)));
		$productos = $this->Articulo->find('all', array('conditions' => array('Articulo.co_lin' => $producto['Articulo']['co_lin'])));
		$this->set(compact('producto' , $producto , 'productos' , $productos));
	}
	public function search($valor=null){
		$term = null;
		if(!empty($valor)){
			$term = $valor;
			$terms = explode(' ', trim($term));
			$terms = array_diff($terms, array(''));
			foreach($terms as $term){
				$conditions[] = array('Articulo.art_des LIKE' => '%' . $term . '%');
			}

			$articulo = $this->Articulo->find('all', array('recursive' => 1, 'conditions' => $conditions));
			//debug($articulo);
		}
		$this->set('articulo',$articulo);
		//return $articulo;
		//$this->autoRender = false;
	}

	public function buscar($valor=null){
		$search = null;
		$conditions = array();
		if(!empty($this->request->query['data']['search'])){
			$search = $this->request->query(['filter']);
			$search = preg_replace('/[ˆa-zA-ZñÑáéíóúÁÉÍÓÚ0-9 ]/', '', $search);
			$term =  $this->request->query['data']['search'];
			$terms = explode(' ', trim($term));
			$terms = array_diff($terms, array(''));
			foreach($terms as $term){
				$terms1[] = preg_replace('/[ˆa-zA-ZñÑáéíóúÁÉÍÓÚ0-9 ]/', '', $term);
				$conditions[] = array('Articulo.art_des LIKE' => '%' . $term . '%');
			}
			
		}
		if($this->request->query(['filter'])!=''){
			$conditions[]=array('Articulo.co_lin'=>$this->request->query(['filter']));
		}
		$this->Paginator->settings = array(
	        'conditions' => $conditions,
	        'limit' => 30
		);
	    $articulo = $this->Paginator->paginate('Articulo');
		//$articulo = $this->Articulo->find('all', array('recursive' => 1, 'conditions' => $conditions, 'limit' => 200));
		if(count($articulo) == 1){
			//return $this->redirect(array('controller' => 'articulo', 'action' => 'view', $articulo))[0]['Platillo']['id']));
		}
		$filtro= $this->Lin->find('all',array('fields'=>array('co_lin','lin_des')));
		$terms1 = $this->request->query(['search']);
		$this->set(compact('articulo', 'filtro')); 
		$this -> render('/Pages/search');
	}

	public function searchjson(){
		$search = null;
		if(!empty($this->request->query(['search']))){
			$search = $this->request->query(['filter']);
			$search = preg_replace('/[ˆa-zA-ZñÑáéíóúÁÉÍÓÚ0-9 ]/', '', $search);
			$term =  $this->request->query(['search']);
			$terms = explode(' ', trim($term));
			$terms = array_diff($terms, array(''));
			foreach($terms as $term){
				$terms1[] = preg_replace('/[ˆa-zA-ZñÑáéíóúÁÉÍÓÚ0-9 ]/', '', $term);
				$conditions[] = array('Articulo.art_des LIKE' => '%' . $term . '%');
			}
			if(count($this->request->query(['filter']))!=''){
				$conditions['AND']=array('Articulo.co_lin'=>$this->request->query(['filter']));
			}
			$articulo = $this->Articulo->find('all', array('recursive' => 1, 'conditions' => $conditions, 'limit' => 200));
			if(count($articulo) == 1){
				//return $this->redirect(array('controller' => 'articulo', 'action' => 'view', $articulo))[0]['Platillo']['id']));
			}
			$terms1 = $this->request->query(['search']);
			//$dataC= debug(compact('articulo', 'terms1'));
			return $articulo;
			//return compact('articulo', 'terms1');
		}
		$this->set(compact('search'));

		if($this->request->is('ajax'))
		{
			$this->layout = false;
			$this->set('ajax', 1);
		}
		else
		{
			$this->set('ajax', 0);
		}
	}
}
