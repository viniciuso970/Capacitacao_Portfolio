<?php

require get_template_directory() . '/inc/opcoes_customizer.php';

function capacitacao_styles()
{
    wp_register_style("font-awesome", get_template_directory_uri() . "/assets/css/font-awesome.css", array(), '4.7.0');
    wp_register_style("materialize", get_template_directory_uri() . "/assets/css/materialize.css", array(), '5.0.0');
    wp_register_style("animate", get_template_directory_uri() . "/assets/css/animate.css", array(), '5.0.0');
    wp_register_style("slick", get_template_directory_uri() . "/assets/css/slick.css", array(), '1.0.0');
    wp_register_style("slick-theme", get_template_directory_uri() . "/assets/css/slick-theme.css", array(), '1.0.0');
    wp_register_style("style", get_template_directory_uri() . "/style.css", array(), '1.0');

    wp_enqueue_style("font-awesome");
    wp_enqueue_style("materialize");
	wp_enqueue_style("animate");
	wp_enqueue_style("slick");
    wp_enqueue_style("slick-theme");
	wp_enqueue_style("style");
	
    wp_register_script("script", get_template_directory_uri(). '/assets/js/scripts.js', array('jquery'), '1.0.0', true);
    wp_register_script("materialize", get_template_directory_uri(). '/assets/js/materialize.js', array('jquery'), '1.0.0', true);
    wp_register_script("slick", get_template_directory_uri(). '/assets/js/slick.min.js', array('jquery'), '1.0.0', true);

	wp_enqueue_script("jquery");
	wp_enqueue_script("materialize");
    wp_enqueue_script("slick");
	wp_enqueue_script("script");

}

add_action('wp_enqueue_scripts', "capacitacao_styles");


function capacitacao_menus()
{
    register_nav_menus( array(
        "main-menu" => __("Principal", "capacitacao"),
        "social-menu" => __("Social Menu", "capacitacao"),
    ));
}

add_action("init", "capacitacao_menus");

function capacitacao_post_type() {
	$labels = array(
		'name'               => _x( 'Galeria', 'capacitacao' ),
		'singular_name'      => _x( 'Galeria', 'post type singular name', 'capacitacao' ),
		'menu_name'          => _x( 'Galeria', 'admin menu', 'capacitacao' ),
		'name_admin_bar'     => _x( 'Galeria', 'add new on admin bar', 'capacitacao' ),
		'add_new'            => _x( 'Adicionar novo', 'book', 'capacitacao' ),
		'add_new_item'       => __( 'Adicionar nova Galeria', 'capacitacao' ),
		'new_item'           => __( 'Nova Galeria', 'capacitacao' ),
		'edit_item'          => __( 'Editar Galeria', 'capacitacao' ),
		'view_item'          => __( 'Visualizar Galeria', 'capacitacao' ),
		'all_items'          => __( 'Todas Galeria', 'capacitacao' ),
		'search_items'       => __( 'Procurar em Galeria', 'capacitacao' ),
		'parent_item_colon'  => __( 'Parent Galeria:', 'capacitacao' ),
		'not_found'          => __( 'Post Galeria não encontrado.', 'capacitacao' ),
		'not_found_in_trash' => __( 'Nenhum Post Galeria encontrado na lixeira.', 'capacitacao' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'capacitacao' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'galeria' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'         => array( 'category' ),
	);
    register_post_type( 'galeria', $args );

    $labels = array(
		'name'               => _x( 'Serviços', 'capacitacao' ),
		'singular_name'      => _x( 'Serviço', 'post type singular name', 'capacitacao' ),
		'menu_name'          => _x( 'Serviços', 'admin menu', 'capacitacao' ),
		'name_admin_bar'     => _x( 'Serviços', 'add new on admin bar', 'capacitacao' ),
		'add_new'            => _x( 'Adicionar novo', 'book', 'capacitacao' ),
		'add_new_item'       => __( 'Adicionar novo Serviço', 'capacitacao' ),
		'new_item'           => __( 'Novo Serviço', 'capacitacao' ),
		'edit_item'          => __( 'Editar Serviços', 'capacitacao' ),
		'view_item'          => __( 'Visualizar Serviços', 'capacitacao' ),
		'all_items'          => __( 'Todos Serviços', 'capacitacao' ),
		'search_items'       => __( 'Procurar em Serviços', 'capacitacao' ),
		'parent_item_colon'  => __( 'Parent Serviços:', 'capacitacao' ),
		'not_found'          => __( 'Post Serviços não encontrado.', 'capacitacao' ),
		'not_found_in_trash' => __( 'Nenhum Post Serviços encontrado na lixeira.', 'capacitacao' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'capacitacao' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'servicos' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'         => array( 'category' ),
	);
    register_post_type( 'servicos', $args );
}

add_action( 'init', 'capacitacao_post_type' );
