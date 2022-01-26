<?php
/* 
* Files resgister and load of scripts and styles
*
*
*
*/

/* 
*Registrer and load styles */

function csj_theme_styles(){

    //Register styles
    wp_register_style('csj-css-assets', THEMEPATH . '/css/css-assets.css', 'v4.5.3', 'all');
    wp_register_style('csj-style', get_stylesheet_uri(), array('csj-css-assets'), '1.0', 'all');

    //Load Files
    wp_enqueue_style('csj-css-assets');
    wp_enqueue_style('csj-style');

}

add_action('wp_enqueue_scripts', 'csj_theme_styles' );


/* 
*Registrer and load scripts 
*/


function csj_theme_scripts(){

    //Register styles
    wp_register_script('csj-jquery', THEMEPATH . '/js/jquery.js', '2.2.4', true);
    wp_register_script('csj-countdown', THEMEPATH . '/js/jquery.countdown.min.js', '1.0.1', true);
    wp_register_script('csj-easing', THEMEPATH . '/js/jquery.easing.min.js', '1.3', true);
    wp_register_script('csj-fitvids', THEMEPATH . '/js/jquery.fitvids.js', '1.1', true);
    wp_register_script('csj-magnific-popup', THEMEPATH . '/js/jquery.magnific-popup.min.js', '1.1.0', true);
    wp_register_script('csj-YTPlayer', THEMEPATH . '/js/jquery.mb.YTPlayer.min.js', '', true);
    wp_register_script('csj-stellar', THEMEPATH . '/js/jquery.stellar.js', '', true);
    wp_register_script('csj-validate', THEMEPATH . '/js/jquery.validate.min.js', '1.14.0', true);
    wp_register_script('csj-jRespond', THEMEPATH . '/js/jRespond.min.js', '0.10', true);
    wp_register_script('csj-owl-carousel', THEMEPATH . '/js/owl.carousel.min.js', '2.1.6', true);
    wp_register_script('csj-scrolllt', THEMEPATH . '/js/scrollIt.min.js', '', true);
    wp_register_script('csj-simple-scrollbar', THEMEPATH . '/js/simple-scrollbar.min.js', '', true);
    wp_register_script('csj-whatsapp', THEMEPATH . '/fonts/floating-whatsapp-master/floating-wpp.js', '', '', true);
    wp_register_script('csj-popper', THEMEPATH . '/js/popper.min.js', array('jquery'), '', true);
    wp_register_script('csj-functions', THEMEPATH . '/js/functions.js', array('jquery'),  '1.0', true);
    wp_register_script('csj-updates', THEMEPATH . '/js/updates.js', array('jquery'), '1.0', true);

    //Load Files
    wp_enqueue_script('csj-jquery');
    wp_enqueue_script('csj-popper');
    wp_enqueue_script('csj-whatsapp');
    wp_enqueue_script('csj-countdown');
    wp_enqueue_script('csj-easing');
    wp_enqueue_script('csj-fitvids');
    wp_enqueue_script('csj-magnific-popup');
    wp_enqueue_script('csj-YTPlayer');
    wp_enqueue_script('csj-stellar');
    wp_enqueue_script('csj-validate');
    wp_enqueue_script('csj-jRespond');
    wp_enqueue_script('csj-owl-carousel');
    wp_enqueue_script('csj-scrolllt');
    wp_enqueue_script('csj-simple-scrollbar');
    wp_enqueue_script('csj-functions');
    wp_enqueue_script('csj-updates');
    
        
}

add_action('wp_enqueue_scripts', 'csj_theme_scripts');