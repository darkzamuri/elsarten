<?php
/**
 * ArticuloFixture
 *
 */
class ArticuloFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'co_art' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'art_des' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 120, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fecha_reg' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'manj_ser' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'co_lin' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 6, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'co_cat' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 6, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'co_subl' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 6, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'co_color' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 6, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'co_art'), 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'co_art' => 'Lorem ipsum dolor sit amet',
			'art_des' => 'Lorem ipsum dolor sit amet',
			'fecha_reg' => '2016-09-01 16:36:24',
			'manj_ser' => 1,
			'co_lin' => 'Lore',
			'co_cat' => 'Lore',
			'co_subl' => 'Lore',
			'co_color' => 'Lore'
		),
	);

}
