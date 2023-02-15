<?php

/**
 *  Cargar los Scripts y CSS del theme
 */

 function edc_scripts(){
    /** Scripts */
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/boostrap.css', false, '4.1.3');

    wp_enqueue_style('style', get_stylesheet_uri(), array('bootstrap-css'));
 }
 add_action('wp_enqueue_scripts', 'edc_scripts');