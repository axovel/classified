<?php
App::uses('CatVehicle', 'Model');

/**
 * CatVehicle Test Case
 *
 */
class CatVehicleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cat_vehicle',
		'app.category',
		'app.subcategory'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CatVehicle = ClassRegistry::init('CatVehicle');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CatVehicle);

		parent::tearDown();
	}

}
