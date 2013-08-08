<?php
/*
Plugin Name: Top Hits Sourabh
Plugin URI: http://wordpress.org/plugins/top-hits-sourabh/
Description: This is just a start
Author: Sourabh Dua
Version: 1.0
*/

/*****************
*global variables
******************/

$mfwp_prefix = 'mfwp_';
$mfwp_plugin_name = 'Top Hits Sourabh';

$mfwp_options = get_option('mfwp_settings');

/*****************
*includes
******************/
include('includes/scripts.php');
include('includes/data-processing.php');
include('includes/display-functions.php');
include('includes/admin-page.php');
 ?>