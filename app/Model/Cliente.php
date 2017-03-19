<?php
App::uses('AppModel', 'Model');
/**
 * Cliente Model
 *
 * @property Vendedore $Vendedore
 * @property Zona $Zona
 */
class Cliente extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Vendedore' => array(
			'className' => 'Vendedore',
			'foreignKey' => 'co_ven',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Zona' => array(
			'className' => 'Zona',
			'foreignKey' => 'co_zon',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	public $hasMany = array(		
		'Cita' => array(
			'className' => 'Cita',
			'foreignKey' => 'cliente_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Cotizacione' => array(
			'className' => 'Cotizacione',
			'foreignKey' => 'co_cli',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	function getCountClientes($co_ven){
		$data = $this->query('SELECT COUNT(*) as count FROM clientes WHERE co_ven in '.'('.$co_ven.')');
		return $data;
	}

	function getClientes($co_ven , $page , $perPage){
		$offset = ($page - 1) * $perPage;
		$data = $this->query('SELECT id , cli_des , img_url  FROM clientes  WHERE co_ven in '.'('.$co_ven.') LIMIT '.$perPage.' OFFSET '.$offset);
		return $data;
	}

	function getClientesHoy($co_ven , $dia){
		
		$data = $this->query('SELECT id , cli_des , img_url  FROM clientes  WHERE co_ven in '.'('.$co_ven.') AND dia LIKE "'.$dia.'"');
		return $data;
	}

	function searchCliente($co_ven , $name){
		
		$data = $this->query('SELECT id , cli_des , img_url  FROM clientes  WHERE co_ven in '.'('.$co_ven.') AND cli_des LIKE "%'.$name.'%"');
		return $data;
	}

	
}
