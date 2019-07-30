<?php

function r_save_post_admin( $post_id, $post, $update) {
    if (!$update) {
        return;
    }

// Ver data al pulsar publicar/actualizar
    // echo '<pre>';
    // print_r($_POST);
    // die();

    $cdswebinar_data                                =   array();
    $cdswebinar_data['webinarlink']                 =   sanitize_text_field($_POST['r_webinarlink']);
    $cdswebinar_data['passwordsettings']            =   sanitize_text_field($_POST['r_passwordsettings']);
    $cdswebinar_data['messageuser']                 =   sanitize_text_field($_POST['r_messageuser']);
    // $cdswebinar_data['']                            =   sanitize_text_field($_POST['']);
    // $cdswebinar_data['']                            =   sanitize_text_field($_POST['']);
    $cdswebinar_data['rating']                      =   0;
    $cdswebinar_data['rating_count']                =   0;

    update_post_meta($post_id, 'cdswebinar_data', $cdswebinar_data);

}