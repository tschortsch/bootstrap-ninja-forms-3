<?php

/*
Plugin Name: Bootstrap NinjaForms 3
Description: Bootstrap Styles for NinjaForms 3 plugin.
Version: 0.0.1
Author: Juerg Hunziker
Text Domain: bootstrap-nf-3
Author URI: http://github.com/tschortsch/bootstrap-ninja-forms-3
License: MIT
*/

define( 'BOOTSTRAP_NINJA_FORMS_3_DIR', plugin_dir_path( __FILE__ ) );

global $bootstrap_ninjaforms_3;
$bootstrap_ninjaforms_3 = new Bootstrap_NinjaForms_3();

class Bootstrap_NinjaForms_3 {
	var $version = '0.0.1';

	/**
	 * Constructor
	 */
	public function __construct() {
		add_filter( 'ninja_forms_field_template_file_paths', array( $this, 'add_ninja_forms_bootstrap_template_file_path' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'add_ninja_forms_bootstrap_css' ) );
	}

	public function add_ninja_forms_bootstrap_template_file_path( $paths ) {
		$paths[] = BOOTSTRAP_NINJA_FORMS_3_DIR . 'ninja-forms/templates/';
		return $paths;
	}

	public function add_ninja_forms_bootstrap_css() {
		wp_enqueue_style( 'style', plugins_url( '/css/bootstrap-ninjaforms-3.css', __FILE__ ) );
	}
}
