<?php
function specia_call_action_setting( $wp_customize ) {


	// Call to Action //
	$wp_customize->add_section(
        'call_action_setting',
        array(
        	'priority'      => 1,
            'title' 		=> __('Call Action Section','specia'),
			'panel'  		=> 'home_section',
		)
    );
	
	$wp_customize->add_setting( 
		'hide_show_call_actions' , 
			array(
			'default' => __( 'on', 'specia' ),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_select',
		) 
	);
	
	$wp_customize->add_control(
	'hide_show_call_actions' , 
		array(
			'label'          => __( 'Call Action Hide/Show', 'specia' ),
			'section'        => 'call_action_setting',
			'settings'       => 'hide_show_call_actions',
			'type'           => 'radio',
			'description'    => __( 'Click to Hide / Show Call Action Section', 'specia' ),
			'choices'        => 
			array(
				'on' => __( 'Show', 'specia' ),
				'off'=> __( 'Hide', 'specia' )
			)  
		) 
	);
	
	// Call Action Text// 
	
	$wp_customize->add_setting(
	'call_action_page',
		array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'specia_sanitize_integer',
		)
	);
		
	$wp_customize->add_control(
	'call_action_page',
		array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select Page for Call Action:','specia'),
			'section'	=> 'call_action_setting',
			'settings'  => 'call_action_page',
		)
	);	
	
	// Background Image // 
    $wp_customize->add_setting( 
    	'call_action_background_setting' , 
    	array(
			'default' 			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_url',
			
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'call_action_background_setting' ,
		array(
			'label'          => __( 'Set Background Image', 'specia' ),
			'section'        => 'call_action_setting',
			'settings'        => 'call_action_background_setting',
			'description'    => __( 'Upload Image for Background', 'specia' ),
		) 
	));
	
	$wp_customize->add_setting( 
		'call_actions_background_position' , 
			array(
			'default' => __( 'fixed', 'specia' ),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_select',
		) 
	);
	
	$wp_customize->add_control(
		'call_actions_background_position' , 
			array(
				'label'          => __( 'Background Image Position', 'specia' ),
				'section'        => 'call_action_setting',
				'settings'       => 'call_actions_background_position',
				'type'           => 'radio',
				'description'    => __( 'Set Your Background Position', 'specia' ),
				'choices'        => 
				array(
					'fixed'=> __( 'Fixed', 'specia' ),
					'scroll' => __( 'Scroll', 'specia' )
			)  
		) 
	);
	
	// Call Button Label // 
	$wp_customize->add_setting(
    	'call_action_button_label',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_text',
		)
	);	
	
	$wp_customize->add_control( 
		'call_action_button_label',
		array(
		    'label'   => __('Button Label','specia'),
		    'section' => 'call_action_setting',
			'settings'       => 'call_action_button_label',
			'description'    => __( 'Enter the Button Name', 'specia' ),
			'type'           => 'text',
		)  
	);
	
	// Call Button link // 
	$wp_customize->add_setting(
    	'call_action_button_link',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_url',
		)
	);	
	
	$wp_customize->add_control( 
		'call_action_button_link',
		array(
		    'label'   => __('Button Link','specia'),
		    'section' => 'call_action_setting',
			'settings'       => 'call_action_button_link',
			'description'    => __( 'Enter the Button Link', 'specia' ),
			'type'           => 'text',
		)  
	);
	
	
	$wp_customize->add_setting(
		'call_action_button_target'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'call_action_button_target',
			array(
				'type' => 'checkbox',
				'label' => __('Open link in a new tab','specia'),
				'section' => 'call_action_setting',
				'settings' => 'call_action_button_target',
			)
	);
	
}

add_action( 'customize_register', 'specia_call_action_setting' );
?>