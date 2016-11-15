<?php
function specia_portfolio_setting( $wp_customize ) {
	
	// Portfolio Settings Section // 
	$wp_customize->add_section(
        'portfolio_setting',
        array(
        	'priority'      => 1,
            'title' 		=> __('Portfolio Section','specia'),
			'panel'  		=> 'home_section',
		)
    );
	
	$wp_customize->add_setting( 
		'hide_show_portfolio' , 
			array(
			'default' => __( 'on', 'specia' ),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_select',
		) 
	);
	
	$wp_customize->add_control(
	'hide_show_portfolio' , 
		array(
			'label'          => __( 'Portfolio Hide/Show', 'specia' ),
			'section'        => 'portfolio_setting',
			'type'           => 'radio',
			'description'    => __( 'Click to Hide / Show Portfolio Section', 'specia' ),
			'choices'        => 
			array(
				'on' => __( 'Show', 'specia' ),
				'off' => __( 'Hide', 'specia' )
			) 
		) 
	);
	
	// Portfolio Title // 
	$wp_customize->add_setting(
    	'portfolio_title',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_html',
		)
	);	
	
	$wp_customize->add_control( 
		'portfolio_title',
		array(
		    'label'   => __('Portfolio Title','specia'),
		    'section' => 'portfolio_setting',
			'settings' => 'portfolio_title',
			'description'    => __( 'Write title for Portfolio Section', 'specia' ),
			'type'           => 'text',
		)  
	);
	
	// Service Description // 
	$wp_customize->add_setting(
    	'portfolio_description',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_text',
		)
	);	
	
	$wp_customize->add_control( 
		'portfolio_description',
		array(
		    'label'   => __('Portfolio Description','specia'),
		    'section' => 'portfolio_setting',
			'settings' => 'portfolio_description',
			'description'    => __( 'Write description for Portfolio Section', 'specia' ),
			'type'           => 'textarea',
		)  
	);
	
	// Portfolio 1 //
	$wp_customize->add_setting(
	'portfolio-page1',
		array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'specia_sanitize_integer',
		)
	);
		
	$wp_customize->add_control(
	'portfolio-page1',
		array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select Page for Portfolio One:','specia'),
			'section'	=> 'portfolio_setting',
			'settings'   	 => 'portfolio-page1',
		)
	);	
	
	// Portfolio 2 //
	$wp_customize->add_setting(
	'portfolio-page2',
		array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'specia_sanitize_integer',
		)
	);
		
	$wp_customize->add_control(
	'portfolio-page2',
		array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select Page for Portfolio Two:','specia'),
			'section'	=> 'portfolio_setting',
			'settings'   	 => 'portfolio-page2',
		)
	);	
	
	// Portfolio 3 //
	$wp_customize->add_setting(
	'portfolio-page3',
		array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'specia_sanitize_integer',
		)
	);
		
	$wp_customize->add_control(
	'portfolio-page3',
		array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select Page for Portfolio Three:','specia'),
			'section'	=> 'portfolio_setting',
			'settings'  => 'portfolio-page3',
		)
	);	
	
}

add_action( 'customize_register', 'specia_portfolio_setting' );
?>