<?php
/*
Plugin Name: Visualiseur du fichier debug.log
Description: Plugin réalisé en POO
Author:BIBI
Version: 1.0
*/

defined('ABSPATH') || die;
//require
require_once plugin_dir_path(__FILE__)."includes/LogViewer.php";
//

function JL_init_plugin()
{
    //initialiser la class principale du plugin
    \WPLogViewer\LogViewer::getInstance()->init();
}
add_action('plugin_loaded', 'JL_init_plugin');

function JL_log_viewer_activate()
{
//Appeler une methode de la classe principale pour mener des 
error_log('activation');
}

register_activation_hook(__FILE__, 'JL_log_viewer_activate');

function JL_log_viewer_desactivation()
{
error_log('desactivation');
}

register_deactivation_hook( __FILE__, 'JL_log_viewer_desactivation' );

function JL_log_viewer_desinstallation()
{

}

register_deactivation_hook( __FILE__, 'JL_log_viewer_desinstallation' );