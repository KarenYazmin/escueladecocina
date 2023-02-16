<?php


/**
 *  Funciones que se cargan al activar el Tema
 */

 function edc_setup(){
       //Menu de navegacion
       register_nav_menus(array(
        'menu_principal' => esc_html__('Menu Principal', 'escuelacocina') 
    ));
 }
add_action('after_setup_theme', 'edc_setup');
 
/**
 *  Agregar clase nav-link de bootstrap al menu principal
 */

 function edc_enlace_class($atts, $item, $args){
    if($args->theme_location =='menu_principal'){
        $atts['class'] = 'nav-link';
    }
    return $atts;
 }
 add_filter('nav_menu_link_attributes', 'edc_enlace_class', 10, 3);

/**
 *  Cargar los Scripts y CSS del theme
 */

 function edc_scripts(){
    /** Cargar Styles */
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css', false, '4.1.3');

    wp_enqueue_style('style', get_stylesheet_uri(), array('bootstrap-css'));

    /** Cargar Scripts */
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.js', array('jquery'), '1.0', true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array('popper'), '1.0', true);
 }
 add_action('wp_enqueue_scripts', 'edc_scripts');