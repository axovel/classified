<?php
App::uses('AdsMedia', 'Model');

/**
 * AdsMedia Test Case
 *
 */
class AdsMediaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ads_media',
		'app.ads'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AdsMedia = ClassRegistry::init('AdsMedia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AdsMedia);

		parent::tearDown();
	}

}
