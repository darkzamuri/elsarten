<?php
App::uses('AppModel', 'Model');
/**
 * Factura Model
 *
 * @property categoria $Factura
 * @property Factura $Factura
 */
class Presupuesto extends AppModel {
	public $hasMany = array(
		'ArticulosPresupuesto' => array(
			'className' => 'ArticulosPresupuesto',
			'foreignKey' => 'presupuesto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
