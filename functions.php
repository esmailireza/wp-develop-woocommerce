<?php
define('THEME_DIR',get_template_directory());
function wct_theme_setup(){
    add_theme_support('woocommerce');
}
add_action('after_setup_theme','wct_theme_setup');

include_once THEME_DIR.'/_inc/assets/register_assets.php';