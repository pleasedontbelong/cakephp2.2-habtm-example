<?php
App::uses('PostsController', 'Controller');

/**
 * PostsController Test Case
 *
 */
class PostsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.post',
		'app.tag',
		'app.postsTag',
	);


/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
		// Empty form
		$result = $this->testAction(
           '/posts/add',
            array('return' => 'view', 'method' => 'get')
        );

		// by default the Form helper should create a select with name data[Tag][Tag]
        $this->assertContains('select name="data[Post][Tag][]"',$result);
	}

	public function testAddSave(){
		$post = array(
		    "Post" => array(
		    	"name" => "test post",
		    	"Tag" => array(1,3)
		    )
		);
		// Empty form
		$result = $this->testAction(
           '/posts/add',
            array('return' => 'view', 'data' => $post)
        );

        // Test save
        $post_id = $this->controller->Post->id;
        $created_post = $this->controller->Post->read(null, $post_id);

        $this->assertTrue(is_array($created_post));
        $this->assertEquals($created_post['Post']['name'], $post['Post']['name']);
        $this->assertEquals(count($created_post['Tag']), count($post['Post']['Tag']));
	}

/**
 * testAddWithValidation method
 *
 * @return void
 */
	public function testAddWithValidationOk() {
		$post = array(
		    "Post" => array(
		    	"name" => "test post",
		    	"Tag" => array(1,3)
		    )
		);
		// Empty form
		$result = $this->testAction(
           '/posts/add_with_validation',
            array('return' => 'view', 'data' => $post)
        );

        // Test save
        $post_id = $this->controller->Post->id;
        $created_post = $this->controller->Post->read(null, $post_id);

        $this->assertTrue(is_array($created_post));
        $this->assertEquals($created_post['Post']['name'], $post['Post']['name']);
        $this->assertEquals(count($created_post['Tag']), count($post['Post']['Tag']));
	}

/**
 * testAddWithValidationKO method
 *
 * @return void
 */
	public function testAddWithValidationKo() {
		$post = array(
		    "Post" => array(
		    	"name" => "test post"
		    )
		);
		// Empty form
		$result = $this->testAction(
           '/posts/add_with_validation',
            array('return' => 'view', 'data' => $post)
        );

        // Test save
        $post_id = $this->controller->Post->id;
        $this->assertEquals($post_id, false);
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
	}
}