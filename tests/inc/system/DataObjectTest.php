<?php

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-03-18 at 22:11:28.
 */
class DataObjectTest extends PHPUnit_Framework_TestCase {

	/**
	 * @var DataObject
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp() {
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown() {
	}

	/**
	 * @covers DataObject::id
	 */
	public function testId() {
		$object = $this->getMock('DataObject', array('initDatabaseScheme'), array(array('id' => 123)));

		$this->assertEquals($object->id(), 123);
	}

	/**
	 * @covers DataObject::setFromArray
	 * @covers DataObject::getArray
	 */
	public function testSetFromArray() {
		$object = $this->getMock('DataObject', array('initDatabaseScheme'), array(array('id' => 123, 'a' => false, 'b' => '', 'c' => 0)));

		$object->setFromArray(array(
			'id'	=> false,
			'a'		=> true,
			'b'		=> 'test',
			'c'		=> 15.3,
			'unknown'	=> 'empty'
		));

		$this->assertEquals($object->getArray(), array(
			'id'	=> 123,
			'a'		=> true,
			'b'		=> 'test',
			'c'		=> 15.3
		));
	}

	/**
	 * @covers DataObject::databaseScheme
	 * @todo   Implement testDatabaseScheme().
	 */
	public function testDatabaseScheme() {
		// ...
	}

	/**
	 * @covers DataObject::databaseSchemeReference
	 * @todo   Implement testDatabaseSchemeReference().
	 */
	public function testDatabaseSchemeReference() {
		// ...
	}

	/**
	 * @covers DataObject::setValuesAsPostData
	 */
	public function testSetValuesAsPostData() {
		$Data = array(
			'id' => 123,
			'var' => 'foo',
			'test' => 'lol'
		);

		$_POST = array();

		$object = $this->getMock('DataObject', array('initDatabaseScheme'), array($Data));
		$object->setValuesAsPostData();

		$this->assertEquals($Data, $_POST);
	}

	/**
	 * @covers DataObject::insert
	 * @todo   Implement testInsert().
	 */
	public function testInsert() {
		// TODO
	}

	/**
	 * @covers DataObject::update
	 * @todo   Implement testUpdate().
	 */
	public function testUpdate() {
		// TODO
	}

}
