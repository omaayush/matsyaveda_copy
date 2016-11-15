<?php
/**
 * Theme info page
 *
 * @package Specia
 */

//Add the theme page
add_action('admin_menu', 'specia_add_theme_info');
function specia_add_theme_info(){
	$theme_info = add_theme_page( __('Specia Info','specia'), __('Specia Info','specia'), 'manage_options', 'specia-info.php', 'specia_info_page' );
    add_action( 'load-' . $theme_info, 'specia_info_hook_styles' );
}

//Callback
function specia_info_page() {
?>
	<div class="info-container">
		<h2 class="info-title"><?php _e('Specia Info','specia'); ?></h2>
		<div class="info-block"><div class="dashicons dashicons-desktop info-icon"></div><p class="info-text"><a href="http://demo.speciatheme.com/lite/" target="_blank"><?php _e('Specia Free Demo','specia'); ?></a></p></div>
		
		<div class="info-block"><div class="dashicons dashicons-book-alt info-icon"></div><p class="info-text"><a href="http://docs.speciatheme.com/lite" target="_blank"><?php _e('Specia Free Documentation','specia'); ?></a></p></div>	
	</div>
<?php
}

//Styles
function specia_info_hook_styles(){
   	add_action( 'admin_enqueue_scripts', 'specia_info_page_styles' );
}
function specia_info_page_styles() {
	wp_enqueue_style( 'specia-info-style', get_template_directory_uri() . '/css/info-page.css', array(), true );
}