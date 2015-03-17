<?php
App::uses('CategoriesController', 'Controller');

/**
 * CategoriesController Test Case
 *
 */
class CategoriesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.category',
		'app.ad',
		'app.subcategory',
		'app.cat_vehicle',
		'app.featured_plan_type'
	);

}
