<?php
/**
 * Group Cover Controller Tests.
 *
 * @group groups
 * @group group-cover
 * @group attachments
 */
class BP_Tests_Group_Cover_REST_Controller extends BP_Test_REST_Controller_Testcase {
	protected $image_file;
	protected $group_id;
	protected $controller = 'BP_Groups_Cover_REST_Controller';
	protected $handle     = 'groups';

	public function set_up() {
		parent::set_up();

		$this->image_file = BP_TESTS_DIR . 'assets/test-image-large.jpg';
		$this->group_id   = $this->bp::factory()->group->create(
			array(
				'name'        => 'Group Test',
				'description' => 'Group Description',
				'creator_id'  => $this->user,
			)
		);
	}

	public function test_register_routes() {
		$routes   = $this->server->get_routes();
		$endpoint = $this->endpoint_url . '/(?P<group_id>[\d]+)/cover';

		// Single.
		$this->assertArrayHasKey( $endpoint, $routes );
		$this->assertCount( 3, $routes[ $endpoint ] );
	}

	/**
	 * @group get_items
	 */
	public function test_get_items() {
		$this->markTestSkipped();
	}

	/**
	 * @group get_item
	 */
	public function test_get_item() {
		$this->markTestSkipped();
	}

	/**
	 * @group get_item
	 */
	public function test_get_item_with_support_for_the_community_visibility() {
		toggle_component_visibility();

		$request = new WP_REST_Request( 'GET', sprintf( $this->endpoint_url . '/%d/cover', $this->group_id ) );
		$request->set_param( 'context', 'view' );
		$response = $this->server->dispatch( $request );

		$this->assertErrorResponse( 'bp_rest_authorization_required', $response, rest_authorization_required_code() );
	}

	/**
	 * @group get_item
	 */
	public function test_get_item_with_no_image() {
		$request  = new WP_REST_Request( 'GET', sprintf( $this->endpoint_url . '/%d/cover', $this->group_id ) );
		$response = $this->server->dispatch( $request );

		$this->assertErrorResponse( 'bp_rest_attachments_group_cover_no_image', $response, 500 );
	}

	/**
	 * @group get_item
	 */
	public function test_get_item_invalid_group_id() {
		$request  = new WP_REST_Request( 'GET', sprintf( $this->endpoint_url . '/%d/cover', REST_TESTS_IMPOSSIBLY_HIGH_NUMBER ) );
		$response = $this->server->dispatch( $request );
		$this->assertErrorResponse( 'bp_rest_group_invalid_id', $response, 404 );
	}

	/**
	 * @group create_item
	 */
	public function test_create_item() {
		$this->markTestSkipped();
	}

	/**
	 * @group create_item
	 */
	public function test_create_item_no_valid_image_directory() {
		if ( 4.9 > (float) $GLOBALS['wp_version'] ) {
			$this->markTestSkipped();
		}

		wp_set_current_user( $this->user );
		$reset_files = $_FILES;

		$_FILES['file'] = array(
			'tmp_name' => $this->image_file,
			'name'     => 'test-image-large.jpg',
			'type'     => 'image/jpeg',
			'error'    => 0,
			'size'     => filesize( $this->image_file ),
		);

		$request = new WP_REST_Request( 'POST', sprintf( $this->endpoint_url . '/%d/cover', $this->group_id ) );
		$request->set_file_params( $_FILES );
		$response = $this->server->dispatch( $request );

		$this->assertErrorResponse( 'bp_rest_attachments_group_cover_upload_error', $response, 500 );

		$_FILES = $reset_files;
	}

	/**
	 * @group create_item
	 */
	public function test_create_item_image_upload_disabled() {
		if ( 4.9 > (float) $GLOBALS['wp_version'] ) {
			$this->markTestSkipped();
		}

		wp_set_current_user( $this->user );
		$reset_files = $_FILES;

		// Disabling group cover upload.
		add_filter( 'bp_disable_group_cover_image_uploads', '__return_true' );

		$_FILES['file'] = array(
			'tmp_name' => $this->image_file,
			'name'     => 'test-image-large.jpg',
			'type'     => 'image/jpeg',
			'error'    => 0,
			'size'     => filesize( $this->image_file ),
		);

		$request = new WP_REST_Request( 'POST', sprintf( $this->endpoint_url . '/%d/cover', $this->group_id ) );
		$request->set_file_params( $_FILES );
		$response = $this->server->dispatch( $request );
		$this->assertErrorResponse( 'bp_rest_attachments_group_cover_disabled', $response, 500 );

		remove_filter( 'bp_disable_group_cover_image_uploads', '__return_true' );
		$_FILES = $reset_files;
	}

