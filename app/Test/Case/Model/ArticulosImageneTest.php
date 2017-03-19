<?php
App::uses('ArticulosImagene', 'Model');

/**
 * ArticulosImagene Test Case
 *
 */
class ArticulosImageneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.articulos_imagene',
		'app.articulo',
		'app.categoria',
		'app.lin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ArticulosImagene = ClassRegistry::init('ArticulosImagene');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ArticulosImagene);

		parent::tearDown();
	}

}
