<?php
function specia_service_setting( $wp_customize ) {

	// Service Settings Section // 
	$wp_customize->add_section(
        'service_setting',
        array(
        	'priority'      => 1,
            'title' 		=> __('Service Section','specia'),
			'panel'  		=> 'home_section',
		)
    );
	
	$wp_customize->add_setting( 
		'hide_show_service' , 
			array(
			'default' => __( 'on', 'specia' ),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_select',
		) 
	);
	
	$wp_customize->add_control(
	'hide_show_service' , 
		array(
			'label'          => __( 'Service Hide/Show', 'specia' ),
			'section'        => 'service_setting',
			'settings'   	 => 'hide_show_service',
			'type'           => 'radio',
			'description'    => __( 'Click to Hide / Show Service Section', 'specia' ),
			'choices'        => 
			array(
				'on' => __( 'Show', 'specia' ),
				'off' => __( 'Hide', 'specia' )
			)
		) 
	);
	
	// Service Title // 
	$wp_customize->add_setting(
    	'service_title',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_html',
		)
	);	
	
	$wp_customize->add_control( 
		'service_title',
		array(
		    'label'   => __('Service Title','specia'),
		    'section' => 'service_setting',
			'settings'   	 => 'service_title',
			'description'    => __( 'Write title for Service Section', 'specia' ),
			'type'           => 'text',
		)  
	);
	
	// Service Description // 
	$wp_customize->add_setting(
    	'service_description',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_text',
		)
	);	
	
	$wp_customize->add_control( 
		'service_description',
		array(
		    'label'   => __('Service Description','specia'),
		    'section' => 'service_setting',
			'settings'   	 => 'service_description',
			'description'    => __( 'Write description for Service Section', 'specia' ),
			'type'           => 'textarea',
		)  
	);
	
	// Service 1 //
	$wp_customize->add_setting(
	'service-page1',
		array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'specia_sanitize_integer',
		)
	);
		
	$wp_customize->add_control(
	'service-page1',
		array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select Page for Service One:','specia'),
			'section'	=> 'service_setting',
			'settings'   	 => 'service-page1',
		)
	);	
	
	// Service 2 //
	$wp_customize->add_setting(
	'service-page2',
		array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'specia_sanitize_integer',
		)
	);
		
	$wp_customize->add_control(
	'service-page2',
		array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select Page for Service Two:','specia'),
			'section'	=> 'service_setting',
			'settings'   	 => 'service-page2',
		)
	);	
	
	// Service 3 //
	$wp_customize->add_setting(
	'service-page3',
		array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'specia_sanitize_integer',
		)
	);
		
	$wp_customize->add_control(
	'service-page3',
		array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select Page for Service Three:','specia'),
			'section'	=> 'service_setting',
			'settings'   	 => 'service-page3',
		)
	);
	
}

add_action( 'customize_register', 'specia_service_setting' );
?>