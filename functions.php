<?php 

    //Styles do css

    function Meu_Tema_resources() {
        wp_enqueue_style('style', get_stylesheet_uri());


        // Js Scripts

        wp_register_script('jquery', get_template_directory_uri(). '/js/jquery.min.js');
        wp_enqueue_script('jquery');

        wp_register_script('browser', get_template_directory_uri(). '/js/browser.min.js');
        wp_enqueue_script('browser');

        wp_register_script('breakpoints', get_template_directory_uri(). '/js/breakpoints.min.js');
        wp_enqueue_script('breakpoints');

        wp_register_script('main', get_template_directory_uri(). '/js/main.js');
        wp_enqueue_script('main');

        wp_register_script('util', get_template_directory_uri(). '/js/util.js');
        wp_enqueue_script('util');
    }

    add_action('wp_enqueue_scripts','Meu_Tema_resources');

    register_nav_menus(array(
        'primary' =>  __( 'Primary Menu'),
     ));
     

?>

    

