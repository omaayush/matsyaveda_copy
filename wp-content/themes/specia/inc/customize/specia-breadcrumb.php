<?php
function specia_breadcrumb_setting( $wp_customize ) {
	
	// Breadcrumb Settings Panel // 
	$wp_customize->add_panel( 
		'breadcrumb_setting', 
		array(
			'priority'      => 129,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Breadcrumb Setting', 'specia'),
		) 
	);

	// Background Section // 
	$wp_customize->add_section(
        'breadcrumb_design',
        array(
        	'priority'      => 1,
            'title' 		=> __('Background Setting','specia'),
            'description' 	=>'',
			'panel'  		=> 'breadcrumb_setting',
		)
    );
	
	// Background Image // 
    $wp_customize->add_setting( 
    	'breadcrumb_background_setting' , 
    	array(
			'default' 			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_url',
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'breadcrumb_background_setting' ,
		array(
			'label'          => __( 'Set Background Image', 'specia' ),
			'section'        => 'breadcrumb_design',
			'description'    => __( 'Upload Image for Background', 'specia' ),
		) 
	));
	
	// Background Color // 
	$wp_customize->add_setting(
	'breadcrumb_overlay', 
	array(
		'capability' => 'edit_theme_options',
		'default' => '#f6f6f6',
		'sanitize_callback' => 'sanitize_hex_color',
    ));
	
	$wp_customize->add_control( 
		new WP_Customize_Color_Control
		($wp_customize, 
			'breadcrumb_overlay', 
			array(
				'label'      => __( 'Breadcrumb Background Color', 'specia' ),
				'section'    => 'breadcrumb_design',
				'settings'   => 'breadcrumb_overlay',
			) 
		) 
	);

}

add_action( 'customize_register', 'specia_breadcrumb_setting' );
?>