<?php
/*
Template Name:Contact Greenville
*/
get_header('greenville');
?>

<!------- Start contact page  -------->
<section class="southernway-contact-main">
	<div class="container">
    	<div class="southernway-contact">
        	<div class="southernway-get-touch">
            	<div class="southernway-get-touch-top">
					<h2 class="southern-title">Get in Touch</h2>                
                </div>
            	<div class="southernway-get-touch-bottom">
                    <div class="southernway-get-touch-left">
                        <figure>
                            <img src="<?php echo get_theme_file_uri(); ?>/images/carolina.png" alt="">
                        </figure>
                        <p><?php the_field('address1','option'); ?></p>
                    </div>
                    <div class="southernway-get-touch-right">
                        <figure>
                            <img src="<?php echo get_theme_file_uri(); ?>/images/menu-logo.png" alt="">
                        </figure>
                        <p>CALL <a href="tel:<?php the_field('call','option'); ?>"><?php the_field('call','option'); ?></a> OR EMAIL <a href="mailto:<?php the_field('email','option'); ?>"><?php the_field('email','option'); ?></a>
                        </p>
                    </div>
                    <div class="southernway-get-touch-laction">
                        <a href="<?php echo site_url('/columbia'); ?>"><?php the_field('button_text1','option'); ?></a>
                    </div>
                </div>                
            </div>
        </div>

        	<div class="contact-form-main">
                <div class="contact-form">
                    <div class="contact-form-title">
                        <h2 class="southern-title">Drop a Line</h2>
                    </div>
                    <?php echo do_shortcode('[contact-form-7 id="220" title="Contact Greenville"]'); ?>
                </div>              
            </div>
        </div>
</section>
<!------- Start contact page  -------->

<?php get_footer('greenville'); ?>