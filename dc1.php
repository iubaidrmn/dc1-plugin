<?php
/*
* Plugin Name: DC1
* Plugin URI: https://icode.guru
* Author: Team Six
* Author URI: https://teamsix.github.io
* Description: Plugin for icodeguru website to add user dashboard. include what .
* Version: 1.0.0
* License: GPL2
* License URI:  https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain: Dedication_Consistency_1Percent_Growth_everyday
*/

//If this file is called directly, abort.
if (!defined( 'WPINC' )) {
    die;
}

//Define Constants
if ( !defined('DC1_VERSION')) {
    define('DC1_VERSION', '1.0.0');
}
if ( !defined('DC1_PLUGIN_DIR')) {
    define('DC1_PLUGIN_DIR', plugin_dir_url( __FILE__ ));
}

//Include Scripts & Styles
require plugin_dir_path( __FILE__ ). 'inc/scripts.php';

//Settings Menu & Page
require plugin_dir_path( __FILE__ ). 'inc/settings.php';

// Shortcode for dashboard
function dc1_dashboard_shortcode() {
    if (is_user_logged_in()) {
        ob_start();
        include plugin_dir_path(__FILE__) . 'inc/dashboard-template.php';
        return ob_get_clean();
    } else {
        return '<p>Please <a href="' . wp_login_url() . '">log in</a> to access the dashboard.</p>';
    }
}
add_shortcode('dc1_dashboard', 'dc1_dashboard_shortcode');
?>