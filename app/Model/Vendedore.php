<?php
App::uses('AppModel', 'Model');
/**
 * Vendedore Model
 *
 */
class Vendedore extends AppModel {
	var $displayField = 'ven_des';

	function getCoven($id){
		$data = $this->query('select v.co_ven from vendedores v, users u, users_vendedores uv where v.co_ven=uv.co_ven and u.id=uv.user_id and u.id= '.$id);
		$convens = "";
		$prefix = "";
		foreach ($data as $key => $value) {
			# code...
			$convens .= $prefix."'".$value["v"]["co_ven"]."'";
			$prefix = ',';
		}
		return $convens;
	}

	
}
