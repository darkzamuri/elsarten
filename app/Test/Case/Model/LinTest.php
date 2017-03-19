<?php
App::uses('Lin', 'Model');

/**
 * Lin Test Case
 *
 */
class LinTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Lin = ClassRegistry::init('Lin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Lin);

		parent::tearDown();
	}

}
