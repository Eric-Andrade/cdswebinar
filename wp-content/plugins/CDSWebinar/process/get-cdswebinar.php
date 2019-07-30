<?php

// Function returns webinar data
function getCDSWebinar( $uri ) {
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