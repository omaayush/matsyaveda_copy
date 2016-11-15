<?php
function specia_features_setting( $wp_customize ) {

	// Features Settings Section // 
	$wp_customize->add_section(
        'features_setting',
        array(
        	'priority'      => 1,
            'title' 		=> __('Features Section','specia'),
			'panel'  		=> 'home_section',
		)
    );
	
	$wp_customize->add_setting( 
		'hide_show_features' , 
			array(
			'default' 		=> __( 'on', 'specia' ),
			'capability' 	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_select',
		) 
	);
	
	$wp_customize->add_control(
	'hide_show_features' , 
		array(
			'label'          => __( 'Features Hide/Show', 'specia' ),
			'section'        => 'features_setting',
			'settings'   	 => 'hide_show_features',
			'type'           => 'radio',
			'description'    => __( 'Click to Hide / Show Features Section', 'specia' ),
			'choices'        => 
			array(
				'on' => __( 'Show', 'specia' ),
				'off' => __( 'Hide', 'specia' )
			) 
		) 
	);
	
	// Service Title // 
	$wp_customize->add_setting(
    	'features_title',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_html',
		)
	);	
	
	$wp_customize->add_control( 
		'features_title',
		array(
		    'label'   => __('Features Title','specia'),
		    'section' => 'features_setting',
			'settings'   	 => 'features_title',
			'description'    => __( 'Write title for Features Section', 'specia' ),
			'type'           => 'text',
		)  
	);
	
	// Service Description // 
	$wp_customize->add_setting(
    	'features_description',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_text',
		)
	);	
	
	$wp_customize->add_control( 
		'features_description',
		array(
		    'label'   => __('Features Description','specia'),
		    'section' => 'features_setting',
			'settings'   	 => 'features_description',
			'description'    => __( 'Write description for Features Section', 'specia' ),
			'type'           => 'textarea',
		)  
	);
	
	// Background Image // 
    $wp_customize->add_setting( 
    	'features_background_setting' , 
    	array(
			'default' 			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_url',	
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'features_background_setting' ,
		array(
			'label'          => __( 'Set Background Image', 'specia' ),
			'section'        => 'features_setting',
			'settings'   	 => 'features_background_setting',
			'description'    => __( 'Upload Image for Background', 'specia' ),
		) 
	));
	
	$wp_customize->add_setting( 
		'features_background_position' , 
			array(
			'default' => __( 'fixed', 'specia' ),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_select',
		) 
	);
	
	$wp_customize->add_control(
		'features_background_position' , 
			array(
				'label'          => __( 'Background Image Position', 'specia' ),
				'section'        => 'features_setting',
				'settings'       => 'features_background_position',
				'type'           => 'radio',
				'description'    => __( 'Set Your Background Position', 'specia' ),
				'choices'        => 
				array(
					'fixed'=> __( 'Fixed', 'specia' ),
					'scroll' => __( 'Scroll', 'specia' )
			)  
		) 
	);
	
	// Background Color // 
	$wp_customize->add_setting(
	'features_overlay', 
	array(
		'default' => '#000000',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
    ));
	
	$wp_customize->add_control( 
		new WP_Customize_Color_Control
		($wp_customize, 
			'features_overlay', 
			array(
				'label'      => __( 'Features Background Color', 'specia' ),
				'section'    => 'features_setting',
				'settings'   => 'features_overlay',
				'settings'   	 => 'features_overlay',
			) 
		) 
	);
	
}

add_action( 'customize_register', 'specia_features_setting' );
?>