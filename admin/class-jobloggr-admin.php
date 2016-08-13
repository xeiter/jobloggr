<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://zaroutski.com
 * @since      1.0.0
 *
 * @package    Jobloggr
 * @subpackage Jobloggr/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Jobloggr
 * @subpackage Jobloggr/admin
 * @author     Anton Zaroutski <anton@zaroutski.com>
 */
class Jobloggr_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Jobloggr_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Jobloggr_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/jobloggr-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Jobloggr_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Jobloggr_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/jobloggr-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Define information architecture
	 *
	 * @return mixed
	 * @since 1.0.0
	 */
	public function setup_ia() {

		$post_types['job'] = array(

			'labels' => piklist( 'post_type_labels', 'Job' ),
			// 'title' => __( 'Enter a new Job Title' ),
			// 'menu_icon' => piklist( 'url', 'piklist' ) . '/parts/img/piklist-menu-icon.svg',
			// 'page_icon' => piklist( 'url', 'piklist' ) . '/parts/img/piklist-page-icon-32.png',
			'supports'  => array( 'title', 'editor' ),
			'public' => true,
			// 'admin_body_class' => array( 'custom-body-class' ),
			'has_archive' => true,
			// 'rewrite' => array( 'slug' => 'piklist-demo' ),
			'capability_type' => 'post',
			// 'edit_columns' => array(
			// 'title' => __( 'Demo' ),
			// 	'author' => __( 'Assigned to' )
			// ),
			// 'hide_meta_box' => array(
			// 	'author'
			// ),
			/*'status' => array(
				'new' => array(
					'label' => 'New',
					'public' => false
				),
				'pending' => array(
					'label' => 'Pending Review',
					'public' => false
				),
				'demo'    => array(
					'label' => 'Demo',
					'public' => true,
					'exclude_from_search'  => true,
					'show_in_admin_all_list' => true,
					'show_in_admin_status_list' => true
				),
				'lock'    => array(
					'label'  => 'Lock',
					'public' => true
				)
			)*/
		);

		$post_types['workflow'] = array(

			'labels' => piklist( 'post_type_labels', 'Workflow' ),
			'supports'  => array( 'title', 'editor' ),
			'public' => true,
			'has_archive' => true,
			'capability_type' => 'post',

		);

		return $post_types;

	}

}
