<?php

function ju_add_dashboard_widgets() {
    wp_add_dashboard_widget(
        'ju_latest_cdswebinars_widget',
        'Next webinars',
        'ju_latest_cdswebinar_display'
    );

}

function ju_latest_cdswebinar_display() {
    global $wpdb;

    $latest_webinars        = $wpdb->get_results("SELECT * FROM `" . $wpdb->prefix . "posts`
                                                    WHERE post_status='publish' AND post_type='cdswebinar'
                                                    ORDER BY post_date DESC LIMIT 5");
    if($latest_webinars) {
        echo '<ul>';
            foreach($latest_webinars as $webinar) {
                $title              =   get_the_title( $webinar->ID );
                $permalink              =   get_the_permalink( $webinar->ID );

                ?>
                <li>
                    <a href="<?php echo $permalink; ?>"><?php echo $title; ?></a>
                    <p>Fecha: <?php echo 'pronto we XD'; ?></p> <!-- pendiente -->
                </li>
                <?php
            }
        echo '</ul>';
    } else {
        echo '<p><strong>Sin webinars por el momento</strong></p>';
    }
}