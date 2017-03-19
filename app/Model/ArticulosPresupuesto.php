<?php
App::uses('AppModel', 'Model');
/**
 * Factura Model
 *
 * @property categoria $Factura
 * @property Factura $Factura
 */


class ArticulosPresupuesto extends AppModel {
	public $belongsTo = array(
		'Articulo' => array(
			'className' => 'Articulo',
			'foreignKey' => 'articulo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Presupuesto' => array(
			'className' => 'Presupuesto',
			'foreignKey' => 'presupuesto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
