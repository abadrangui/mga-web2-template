<?php

function load_stylesheets()
{    
    wp_register_style('style', get_template_directory_uri() . '/style.css', 
        array(), false, 'all');
    wp_enqueue_style('style');
    
    
    wp_register_style('animate', get_template_directory_uri() . '/css/animate.css', 
        array(), false, 'all');
    wp_enqueue_style('animate');
    
    
    wp_register_style('Icomoon', get_template_directory_uri() . '/css/icomoon.css', 
        array(), false, 'all');
    wp_enqueue_style('Icomoon');
    
    
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', 
        array(), false, 'all');
    wp_enqueue_style('bootstrap');
    
    
    wp_register_style('magnificPopUp', get_template_directory_uri() . '/css/magnific-popup.css', 
        array(), false, 'all');
    wp_enqueue_style('magnificPopUp');
    
    
    wp_register_style('owlCarousel', get_template_directory_uri() . '/css/owl.carousel.min.css', 
        array(), false, 'all');
    wp_enqueue_style('owlCarousel');
    
    
    wp_register_style('OwlCarousel', get_template_directory_uri() . '/css/owl.theme.default.min.css', 
        array(), false, 'all');
    wp_enqueue_style('OwlCarousel');
    
    
    wp_register_style('Flexslider', get_template_directory_uri() . '/css/flexslider.css', 
        array(), false, 'all');
    wp_enqueue_style('Flexslider');
    
    
    wp_register_style('Flaticons', get_template_directory_uri() . '/fonts/flaticon/font/flaticon.css', 
        array(), false, 'all');
    wp_enqueue_style('Flaticons');
    
    
    wp_register_style('themeStyle', get_template_directory_uri() . '/css/style.css', 
        array(), false, 'all');
    wp_enqueue_style('themeStyle');


    wp_register_style('modernizer', get_template_directory_uri() . '/js/modernizr-2.6.2.min.css', 
        array(), false, 'all');
    wp_enqueue_style('modernizer');
    
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


function load_js(){ 
    wp_register_script( 'JQuery', get_template_directory_uri() . '/js/jquery.min.js', '', 1, true );
    wp_enqueue_script( 'JQuery' );
    

    wp_register_script( 'JQueryEasing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', '', 1, true );
    wp_enqueue_script( 'JQueryEasing' );
    

    wp_register_script( 'Bootstrap', get_template_directory_uri() . '/js/bootsrap.min.js', '', 1, true );
    wp_enqueue_script( 'Bootstrap' );
    

    wp_register_script( 'Waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', '', 1, true );
    wp_enqueue_script( 'Waypoints' );
    

    wp_register_script( 'Stellar Parallax', get_template_directory_uri() . '/js/jquery.stellar.min.js', '', 1, true );
    wp_enqueue_script( 'Stellar Parallax' );
    

    wp_register_script( 'Carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', '', 1, true );
    wp_enqueue_script( 'Carousel' );
    

    wp_register_script( 'FlexSlider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', '', 1, true );
    wp_enqueue_script( 'FlexSlider' );
    

    wp_register_script( 'countTo', get_template_directory_uri() . '/js/jquery.countTo.js', '', 1, true );
    wp_enqueue_script( 'countTo' );
    

    wp_register_script( 'Magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', '', 1, true );
    wp_enqueue_script( 'Magnific-popup' );
    

    wp_register_script( 'Magnific-popup1', get_template_directory_uri() . '/js/magnific-popup-options.js', '', 1, true );
    wp_enqueue_script( 'Magnific-popup1' );
    

    wp_register_script( 'Main', get_template_directory_uri() . '/js/main.js', '', 1, true );
    wp_enqueue_script( 'Main' );
}
add_action( 'wp_enqueue_scripts', 'load_js' );

function include_jquery(){
    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', '', 1, true );
    add_action( 'wp_enqueue_script', 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'include_jquery' );