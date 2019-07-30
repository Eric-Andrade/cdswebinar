<?php

function cdswebinar_admin_init() {
    include( 'create_metaboxes.php' );
    include( 'cdswebinar-options.php' );
    include( 'columns.php' );

    add_action( 'add_meta_boxes_cdswebinar', 'r_create_metaboxes' );
    add_filter( 'manage_edit_cdswebinar_columns', 'add_new_cdswebinar_columns' );
    add_action( 'manage_cdswebinar_posts_custom_column', 'manage_cdswebinar_columns', 10, 2 ); //! no works :(
}

?>