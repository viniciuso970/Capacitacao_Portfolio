<?php

function capacitacao_customizer_panel_sections( $wp_customize ) {
	$wp_customize->add_panel( 'panel_capacitacao', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Capacitação Portfolio', 'textdomain' ),
	    'description' => __( 'Alterações no template', 'textdomain' ),
	)  );

	$wp_customize->add_section( 'primeira_secao', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Primeira Seção', 'textdomain' ),
	    'description' => '',
	    'panel' => 'panel_capacitacao',
    )  );
    
    $wp_customize->add_section( 'segunda_secao', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Segunda Seção', 'textdomain' ),
	    'description' => '',
	    'panel' => 'panel_capacitacao',
    )  );

	$wp_customize->add_section( 'clientes_secao', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Clientes', 'textdomain' ),
	    'description' => '',
	    'panel' => 'panel_capacitacao',
	)	);
}
add_action( 'customize_register', 'capacitacao_customizer_panel_sections'  );

function capacitacao_primeira_secao( $wp_customize ) {
    
    capacitacao_add_setting( $wp_customize, 'primeira_secao_descricao', 'sanitize_text_field' );
	capacitacao_add_control( $wp_customize, 'primeira_secao_descricao', 'textarea', 'Descrição: ', 'primeira_secao' );
	
	capacitacao_add_setting( $wp_customize, 'primeira_secao_citacao', 'sanitize_text_field' );
	capacitacao_add_control( $wp_customize, 'primeira_secao_citacao', 'text', 'Citação: ', 'primeira_secao' );
	
	capacitacao_add_setting( $wp_customize, 'features_titulo_1', 'sanitize_text_field' );
	capacitacao_add_control( $wp_customize, 'features_titulo_1', 'text', 'Título Feature 1: ', 'primeira_secao' );

	capacitacao_add_setting( $wp_customize, 'features_descricao_1', 'sanitize_text_field' );
	capacitacao_add_control( $wp_customize, 'features_descricao_1', 'textarea', 'Descricao Feature 1: ', 'primeira_secao' );

	capacitacao_add_setting( $wp_customize, 'features_titulo_2', 'sanitize_text_field' );
	capacitacao_add_control( $wp_customize, 'features_titulo_2', 'text', 'Título Feature 2: ', 'primeira_secao' );

	capacitacao_add_setting( $wp_customize, 'features_descricao_2', 'sanitize_text_field' );
	capacitacao_add_control( $wp_customize, 'features_descricao_2', 'textarea', 'Descricao Feature 2: ', 'primeira_secao' );

	capacitacao_add_setting( $wp_customize, 'features_titulo_3', 'sanitize_text_field' );
	capacitacao_add_control( $wp_customize, 'features_titulo_3', 'text', 'Título Feature 3: ', 'primeira_secao' );

	capacitacao_add_setting( $wp_customize, 'features_descricao_3', 'sanitize_text_field' );
	capacitacao_add_control( $wp_customize, 'features_descricao_3', 'textarea', 'Descricao Feature 3: ', 'primeira_secao' );

	capacitacao_add_setting( $wp_customize, 'features_titulo_4', 'sanitize_text_field' );
	capacitacao_add_control( $wp_customize, 'features_titulo_4', 'text', 'Título Feature 4: ', 'primeira_secao' );

	capacitacao_add_setting( $wp_customize, 'features_descricao_4', 'sanitize_text_field' );
	capacitacao_add_control( $wp_customize, 'features_descricao_4', 'textarea', 'Descricao Feature 4: ', 'primeira_secao' );    

}
add_action( 'customize_register', 'capacitacao_primeira_secao'  );

function capacitacao_segunda_secao( $wp_customize ) {
    
    capacitacao_add_setting( $wp_customize, 'segunda_secao_titulo', 'sanitize_text_field' );
	capacitacao_add_control( $wp_customize, 'segunda_secao_titulo', 'text', 'Título: ', 'segunda_secao' );
	
	capacitacao_add_setting( $wp_customize, 'segunda_secao_descricao', 'sanitize_text_field' );
	capacitacao_add_control( $wp_customize, 'segunda_secao_descricao', 'textarea', 'Descrição: ', 'segunda_secao' );
	
	capacitacao_add_setting( $wp_customize, 'segunda_secao_titulo_1', 'sanitize_text_field' );
	capacitacao_add_control( $wp_customize, 'segunda_secao_titulo_1', 'text', 'Título  1: ', 'segunda_secao' );

	capacitacao_add_setting( $wp_customize, 'segunda_secao_descricao_1', 'sanitize_text_field' );
	capacitacao_add_control( $wp_customize, 'segunda_secao_descricao_1', 'textarea', 'Descricao  1: ', 'segunda_secao' );

	capacitacao_add_setting( $wp_customize, 'segunda_secao_titulo_2', 'sanitize_text_field' );
	capacitacao_add_control( $wp_customize, 'segunda_secao_titulo_2', 'text', 'Título  2: ', 'segunda_secao' );

	capacitacao_add_setting( $wp_customize, 'segunda_secao_descricao_2', 'sanitize_text_field' );
	capacitacao_add_control( $wp_customize, 'segunda_secao_descricao_2', 'textarea', 'Descricao  2: ', 'segunda_secao' );

	capacitacao_add_setting( $wp_customize, 'segunda_secao_titulo_3', 'sanitize_text_field' );
	capacitacao_add_control( $wp_customize, 'segunda_secao_titulo_3', 'text', 'Título  3: ', 'segunda_secao' );

	capacitacao_add_setting( $wp_customize, 'segunda_secao_descricao_3', 'sanitize_text_field' );
	capacitacao_add_control( $wp_customize, 'segunda_secao_descricao_3', 'textarea', 'Descricao  3: ', 'segunda_secao' );

	capacitacao_add_setting( $wp_customize, 'segunda_secao_titulo_4', 'sanitize_text_field' );
	capacitacao_add_control( $wp_customize, 'segunda_secao_titulo_4', 'text', 'Título  4: ', 'segunda_secao' );

	capacitacao_add_setting( $wp_customize, 'segunda_secao_descricao_4', 'sanitize_text_field' );
	capacitacao_add_control( $wp_customize, 'segunda_secao_descricao_4', 'textarea', 'Descricao  4: ', 'segunda_secao' );    

}
add_action( 'customize_register', 'capacitacao_segunda_secao'  );

function capacitacao_clientes_secao( $wp_customize ) {
    
    capacitacao_add_setting( $wp_customize, 'clientes_secao_descricao', 'sanitize_text_field' );
	capacitacao_add_control( $wp_customize, 'clientes_secao_descricao', 'textarea', 'Descricao: ', 'clientes_secao' );
	
}
add_action( 'customize_register', 'capacitacao_clientes_secao'  );

function capacitacao_add_setting( $wp_customize, $name, $sanitize ) {
    $wp_customize->add_setting( $name, array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => $sanitize,
	)  );
}

function capacitacao_add_control( $wp_customize, $name, $type, $text, $section ) {
    $wp_customize->add_control( $name, array(
	    'type' => $type,
	    'priority' => 10,
	    'section' => $section,
	    'label' => __( $text, 'textdomain' ),
	    'description' => '',
	)  );
}
