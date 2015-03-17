<?php
App::uses('FeaturedPlanType', 'Model');

/**
 * FeaturedPlanType Test Case
 *
 */
class FeaturedPlanTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.featured_plan_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FeaturedPlanType = ClassRegistry::init('FeaturedPlanType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FeaturedPlanType);

		parent::tearDown();
	}

}
