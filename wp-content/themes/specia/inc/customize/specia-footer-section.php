<?php
function specia_footer( $wp_customize ) {

	// Footer Panel // 
	$wp_customize->add_panel( 
		'footer_section', 
		array(
			'priority'      => 131,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Footer Section', 'specia'),
		) 
	);

	// Footer Setting Section // 
	$wp_customize->add_section(
        'footer_copyright',
        array(
            'title' 		=> __('Copyright Content','specia'),
            'description' 	=>'',
			'panel'  		=> 'footer_section',
		)
    );
	

	// Copyright Content Hide/Show Setting // 
	$wp_customize->add_setting( 
		'hide_show_copyright' , 
			array(
			'default' => __( 'on', 'specia' ),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_select',
		) 
	);

	$wp_customize->add_control(
	'hide_show_copyright' , 
		array(
			'label'          => __( 'Copyright Content', 'specia' ),
			'section'        => 'footer_copyright',
			'settings'   	 => 'hide_show_copyright',
			'type'           => 'radio',
			'description'    => __( 'Click to Hide / Show Copyright Content', 'specia' ),
			'choices'        => 
			array(
				'on' => __( 'Show', 'specia' ),
				'off' => __( 'Hide', 'specia' )
			)
		) 
	);

	// Copyright Content Setting // 
	$wp_customize->add_setting(
    	'copyright_content',
    	array(
	        'default'			=> __('Your Copyright Text','specia'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_html',
		)
	);	

	$wp_customize->add_control( 
		'copyright_content',
		array(
		    'label'   		=> __('Copyright Content','specia'),
		    'section'		=> 'footer_copyright',
			'settings'   	 => 'copyright_content',
			'type' 			=> 'textarea',
			'description'   => __( 'Enter your copyright text like website name', 'specia' ),
		)  
	);


	/*=========================================
	Footer Payment Icon Section
	=========================================*/
	// Footer Setting Section // 
	$wp_customize->add_section(
        'footer_icon',
        array(
            'title' 		=> __('Payment Icon','specia'),
            'description' 	=>'',
			'panel'  		=> 'footer_section',
		)
    );
	

	// Payment Icon Hide/Show Setting // 
	$wp_customize->add_setting( 
		'hide_show_payment' , 
			array(
				'default' => __( 'on', 'specia' ),
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'specia_sanitize_select',
		) 
	);

	$wp_customize->add_control(
	'hide_show_payment' , 
		array(
			'label'          => __( 'Payment Icon', 'specia' ),
			'section'        => 'footer_icon',
			'settings'   	 => 'hide_show_payment',
			'type'           => 'radio',
			'description'    => __( 'Click to Hide / Show Payment Icon Section', 'specia' ),
			'choices'        => 
			array(
				'on' => __( 'Show', 'specia' ),
				'off' => __( 'Hide', 'specia' )
			) 
		) 
	);

	// Payment Icon One Setting // 
	$wp_customize->add_setting(
    	'icon_one',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_url',
		)
	);	

	$wp_customize->add_control( 
		'icon_one',
		array(
		    'label'   		=> __('Paypal','specia'),
		    'section'		=> 'footer_icon',
			'settings'   	 => 'icon_one',
			'type' 			=> 'text',
			'description'   => __( 'Enter Your Link Here', 'specia' ),
		)  
	);


	// Payment Icon Two Setting // 
	$wp_customize->add_setting(
    	'icon_two',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_url',
		)
	);	

	$wp_customize->add_control( 
		'icon_two',
		array(
		    'label'   		=> __('Visa','specia'),
		    'section'		=> 'footer_icon',
			'settings'   	 => 'icon_two',
			'type' 			=> 'text',
			'description'   => __( 'Enter Your Link Here', 'specia' ),
		)  
	);

	// Payment Icon Three Setting // 
	$wp_customize->add_setting(
    	'icon_three',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_url',
		)
	);	

	$wp_customize->add_control( 
		'icon_three',
		array(
		    'label'   		=> __('Master Card','specia'),
		    'section'		=> 'footer_icon',
			'settings'   	 => 'icon_three',
			'type' 			=> 'text',
			'description'   => __( 'Enter Your Link Here', 'specia' ),
		)  
	);

	// Payment Icon Four Setting // 
	$wp_customize->add_setting(
    	'icon_four',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_url',
		)
	);	

	$wp_customize->add_control( 
		'icon_four',
		array(
		    'label'   		=> __('Amex','specia'),
		    'section'		=> 'footer_icon',
			'settings'   	 => 'icon_four',
			'type' 			=> 'text',
			'description'   => __( 'Enter Your Link Here', 'specia' ),
		)  
	);

	// Payment Icon Five Setting // 
	$wp_customize->add_setting(
    	'icon_five',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_url',
		)
	);	

	$wp_customize->add_control( 
		'icon_five',
		array(
		    'label'   		=> __('Stripe','specia'),
		    'section'		=> 'footer_icon',
			'settings'   	 => 'icon_five',
			'type' 			=> 'text',
			'description'   => __( 'Enter Your Link Here', 'specia' ),
		)  
	);

	// Footer Background Section // 
	$wp_customize->add_section(
        'footer_background_section',
        array(
            'title' 		=> __('Background Setting','specia'),
            'description' 	=>'',
			'panel'  		=> 'footer_section',
		)
    );
	
	// Background Image // 
    $wp_customize->add_setting( 
    	'footer_background_setting' , 
    	array(
			'default' 			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_url',
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'footer_background_setting' ,
		array(
			'label'          => __( 'Set Background Image', 'specia' ),
			'section'        => 'footer_background_section',
			'description'    => __( 'Upload Image for Background', 'specia' ),
		) 
	));
	
	$wp_customize->add_setting( 
		'footer_background_position' , 
			array(
			'default' => __( 'fixed', 'specia' ),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_select',
		) 
	);
	
	$wp_customize->add_control(
		'footer_background_position' , 
			array(
				'label'          => __( 'Background Image Position', 'specia' ),
				'section'        => 'footer_background_section',
				'settings'       => 'footer_background_position',
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
	'footer_overlay', 
	array(
		'capability' => 'edit_theme_options',
		'default' => '#1c314c',
		'sanitize_callback' => 'sanitize_hex_color',
    ));
	
	$wp_customize->add_control( 
		new WP_Customize_Color_Control
		($wp_customize, 
			'footer_overlay', 
			array(
				'label'      => __( 'Footer Background Color', 'specia' ),
				'section'    => 'footer_background_section',
				'settings'   => 'footer_overlay',
			) 
		) 
	);
		
}

add_action( 'customize_register', 'specia_footer' );
?>