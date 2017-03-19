<?php
App::uses('AppModel', 'Model');
/**
 * ArticulosImagene Model
 *
 * @property Articulo $Articulo
 */
class ArticulosImagene extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Articulo' => array(
			'className' => 'Articulo',
			'foreignKey' => 'articulo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
