<?php

function r_deactivate_plugin() {
    wp_clear_scheduled_hook('r_cdswebinar_calendar_hook');
}