<?php

function r_enqueue_scripts() {
    global $typenow;

    if( $typenow !== "cdswebinar" ) {
        return;
    }
    
// registers

    // wp_register_style( 'front_bootstrap', plugins_url('../../assets/styles/bootstrap.css' ));
    // wp_register_style( 'f_bootstrap', get_stylesheet_directory_uri() . '/assets/')
    // wp_register_script( 'r_main', plugins_url( '/assets/scripts/main.js', CDSWEBINAR_PLUGIN_URL ), array(), '1.0.0', false );
    // wp_localize_script( 'r_main', 'cdswebinar_obj', array(
    //     "array_url"             =>          admin_url( "admin-ajax.php" )
    // ));

// enqueues
    // wp_enqueue_script( 'r_main' );
    // wp_enqueue_style( 'front_bootstrap' );

    echo "<script>";
        echo "function ewe() {";                        
            echo "console.log('=================');";
            echo "console.log('ewe9');";
            echo "console.log('=================');";
        echo "}";
        echo "window.ewe();";
    echo "</script>";

    // video #09 themes: uploading a logo
    // if (!isset($_GET['page']) || $_GET['page'] != "ju_theme_opts") {
    //     return;
    // }

    // wp_register_style( 'ju_bootstrap', ,get_template_directory_uri(), '/assets/scripts/bootstrap.css');
    // wp_enqueue_style( 'ju_bootstrap' );

    // wp_register_style( 'ju_options', ,get_template_directory_uri(), '/assets/scripts/options.js', array(), false, true );
    // wp_enqueue_style( 'ju_options' );
}
