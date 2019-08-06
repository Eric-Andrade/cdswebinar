<?php

function r_admin_enqueue() {
    global $typenow;

    if( $typenow !== "cdswebinar" ) {
        return;
    }
    
// registers
    wp_register_style( 'r_bootstrap', plugins_url('/assets/styles/bootstrap.css', CDSWEBINAR_PLUGIN_URL ));

// enqueues
    wp_enqueue_style( 'r_bootstrap' );


    


    // video #09 themes: uploading a logo
    // if (!isset($_GET['page']) || $_GET['page'] != "ju_theme_opts") {
    //     return;
    // }

    // wp_register_style( 'ju_bootstrap', ,get_template_directory_uri(), '/assets/scripts/bootstrap.css');
    // wp_enqueue_style( 'ju_bootstrap' );

    // wp_register_style( 'ju_options', ,get_template_directory_uri(), '/assets/scripts/options.js', array(), false, true );
    // wp_enqueue_style( 'ju_options' );
}