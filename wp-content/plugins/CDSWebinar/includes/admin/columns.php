<?php
function add_new_cdswebinar_columns( $columns ) {
    $new_columns                    = array();
    $new_columns['cb']              = '<input type="checkbox" />';
    $new_columns['title']           = __('Title', 'cdswebinar');
    $new_columns['author']          = __('Author', 'cdswebinar');
    $new_columns['categories']      = __('Categories', 'cdswebinar'); 
    $new_columns['count']           = __('Students suscribed', 'cdswebinar');
    $new_columns['privacity']       = __('Privacity', 'cdswebinar');
    $new_columns['webinardate']     = __('Webinar date', 'cdswebinar');
    $new_columns['date']            = __('Date', 'cdswebinar');

    return $new_columns;

}

function manage_cdswebinar_columns( $column_name, $id ) {
    switch ($column_name) {
        case 'count':
            $cdswebinar_data        =   get_post_meta( $id, 'cdswebinar_data', true );
            echo '13 students'; // pendiente traido desde DDBB
            break;
        case 'privacity':
            $cdswebinar_data        =   get_post_meta( $id, 'cdswebinar_data', true );
            if ($cdswebinar_data['passwordsettings'] = 'randompassword' || $cdswebinar_data['passwordsettings'] = 'custompassword') {
                echo 'Protected with password';
            } else {
                echo 'Access free';
            }
            break;
        case 'webinardate':
            $cdswebinar_data        =   get_post_meta( $id, 'cdswebinar_data', true );
            echo 'Webinar date';
            break;
        default:
            break;
    }
}

