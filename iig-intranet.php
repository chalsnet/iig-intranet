<?php
/*
Plugin Name: IIG Intranet
Description: IIG Intranet
Author: Sarah Jeon
Version: 0.1
*/

define( "IIG_INTRANET_PATH", plugin_dir_path(__FILE__) );
define( "IIG_INTRANET_URL", plugin_dir_url(__FILE__) );
define( "CURRENT_URL", $_SERVER['REQUEST_URI'] );

function iig_intranet_plugin_setup_menu(){
        add_menu_page( 'IIG Intranet', 'IIG Intranet', 'read', 'iig-intranet', 'iig_intranet_init' );
}
add_action('admin_menu', 'iig_intranet_plugin_setup_menu');

function add_iig_intranet_admin_styles() {
        wp_enqueue_style( "iig-admin-bootstrap-style", IIG_INTRANET_URL . "bootstrap_4/css/bootstrap.css", array(), "", false );
        wp_enqueue_script( "iig-admin-bootstrap-script", IIG_INTRANET_URL . "bootstrap_4/js/bootstrap.js", array(), "", true );
        wp_enqueue_style( "iig-admin-style", IIG_INTRANET_URL . "admin/inc/iig_admin_style.css", array(), "", false );
        wp_enqueue_script( "iig-admin-script", IIG_INTRANET_URL . "admin/inc/iig_admin_script.js", array(), "", true );
}
add_action("admin_enqueue_scripts", "add_iig_intranet_admin_styles");

function add_iig_intranet_front_styles() {
        wp_enqueue_style( "iig-front-style", IIG_INTRANET_URL . "front/inc/iig_front_style.css", array(), "", false );
        wp_enqueue_script( "iig-front-script", IIG_INTRANET_URL . "front/inc/iig_front_script.js", array(), "", true );
        wp_enqueue_style( "iig-front-bootstrap-style", IIG_INTRANET_URL . "bootstrap_4/css/bootstrap.css", array(), "", false );
        wp_enqueue_script( "iig-front-bootstrap-script", IIG_INTRANET_URL . "bootstrap_4/js/bootstrap.js", array(), "", true );
}
// add_action("admin_enqueue_scripts", "add_iig_intranet_front_styles");

function iig_intranet_init() {
        require_once IIG_INTRANET_PATH . "/admin/dashboard.php";
        print_r($_GET["page"]);
}

