<?php
function specia_slider_setting( $wp_customize ) {

	/*=========================================
	Homepage Settings Panel
	=========================================*/
	$wp_customize->add_panel( 
		'home_section', 
		array(
			'priority'      => 128,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Home Section', 'specia'),
		) 
	);
	

	/*=========================================
	Slider Settings Section
	=========================================*/
	// Slider Settings Section // 
	$wp_customize->add_section(
        'slider_setting',
        array(
        	'priority'      => 1,
            'title' 		=> __('Slider Section','specia'),
			'panel'  		=> 'home_section',
		)
    );
	
	// Slider Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'hide_show_slider' , 
			array(
			'default' => __( 'on', 'specia' ),
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_select',
		) 
	);

	$wp_customize->add_control(
	'hide_show_slider' , 
		array(
			'label'          => __( 'Slider Hide / Show', 'specia' ),
			'section'        => 'slider_setting',
			'settings'   	 => 'hide_show_slider',
			'type'           => 'radio',
			'description'    => __( 'Click to Hide / Show Slider', 'specia' ),
			'choices'        => 
			array(
				'on' => __( 'Show', 'specia' ),
				'off' => __( 'Hide', 'specia' )
			) 
		) 
	);
	
	// Slider 1 //
	$wp_customize->add_setting(
	'slider-page1',
		array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'specia_sanitize_integer',
		)
	);
		
	$wp_customize->add_control(
	'slider-page1',
		array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select Page for Slide One:','specia'),
			'section'	=> 'slider_setting',
			'settings'   	 => 'slider-page1',
		)
	);	
	
	// Slider 2 //
	$wp_customize->add_setting(
	'slider-page2',
		array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'specia_sanitize_integer',
		)
	);
		
	$wp_customize->add_control(
	'slider-page2',
		array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select Page for Slide Two:','specia'),
			'section'	=> 'slider_setting',
			'settings'   	 => 'slider-page2',
		)
	);	
	
	// Slider 3 //
	$wp_customize->add_setting(
	'slider-page3',
		array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'specia_sanitize_integer',
		)
	);
		
	$wp_customize->add_control(
	'slider-page3',
		array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select Page for Slide Three:','specia'),
			'section'	=> 'slider_setting',
			'settings'   	 => 'slider-page3',
		)
	);	
	
	// Slider Text Caption // 
	$wp_customize->add_setting( 
		'slider_caption_align' , 
			array(
			'default' => __('text-left', 'specia' ),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_select',
		) 
	);

	$wp_customize->add_control(
	'slider_caption_align' , 
		array(
			'label'          => __( 'Slider Caption Align', 'specia' ),
			'section'        => 'slider_setting',
			'settings'   	 => 'slider_caption_align',
			'type'           => 'select',
			'description'    => __( 'Select Slider Caption Align', 'specia' ),
			'choices'        => 
			array(
				'text-left'=> 	__( 'Left Align', 'specia' ),
				'text-center'=> __( 'Center Align', 'specia' ),
				'text-right'=> 	__( 'Right Align', 'specia' )
			) 
		) 
	);

	
	$wp_customize->add_setting(
	'slider_overlay', 
	array(
		'default' => '#000000',
		'capability' => 'edit_theme_options',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	
	$wp_customize->add_control( 
		new WP_Customize_Color_Control
		($wp_customize, 
			'slider_overlay', 
			array(
				'label'      => __( 'Slider Background Color', 'specia' ),
				'section'    => 'slider_setting',
				'settings'   => 'slider_overlay',
			) 
		) 
	);	
}

add_action( 'customize_register', 'specia_slider_setting' );
?>