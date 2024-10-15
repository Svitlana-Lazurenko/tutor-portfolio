<?php
if (!defined('ABSPATH')) exit;

// Define constants
if (!defined('_VERSION')) {
	define('_VERSION', '1.0.0');
}

// Styles and scripts
require get_template_directory() . '/inc/_scripts.php';

// Navigation menus
require get_template_directory() . '/inc/_nav-menus.php';

// ACF options page
require get_template_directory() . '/inc/_acf-options-page.php';

// SVG allow
require get_template_directory() . '/inc/_svg-support.php';
