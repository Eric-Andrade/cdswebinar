<?php

function r_create_metaboxes() {
    add_meta_box(
        'r_cdswebinar_options_mb',
        __( 'Cdswebinar Options', 'cdswebinar' ),
        'r_cdswebinar_options_mb',
        'cdswebinar',
        'normal',
        'high' 
    );
}

?>