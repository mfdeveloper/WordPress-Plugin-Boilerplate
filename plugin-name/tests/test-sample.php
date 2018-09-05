<?php
/**
 * Class SampleTest
 *
 * @package Wordpress_Plugin_Boilerplate
 */

/**
 * Sample test case.
 */
class SampleTest extends WP_UnitTestCase {

	/**
	 * A single example test.
	 */
	function testIsUser() {
		// Replace this with some actual testing code.
		$userId = $this->factory->user->create(['user_login' => 'someone', 'role'=> 'admin']);
		$userMetadata = get_user_by('id', $userId);
		
		$this->assertEquals( $userMetadata->data->user_login, 'someone' );
	}
}
