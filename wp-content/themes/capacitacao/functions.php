<?php

function capacitacao_styles()
{
	wp_register_style("normalize", get_template_directory_uri() . "assets/css/normalize.min.css", array(), '1.0.0');
    wp_register_style("font-awesome", get_template_directory_uri() . "assets/css/all.min.css", array(), '5.0.0');
    wp_register_style("style", get_template_directory_uri() . "/style.css", array(), '1.0');

	wp_enqueue_style("normalize");
    wp_enqueue_style("font-awesome");
	wp_enqueue_style("style");
	
    wp_register_script("script", get_template_directory_uri(). 'assets/js/scripts.js', array('jquery'), '1.0.0', true);
    wp_register_script("materialize", get_template_directory_uri(). 'asstes/js/materialize.min.js', array('jquery'), '1.0.0', true);

    wp_enqueue_script("jquery");
    wp_enqueue_script("materialize");
	wp_enqueue_script("script");

}

add_action('wp_enqueue_scripts', "capacitacao_styles");