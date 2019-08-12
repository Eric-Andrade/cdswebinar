<?php

function r_generate_cdswebinar_calendar() {
    global $wpdb;
    $cdswebinar_id              =   $wpdb->get_results("SELECT `ID` FROM `" . $wpdb->posts . "`
                                                    WHERE post_status='publish' AND post_type='cdswebinar'
                                                    ORDER BY post_date DESC LIMIT 5");

    set_transient( 'r_daily_cdswebinar', $cdswebinar_id, 60 * 60 * 24 );
}

// SELECT * FROM `wp_posts` WHERE post_status='publish' AND post_type='cdswebinar' ORDER BY post_date DESC LIMIT 5