<?php

function r_filter_cdswebinar_content( $content ) {
    if (!is_singular('cdswebinar')) {
        return $content;
    }
    
    global $post, $wpdb;
    //* Data from DataBase
    $cdswebinar_data                =   get_post_meta( $post->ID, 'cdswebinar_data', true );
    $cdswebinar_tpl_res             =   wp_remote_get( plugins_url('process/cdswebinar-template.php', CDSWEBINAR_PLUGIN_URL) );
    $cdswebinar_html                =   wp_remote_retrieve_body( $cdswebinar_tpl_res );
    // $cdswebinar_html                =   file_get_contents( 'cdswebinar-template.php', true );
    // $response                       =   wp_remote_get( 'http://itecordurango.com/subdominios/api_kityplancho/api/Clientes?ID=71' );
    // $cdswebinar_html                =   str_replace( 'PRIVACITY_PH', $cdswebinar_data['passwordsettings'], $cdswebinar_html);
    if ($cdswebinar_data['passwordsettings'] !== 'unpasswored') {
        $cdswebinar_html            =   str_replace( 'PRIVACITY_PH', 'You need to pay for it first.', $cdswebinar_html);
    } else {
        $cdswebinar_html            =   str_replace( 'PRIVACITY_PH', 'Free access', $cdswebinar_html);
    }
    // $cdswebinar_html                =   str_replace( 'WEBINARLINK_PH', $cdswebinar_data['webinarlink'], $cdswebinar_html);
    $cdswebinar_html                =   str_replace( 'STUDENTS_COUNTER_PH', 'Data from DataBase', $cdswebinar_html);
    $cdswebinar_html                =   str_replace( 'DATE_PH', 'Data from WebinarJam', $cdswebinar_html);
    $cdswebinar_html                =   str_replace( 'CHRONOMETER_PH', 'Data from DataBase', $cdswebinar_html);
    $cdswebinar_html                =   str_replace( 'COST_PH', $cdswebinar_data['cost'], $cdswebinar_html);
    $cdswebinar_html                =   str_replace( 'IMG_PRESENTER', 'https://banner2.kisspng.com/20180517/uzq/kisspng-computer-icons-user-profile-male-avatar-5afd8d7b2682b3.7338522715265662671577.jpg', $cdswebinar_html);

    //* Data from API REST WebinarJam
    if (getCDSWebinarData($cdswebinar_data['webinarlink'])) {
        $cdswebinar_html            =   str_replace( 'DESCRIPTION_PH', 'Data from WebinarJam', $cdswebinar_html);
        $cdswebinar_html            =   str_replace( 'TEACHER_NAME_PH', getCDSWebinarData($cdswebinar_data['webinarlink'])->CNOMBRE, $cdswebinar_html);
        $cdswebinar_html            =   str_replace( 'TEACHER_EMAIL_PH', getCDSWebinarData($cdswebinar_data['webinarlink'])->CEMAIL, $cdswebinar_html);
        $cdswebinar_html            =   str_replace( 'BUTTON_CDSWEBINAR_PH', '<div class="form-group"><a class="btn btn-default" href="'. $cdswebinar_data['webinarlink'] .'" role="button" target="_blank">Ir al webinar</a></div>', $cdswebinar_html);
    } else {
        $cdswebinar_html            =   str_replace( 'DESCRIPTION_PH', 'Data from WebinarJam', $cdswebinar_html);
        $cdswebinar_html            =   str_replace( 'TEACHER_NAME_PH', 'Sin datos', $cdswebinar_html); //! contenido de botón pendiente
        $cdswebinar_html            =   str_replace( 'TEACHER_EMAIL_PH', 'Sin datos', $cdswebinar_html); //! contenido de botón pendiente
        $cdswebinar_html            =   str_replace( 'BUTTON_CDSWEBINAR_PH', '<div class="form-group"><a class="btn btn-default" href="'. $cdswebinar_data['webinarlink'] .'" role="button" target="_blank">Inscribirse</a></div>', $cdswebinar_html); //! contenido de botón pendiente
    }

    // Traslations
    $cdswebinar_html                =   str_replace( 'DESCRIPTION_I18N', __( 'Description', 'cdswebinar' ), $cdswebinar_html );
    $cdswebinar_html                =   str_replace( 'COST_I18N', __( 'Cost', 'cdswebinar' ), $cdswebinar_html );
    $cdswebinar_html                =   str_replace( 'COST_I18N', __( 'Cost', 'cdswebinar' ), $cdswebinar_html );


    return $cdswebinar_html . $content;
}

// Function returns webinar data
function getCDSWebinarData( $uri ) {
    $response = wp_remote_get( $uri );
    if ( !is_singular( $response ) ) {
        $header = $response['headers']; // array of http header lines
        $body = $response['body']; // use the content
        //
        try {
            // Note that we decode the body's response since it's the actual JSON feed
            $json = json_decode( $response['body'] );

        } catch ( Exception $ex ) {
            $json = null;
        } // end try/catch

        return $json;
    }
}