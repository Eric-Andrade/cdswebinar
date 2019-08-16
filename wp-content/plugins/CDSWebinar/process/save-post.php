<?php

function r_save_post_admin( $post_id, $post, $update ) {

// Ver data al pulsar publicar/actualizar
    // echo '<pre>';
    // print_r($_POST);
    // die();

    if (!$update) {
        return;
    }

    if(isset($_POST['r_webinarlink']) && isset($_POST['r_passwordsettings']) && isset($_POST['r_cost']) && isset($_POST['r_webinarpassword'])) {

        $cdswebinar_data                                =   array();
        $cdswebinar_data['webinarlink']                 =   sanitize_text_field($_POST['r_webinarlink']);
        $cdswebinar_data['passwordsettings']            =   sanitize_text_field($_POST['r_passwordsettings']);
        $cdswebinar_data['cost']                        =   sanitize_text_field($_POST['r_cost']);
        $cdswebinar_data['webinarpassword']             =   sanitize_text_field($_POST['r_webinarpassword']);

        update_post_meta( $post_id, 'cdswebinar_data', $cdswebinar_data );
    
    }

}