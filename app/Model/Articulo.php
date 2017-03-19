<?php
App::uses('AppModel', 'Model');
/**
 * Articulo Model
 *
 * @property categoria $categoria
 * @property lin $lin
 */
class Articulo extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	

	public $hasMany = array(
		'ArticulosImagene' => array(
			'className' => 'ArticulosImagene',
			'foreignKey' => 'articulo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ArticulosPresupuesto' => array(
			'className' => 'ArticulosPresupuesto',
			'foreignKey' => 'articulo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
