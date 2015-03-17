<?php
App::uses('Ad', 'Model');

/**
 * Ad Test Case
 *
 */
class AdTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ad',
		'app.category',
		'app.cat_vehicle',
		'app.subcategory',
		'app.featured_plan'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ad = ClassRegistry::init('Ad');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ad);

		parent::tearDown();
	}

}
