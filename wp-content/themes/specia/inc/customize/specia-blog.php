<?php
function specia_blog_setting( $wp_customize ) {

	// Blog Settings Section // 
	$wp_customize->add_section(
        'blog_setting',
        array(
        	'priority'      => 1,
            'title' 		=> __('Blog Section','specia'),
			'panel'  		=> 'home_section',
		)
    );
	
	$wp_customize->add_setting( 
		'hide_show_blog' , 
			array(
			'default' => __( 'on', 'specia' ),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_select',
		) 
	);
	
	$wp_customize->add_control(
		'hide_show_blog' , 
		array(
			'label'          => __( 'Blog Section Hide/Show', 'specia' ),
			'section'        => 'blog_setting',
			'settings'   	 => 'hide_show_blog',
			'type'           => 'radio',
			'description'    => __( 'Click to Hide / Show Blog Section', 'specia' ),
			'choices'        => 
			array(
				'on' => __( 'Show', 'specia' ),
				'off' => __( 'Hide', 'specia' )
			) 
		) 
	);
	
	// Blog Title // 
	$wp_customize->add_setting(
    	'blog_title',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_html',
		)
	);	
	
	$wp_customize->add_control( 
		'blog_title',
		array(
		    'label'   => __('Blog Title','specia'),
		    'section' => 'blog_setting',
			'settings'   	 => 'blog_title',
			'description'    => __( 'Write title for Blog Section', 'specia' ),
			'type'           => 'text',
		)  
	);
	
	// Blog Description // 
	$wp_customize->add_setting(
    	'blog_description',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_text',
		)
	);	
	
	$wp_customize->add_control( 
		'blog_description',
		array(
		    'label'   => __('Blog Description','specia'),
		    'section' => 'blog_setting',
			'settings'   	 => 'blog_description',
			'description'    => __( 'Write description for Blog Section', 'specia' ),
			'type'           => 'textarea',
		)  
	);
	
	// Blog Display Setting // 
	$wp_customize->add_setting(
    	'blog_display_num',
    	array(
	        'default'			=> __('3','specia'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback'	=> 'specia_sanitize_integer',
		)
	);	

	$wp_customize->add_control( 
		'blog_display_num',
		array(
		    'label'   		=> __('Posts Display','specia'),
		    'section' 		=> 'blog_setting',
			'settings'   	 => 'blog_display_num',
			'type' 			=> 'select',
			'description'   => __( 'No of Posts Display in Single Row', 'specia' ),
			'choices'        => 
			array(
				'3' => __( '3', 'specia' ),
				'6' => __( '6', 'specia' ),
				'9' => __( '9', 'specia' )
				
			) 
		)  
	);
		
}

add_action( 'customize_register', 'specia_blog_setting' );
?>