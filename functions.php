<?php

function tigercodes_css() {
  wp_register_style('tigercodes-style', get_template_directory_uri() . '/style.css', [], '1.0.0');
  wp_enqueue_style('tigercodes-style');
}
add_action('wp_enqueue_scripts', 'tigercodes_css');



add_theme_support('menus');

function register_my_menu() {
  register_nav_menu('nav-list',__( 'Nav List' ));
}
add_action( 'init', 'register_my_menu' );



function my_cmb2_fields() {
  $cmb2 = new_cmb2_box([
    'id' => 'pagina_inicio',
    'title' => 'Início',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'pagina-inicio.php',
    ],
  ]);

  $cmb2->add_field([
    'name' => 'Logo',
    'id' => 'logo',
    'type' => 'text'
  ]);

  $cmb2->add_field([
    'name' => 'Saudações',
    'id' => 'greetings',
    'type' => 'text'
  ]);
}
add_action('cmb2_admin_init', 'my_cmb2_fields');

?>