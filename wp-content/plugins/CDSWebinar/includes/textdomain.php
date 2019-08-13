<?php

function ju_load_textdomain() {
    $plugin_dir             = 'CDSwebinar/lang'; 
    load_plugin_textdomain( 'cdswebinar', false, $plugin_dir );
}