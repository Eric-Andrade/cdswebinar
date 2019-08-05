<?php

function r_scripts_enqueue() {
    global $typenow;

    if( $typenow !== "cbswebinar") {
        return;
    }
    
// registers
    wp_register( 'r_main', plugins_url( '/assets/scripts/main.js', CDSWEBINAR_PLUGIN_URL ), array(), '1.0.0', true );
    wp_localize_script( 'r_main', 'cdswebinar_obj', array(
        "array_url"             =>          admin_url( "admin-ajax.php" )
    ));

// enqueues
    wp_enqueue_script( 'r_main' );


    // video #09 themes: uploading a logo
    // if (!isset($_GET['page']) || $_GET['page'] != "ju_theme_opts") {
    //     return;
    // }

    // wp_register_style( 'ju_bootstrap', ,get_template_directory_uri(), '/assets/scripts/bootstrap.css');
    // wp_enqueue_style( 'ju_bootstrap' );

    // wp_register_style( 'ju_options', ,get_template_directory_uri(), '/assets/scripts/options.js', array(), false, true );
    // wp_enqueue_style( 'ju_options' );
}