	/**
	 * @group create_item
	 */
	public function test_create_item_empty_image() {
		wp_set_current_user( $this->user );

		$request  = new WP_REST_Request( 'POST', sprintf( $this->endpoint_url . '/%d/cover', $this->group_id ) );
		$response = $this->server->dispatch( $request );
		$this->assertErrorResponse( 'bp_rest_attachments_group_cover_no_image_file', $response, 500 );
	}

	/**
	 * @group create_item
	 */
	public function test_create_item_user_not_logged_in() {
		$request  = new WP_REST_Request( 'POST', sprintf( $this->endpoint_url . '/%d/cover', $this->group_id ) );
		$response = $this->server->dispatch( $request );
		$this->assertErrorResponse( 'bp_rest_authorization_required', $response, rest_authorization_required_code() );
	}

	/**
	 * @group create_item
	 */
	public function test_create_item_unauthorized_user() {
		$u1 = $this->bp::factory()->user->create();

		wp_set_current_user( $u1 );

		$request  = new WP_REST_Request( 'POST', sprintf( $this->endpoint_url . '/%d/cover', $this->group_id ) );
		$response = $this->server->dispatch( $request );
		$this->assertErrorResponse( 'bp_rest_authorization_required', $response, rest_authorization_required_code() );
	}

	/**
	 * @group create_item
	 */
	public function test_create_item_invalid_group_id() {
		wp_set_current_user( $this->user );

		$request  = new WP_REST_Request( 'POST', sprintf( $this->endpoint_url . '/%d/cover', REST_TESTS_IMPOSSIBLY_HIGH_NUMBER ) );
		$response = $this->server->dispatch( $request );
		$this->assertErrorResponse( 'bp_rest_group_invalid_id', $response, 404 );
	}

	/**
	 * @group update_item
	 */
	public function test_update_item() {
		$this->markTestSkipped();
	}

	/**
	 * @group delete_item
	 */
	public function test_delete_item() {
		$this->markTestSkipped();
	}

	/**
	 * @group delete_item
	 */
	public function test_delete_item_user_not_logged_in() {
		$request  = new WP_REST_Request( 'DELETE', sprintf( $this->endpoint_url . '/%d/cover', $this->group_id ) );
		$response = $this->server->dispatch( $request );
		$this->assertErrorResponse( 'bp_rest_authorization_required', $response, rest_authorization_required_code() );
	}

	/**
	 * @group delete_item
	 */
	public function test_delete_item_unauthorized_user() {
		$u1 = $this->bp::factory()->user->create();

		wp_set_current_user( $u1 );

		$request  = new WP_REST_Request( 'DELETE', sprintf( $this->endpoint_url . '/%d/cover', $this->group_id ) );
		$response = $this->server->dispatch( $request );
		$this->assertErrorResponse( 'bp_rest_authorization_required', $response, rest_authorization_required_code() );
	}

	/**
	 * @group delete_item
	 */
	public function test_delete_item_invalid_group_id() {
		wp_set_current_user( $this->user );

		$request  = new WP_REST_Request( 'DELETE', sprintf( $this->endpoint_url . '/%d/cover', REST_TESTS_IMPOSSIBLY_HIGH_NUMBER ) );
		$response = $this->server->dispatch( $request );
		$this->assertErrorResponse( 'bp_rest_group_invalid_id', $response, 404 );
	}

	/**
	 * @group delete_item
	 */
	public function test_delete_item_failed() {
		wp_set_current_user( $this->user );

		$request  = new WP_REST_Request( 'DELETE', sprintf( $this->endpoint_url . '/%d/cover', $this->group_id ) );
		$response = $this->server->dispatch( $request );

		$this->assertErrorResponse( 'bp_rest_attachments_group_cover_delete_failed', $response, 500 );
	}

	/**
	 * @group prepare_item
	 */
	public function test_prepare_item() {
		$this->markTestSkipped();
	}

	public function test_get_item_schema() {
		$request    = new WP_REST_Request( 'OPTIONS', sprintf( $this->endpoint_url . '/%d/cover', $this->group_id ) );
		$response   = $this->server->dispatch( $request );
		$data       = $response->get_data();
		$properties = $data['schema']['properties'];

		$this->assertEquals( 1, count( $properties ) );
		$this->assertArrayHasKey( 'image', $properties );
	}

	public function test_context_param() {

		// Single.
		$request  = new WP_REST_Request( 'OPTIONS', sprintf( $this->endpoint_url . '/%d/cover', $this->group_id ) );
		$response = $this->server->dispatch( $request );
		$data     = $response->get_data();

		$this->assertNotEmpty( $data );
	}
}
