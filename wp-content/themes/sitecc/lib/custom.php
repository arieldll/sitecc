<?php

add_action('init', 'do_output_buffer');
function do_output_buffer() {
  @ob_start();
}
function login_sitecc() {
    wp_enqueue_style( 'custom-login', get_template_directory_uri() . '/assets/css/login.css' );
}
add_action( 'login_enqueue_scripts', 'login_sitecc' );