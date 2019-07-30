<?php

function r_activate_plugin() {
    if(version_compare(get_bloginfo('version'), '4.2', '<')) {
        wp_die( __( 'You must update WordPress version to use this plugin', 'recipe' ));
    }

    cdswebinar_init();
    flush_rewrite_rules();
    
    global $wpdb;

    $createSQL      =   "
    CREATE TABLE IF NOT EXISTS `" . $wpdb->prefix . "cdswebinar_data` (
        `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
        `cdswebinar_id` bigint(20) UNSIGNED NOT NULL,
        `user_ip` varchar(32) NOT NULL,
        PRIMARY KEY (`id`)
      ) ENGINE=InnoDB " . $wpdb->get_charset_collate() . " AUTO_INCREMENT=1 ;
    ";

    require( ABSPATH . '\wp-admin\includes\upgrade.php');
    dbDelta( $createSQL );

    wp_schedule_event( time(), 'daily', 'r_cdswebinar_calendar_hook' );
}
?>