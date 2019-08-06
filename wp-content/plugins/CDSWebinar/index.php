<?php
/**
 * Plugin Name: CDS Webinar
 * Description: Special WordPress plugin to manage data between Clave de Sol & WebinarJam API. It allows see info about webinars created in WebinarJam.com
 * Version: 1.0
 * Author: Itecor Durango
 * Author URI: https://itecordurango.com/WebPages/WelcomeItecor-es.aspx 
 * Text Domain: cdswebinar 
 */


// Simple hacking security
if ( !function_exists('add_action')) {
    echo 'Not allowed';
    exit();
}

// Setup
 define( 'CDSWEBINAR_PLUGIN_URL', __FILE__);

// Includes
 include( 'includes/activate.php' );
 include( 'includes/deactivate.php' );
 include( 'includes/init.php' );
 include( 'includes/admin/init.php' );
 include( 'process/save-post.php' );
 include( 'process/filter-content.php' );
 include( 'includes/front/enqueue.php' );
 include( 'process/data-cdswebinar.php' );
 include( dirname(CDSWEBINAR_PLUGIN_URL) . '/includes/widgets.php' );
 include( dirname(CDSWEBINAR_PLUGIN_URL) . '/includes/widgets/cdswebinar-calendar.php' ); 
 include( 'includes/cron.php' );
 include( 'includes/admin/dashboard-widgets.php' );
// my code
    include( 'process/get-cdswebinar.php' );
    // include( 'process/get-cdswebinars.php' );
    // include( 'process/save-cdswebinar.php' );

// Hooks
 register_activation_hook(  __FILE__, 'r_activate_plugin' );
 register_deactivation_hook(  __FILE__, 'r_deactivate_plugin' );
 add_action( 'init', 'cdswebinar_init' );
 add_action( 'admin_init', 'cdswebinar_admin_init' );
 add_action( 'save_post_cdswebinar', 'r_save_post_admin', 2, 10 ); // 2 = priority, 10 = args
 add_filter( 'the_content', 'r_filter_cdswebinar_content', 100 ); // video #09 plugin
 add_action( 'wp_enqueue_scripts', 'r_scripts_enqueue', 9999 ); // 9999 = delay
 add_action( 'wp_ajax_r_data_cdswebinar', 'r_data_cdswebinar' );
 add_action( 'wp_ajax_nopriv_r_data_cdswebinar', 'r_data_cdswebinar' );
 add_action( 'widgets_init', 'r_widgets_init' );
 add_action( 'r_cdswebinar_calendar_hook', 'r_generate_cdswebinar_calendar' );
 add_action( 'wp_dashboard_setup', 'ju_add_dashboard_widgets' );
//  add_action( 'admin_enqueue_scripts', 'r_admin_enqueue');
// my code
    // Admin
    //  add_filter( 'the_content', 'r_get_cdswebinar_admin' );
    //  add_action( 'get_cdswebinar', 'get_cdswebinar_admin' );
    //  add_action( 'save_cdswebinar', 'save_cdswebinar_admin' );

    // Students
    //  add_action( 'get_cdswebinar', 'get_cdswebinar_student');
    //  add_action( 'get_cdswebinar', 'get_cdswebinar_student');
    //  add_action( 'save_cdswebinar', 'save_cdswebinar_student');

    // Shortcodes