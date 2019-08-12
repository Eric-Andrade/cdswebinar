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
            `id_cdswebinar_data` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
            `cdswebinar_url` varchar(250) NOT NULL,
            `cdswebinar_description` varchar(500) NULL,
            `cdswebinar_cost` tinyint(10),
            `cdswebinar_date` Date NOT NULL,
            `cdswebinar_privacity` ENUM('unpasswored','randompassword','custompassword') NOT NULL,
            `cdswebinar_password` varchar(100) NULL,
            `presenter_urlimage` varchar(250) NOT NULL,
            `presenter_name` varchar(250) NOT NULL,
            `presenter_mail` varchar(250) NOT NULL,
            `students_suscripted` tinyint(10) NOT NULL,
            `user_ip` varchar(32) NOT NULL,
            PRIMARY KEY (`id`)
          ) ENGINE=InnoDB " . $wpdb->get_charset_collate() . " AUTO_INCREMENT=1 ;
        ";
    
        require( ABSPATH . '\wp-admin\includes\upgrade.php');
        dbDelta( $createSQL );
    
        wp_schedule_event( time(), 'daily', 'r_cdswebinar_calendar_hook' );
    }