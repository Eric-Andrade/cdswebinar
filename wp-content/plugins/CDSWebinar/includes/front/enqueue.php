<?php

function r_admin_enqueue() {
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
}
