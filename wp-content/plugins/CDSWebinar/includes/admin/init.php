<?php

function cdswebinar_admin_init() {
    include( 'create_metaboxes.php' );
    include( 'cdswebinar-options.php' );
    include( 'columns.php' );
    include( 'enqueue.php' );

    add_action( 'add_meta_boxes_cdswebinar', 'r_create_metaboxes' );
    add_action( 'admin_enqueue_scripts', 'r_admin_enqueue');
    add_filter( 'manage_edit-cdswebinar_columns', 'add_new_cdswebinar_columns' );
    add_action( 'manage_cdswebinar_posts_custom_column', 'manage_cdswebinar_columns', 10, 2 );
}
