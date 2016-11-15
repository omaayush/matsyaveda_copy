<?php
function specia_style_configurator( $wp_customize ) {

	/*=========================================
	Style Configurator Settings Section
	=========================================*/
	$wp_customize->add_panel( 
		'style_configurator', 
		array(
			'priority'      => 131,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Style Configurator', 'specia'),
		) 
	);

	/*=========================================
	Page Layout Settings Section
	=========================================*/
	$wp_customize->add_section(
        'page_layout',
        array(
            'title' 		=> __('Page Layout','specia'),
            'description' 	=>'',
			'panel'  		=> 'style_configurator',
		)
    );
	
	//Layout Style
	class WP_layout_Customize_Control extends WP_Customize_Control {
	public $type = 'new_menu';

	   function render_content()
	   
	   {
	   echo '<h3>' .  __( 'Layout Style', 'specia' ) . '</h3>';
		  $name = '_customize-layout-radio-' . $this->id; 
		  foreach($this->choices as $key => $value ) {
			?>
			   <label>
				<input type="radio" value="<?php echo $key; ?>" name="<?php echo esc_attr( $name ); ?>" data-customize-setting-link="<?php echo esc_attr( $this->id ); ?>" <?php if($this->value() == $key){ echo 'checked'; } ?>>
				<img <?php if($this->value() == $key){ echo 'class="layout_active"'; } ?> src="<?php echo get_template_directory_uri(); ?>/images/bg-pattern/<?php echo $value; ?>" alt="<?php echo esc_attr( $value ); ?>" />
				</label>
				
			<?php
		  } ?>
		  <script>
			jQuery(document).ready(function($) {
				$("#customize-control-wide_boxed label img").click(function(){
					$("#customize-control-wide_boxed label img").removeClass("layout_active");
					$(this).addClass("layout_active");
				});
			});
		  </script>
		  <?php
	   }

	}
	
	// Page Layout Setting // 
	$wp_customize->add_setting( 
		'wide_boxed' , 
			array(
			'default' => 'wide.jpg',  
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_select',
		) 
	);

	$wp_customize->add_control(new WP_layout_Customize_Control($wp_customize,
	'wide_boxed' , 
		array(
			'label'          => __( 'Select Page Layout', 'specia' ),
			'section'        => 'page_layout',
			'settings'   	 => 'wide_boxed',
			'type'           => 'radio',
			'description'    => __( 'Select Page Layout Wide & Boxed', 'specia' ),
			'choices'        => 
			array(
				'wide' => 'wide.png',
				'boxed' => 'boxed.png',
			) 
		) 
	) );
	
}

add_action( 'customize_register', 'specia_style_configurator' );
?>