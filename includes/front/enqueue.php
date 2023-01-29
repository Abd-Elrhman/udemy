<?php

// function u_enqueue() {
//  wp_register_style('index', get_template_directory_uri() . '/assets/public/index.css' );
//  wp_enqueue_style( 'index' );
// }

// 2 Steps in this Function:  1--= register styles,  2--= enqueue this register styles 
function u_enqueue() {
  
  // 1--= register styles
  //Fonts
  wp_register_style('u_font_rubik_and_pacifico',
    'https://fonts.googleapis.com/css2?family=Pacifico&family=Rubik:wght@300;400;500;700&display=swap',
    [],
    null
  );
  
  //Bootstrap 
  wp_register_style(
    'u_bootstrap_icons',
    get_theme_file_uri('assets/bootstrap-icons/bootstrap-icons.css')
  );
 
  // Index File
  wp_register_style('u_index', 
  get_theme_file_uri('assets/public/index.css'));

  // 2--= enqueue this register styles
  wp_enqueue_style( 'u_font_rubik_and_pacifico' );
  wp_enqueue_style( 'u_bootstrap_icons' );
  wp_enqueue_style( 'u_index' );

}