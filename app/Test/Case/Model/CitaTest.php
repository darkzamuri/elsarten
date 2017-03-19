<?php
App::uses('Cita', 'Model');

/**
 * Cita Test Case
 *
 */
class CitaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cita',
		'app.cliente',
		'app.vendedore',
		'app.zona',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cita = ClassRegistry::init('Cita');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cita);

		parent::tearDown();
	}

}
