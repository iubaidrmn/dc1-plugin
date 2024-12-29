<?php

if( !function_exists('dc1_plugin_scripts')) {
    function dc1_plugin_scripts() {

        //Plugin Frontend CSS
        wp_enqueue_style('dc1-css', DC1_PLUGIN_DIR. 'assets/css/style.css');

        //Plugin Frontend JS
        wp_enqueue_script('dc1-js', DC1_PLUGIN_DIR. 'assets/js/main.js'); 
        
    }
    add_action('wp_enqueue_scripts', 'dc1_plugin_scripts');
}