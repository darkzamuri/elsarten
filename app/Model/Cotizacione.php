<?php
App::uses('AppModel', 'Model');
/**
 * Cliente Model
 *
 * @property Vendedore $Vendedore
 * @property Zona $Zona
 */
class Cotizacione extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	
	public $hasOne = array(		
		'Articulo' => array(
			'className' => 'Articulo',
			'foreignKey' => false,
             'conditions' => array(
                 'RTRIM(Cotizacione.co_art) = RTRIM(Articulo.co_art)'
             )
		)
	);


}
