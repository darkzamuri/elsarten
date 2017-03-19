<?php
App::uses('AppModel', 'Model');
/**
 * Factura Model
 *
 * @property categoria $Factura
 * @property Factura $Factura
 */


class UsersVendedoresVendedore extends AppModel {
	public $useTable = 'users_vendedores';
	public $hasAndBelongsToMany = array(
		'Vendedore' => array(
			'className' => 'Vendedore',
			'foreignKey' => 'co_ven'
		)
	);
}
