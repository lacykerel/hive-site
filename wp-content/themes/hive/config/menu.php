<?php

function register_my_menus() {
  register_nav_menus(
  array(
    'new-menu' => __( 'New Menu'),
    'primary_menu' => __('primary-menu')
    )
  );
}

add_action('init', 'register_my_menus');
