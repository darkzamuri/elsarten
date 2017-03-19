<?php
App::uses('Articulo', 'Model');

/**
 * Articulo Test Case
 *
 */
class ArticuloTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.articulo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Articulo = ClassRegistry::init('Articulo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Articulo);

		parent::tearDown();
	}

}
