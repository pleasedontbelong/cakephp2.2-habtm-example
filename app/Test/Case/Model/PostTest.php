<?php
App::uses('Post', 'Model');

/**
 * Post Test Case
 *
 */
class PostTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tag',
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Post = ClassRegistry::init('Post');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Post);

		parent::tearDown();
	}

	public function testBeforeSave(){
		// This is how usually the form sends the data
		$this->Post->data = array(
		    "Post" => array(
		    	"name" => "test post",
		    	"Tag" => array(1,3)
		    )
		);
		// In order to save a HABTM relation the data must be
		// formatted this way
		$expected = array(
			"Post" => array(
	            "name" => "test post"
	        ),
			"Tag" => array(
		        "Tag" => array(1,3)
			)			
		);

		// The before save should transform the data into
		// the correct format
		$this->Post->BeforeSave();
		$this->assertEquals($expected, $this->Post->data);
	}

}
