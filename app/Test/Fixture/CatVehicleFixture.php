<?php
/**
 * CatVehicleFixture
 *
 */
class CatVehicleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'title' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'subcategory_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'add_type' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'make' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'model' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'type' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'engine_cappacity' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'milage' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'mfg_year' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'reg_year' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fuel_type' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'kms_driven' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'city' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'location' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'seller_type' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'premium_type' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'can_message' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created_at' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'deleted_at' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'category_id' => array('column' => 'category_id', 'unique' => 0),
			'subcategory_id' => array('column' => 'subcategory_id', 'unique' => 0)
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
			'title' => 'Lorem ipsum dolor sit amet',
			'category_id' => 1,
			'subcategory_id' => 1,
			'add_type' => 1,
			'make' => 'Lorem ipsum dolor sit amet',
			'model' => 'Lorem ipsum dolor sit amet',
			'type' => 'Lorem ipsum dolor sit amet',
			'engine_cappacity' => 'Lorem ipsum dolor sit amet',
			'milage' => 'Lorem ipsum dolor sit amet',
			'mfg_year' => 1,
			'reg_year' => 1,
			'fuel_type' => 'Lorem ipsum dolor sit amet',
			'kms_driven' => 1,
			'city' => 'Lorem ipsum dolor sit amet',
			'location' => 'Lorem ipsum dolor sit amet',
			'seller_type' => 1,
			'premium_type' => 1,
			'can_message' => 1,
			'created_at' => '2015-03-08 19:37:58',
			'deleted_at' => '2015-03-08 19:37:58',
			'id' => 1
		),
	);

}
