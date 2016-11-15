<?php
	$footer_background_setting= get_theme_mod('footer_background_setting');
	$footer_background_position= get_theme_mod('footer_background_position','fixed');	
	$footer_overlay= get_theme_mod('footer_overlay','#1c314c'); 
?>
<!--======================================
    Footer Section
========================================-->
<?php if ( is_active_sidebar( 'footer-widget-area' ) ) { ?>
<?php
	
?>
<footer class="footer-sidebar" role="contentinfo" style="background: url('<?php echo esc_url( $footer_background_setting); ?>') no-repeat <?php echo esc_attr($footer_background_position); ?> 0 0 / cover rgba(0, 0, 0, 0);">     
	<div class="background-overlay" style="background: <?php echo esc_attr($footer_overlay); ?>;">
		<div class="container">
			<div class="row padding-top-60 padding-bottom-60">
				<?php  dynamic_sidebar( 'footer-widget-area' ); } ?>
			</div>
		</div>
	</div>
</footer>

<div class="clearfix"></div>

<!--======================================
    Footer Section
========================================-->

<section class="footer-copyright">
    <div class="container">
        <div class="row padding-top-20 padding-bottom-10 ">
            <div class="col-md-6 text-left">
				<?php 
					$copyright_content= get_theme_mod('copyright_content',__('Your Copyright Text','specia')); 
					$hide_show_copyright= get_theme_mod('hide_show_copyright','on'); 

				?>

				<?php if($hide_show_copyright == 'on') : ?>
					<p><?php echo wp_filter_post_kses($copyright_content); ?>
					</br><a href="/?page_id=72" onmouseover="this.style.color='#ffffff'">Contact us</a>
				<?php endif; ?>
                </p>
            </div>

            <div class="col-md-6">
				<?php 
					$hide_show_payment = get_theme_mod('hide_show_payment','on');
					$icon_one= get_theme_mod('icon_one',''); 
					$icon_two= get_theme_mod('icon_two',''); 
					$icon_three= get_theme_mod('icon_three',''); 
					$icon_four= get_theme_mod('icon_four',''); 
					$icon_five= get_theme_mod('icon_five',''); 
					
				?>
				
				<?php if($hide_show_payment == 'on') { ?>
					<ul class="payment-icon">
							<li><a href="https://www.facebook.com/matsyaveda" target="_blank"><img src="https://cdn1.iconfinder.com/data/icons/social-media-pins-free-1/32/facebook_social_media_logo_pin-48.png"></img></a></li>
							<li><a href="https://www.twitter.com/matsyaveda" target="_blank"><img src="https://cdn1.iconfinder.com/data/icons/social-media-pins-free-1/32/twitter_social_media_logo_pin-48.png"></img></a></li>
							<li><a href="https://plus.google.com/u/0/+MatsyavedaPharmacy" target="_blank"><img src="https://cdn1.iconfinder.com/data/icons/social-media-pins-free-1/32/google_plus_social_media_logo_pin-48.png"></img></a></li>							
						<?php if($icon_four) { ?> 
							<li><a href="<?php echo esc_url($icon_four); ?>"><i class="fa fa-cc-amex"></i></a></li>
						<?php } ?>
						
						<?php if($icon_five) { ?> 
							<li><a href="<?php echo esc_url($icon_five); ?>"><i class="fa fa-cc-stripe"></i></a></li>
						<?php } ?>
					</ul>
				<?php } ?>
            </div>
        </div>
    </div>
</section>

<!--======================================
    Top Scroller
========================================-->
<a href="#" class="top-scroll"><i class="fa fa-hand-o-up"></i></a> 
</div>
<?php wp_footer(); ?>
</body>
</html>
