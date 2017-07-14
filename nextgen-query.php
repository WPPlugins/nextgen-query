<?php
/*
Plugin Name: NextGEN Query
Description: NextGEN Query is a back-end tool for developers. Remove all the junk from the header and query galleries directly in PHP.
Author: Ryan Burnette
Author URI: http://ryanburnette.com/
Version: 2.1.1
License: GPL2
*/

// Version
$version = "2.1.1";
update_option('ngq_version', $version);

// Deactivate unless ngg is running
function ngq_deactivate() {
  if ( !class_exists('nggLoader') ) {
    deactivate_plugins(__FILE__);
  }
}
add_action('admin_init','ngq_deactivate');

require_once 'functions/cleanup.php';
require_once 'functions/functions.php';
require_once 'functions/deprecated.php';

// Menu and options page
function ngq_menu(){
  include 'functions/options-page.php';
}
function ngq_plugin_menu() {
  add_submenu_page('nextgen-gallery', 'NextGEN Query', 'Query', apply_filters('ngqOptionsPageCapability', 'manage_options'), 'nextgen_query', 'ngq_menu');
}
add_action('admin_menu', 'ngq_plugin_menu');
?>