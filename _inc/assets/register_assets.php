<?php
add_action('wp_enqueue_scripts', 'wct_register_assets');

function wct_register_assets(){
    //register style
 wp_register_style('wct-bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css','','1.0.0');
 wp_register_style('wct-swiper',get_template_directory_uri().'/assets/css/swiper-bundle.min.css','','1.0.0');
  wp_register_style('wct-style',get_stylesheet_directory_uri().'/style.css','','1.0.0');
 wp_enqueue_style('wct-style');
 wp_enqueue_style('wct-bootstrap');
  wp_enqueue_style('wct-swiper');

  //register js
  wp_register_script('wct-bootstrap-js',get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js',['jquery'],'1.0.0','true');
   wp_register_script('wct-swiper-js',get_template_directory_uri().'/assets/js/swiper-bundle.min.js',['jquery'],'1.0.0','true');
  wp_register_script('wct-custom-js',get_template_directory_uri().'/assets/js/custom.js',['jquery'],'1.0.0','true');

  wp_enqueue_script('wct-bootstrap-js');
  wp_enqueue_script('wct-swiper-js');
  wp_enqueue_script('wct-custom-js');


}