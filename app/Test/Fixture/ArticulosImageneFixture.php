<?php
/**
 * ArticulosImageneFixture
 *
 */
class ArticulosImageneFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'articulo_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'url' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'articulo_id' => 1,
			'url' => 'Lorem ipsum dolor sit amet',
			'created' => '2016-09-01 16:47:56',
			'modified' => '2016-09-01 16:47:56'
		),
	);

}
