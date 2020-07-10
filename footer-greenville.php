<!------- Start footer -------->
<footer class="footer">
    <div class="footer-top-main">
    	<figure>
        	<img src="<?php the_field('image1','option'); ?>" alt=""/>
        </figure>
    </div>
    <div class="footer-bottom-main">
    	<div class="container">
            <div class="footer-bottom">
                 <div class="footer-newsletter">
                     <div class="footer-newsletter-left">
                    	<h2>Sign up for news, specials, & updates</h2>
                    </div>                
                     <div class="footer-newsletter-right">
                        <form name="robly_embedded_subscribe_form" class="validate">
                            <div class="robly_field_group">
                            <?php echo do_shortcode('[mc4wp_form id="44"]'); ?>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="footer-bottom-bottom">
                    <div class="footer-bottom-left">
                    	<figure>
                        	<img src="<?php echo get_theme_file_uri(); ?>/images/carolina.png" alt=""/>
                        </figure>
                    	<p><?php the_field('address1','option'); ?></p>
                    </div>
                    <div class="footer-bottom-middle">
                    	<figure>
                        	<img src="<?php echo get_theme_file_uri(); ?>/images/menu-logo.png" alt=""/>
                        </figure>                    
                    	<p>CALL <?php the_field('call1','option'); ?> OR EMAIL
                        <?php the_field('email1','option'); ?></p>
                    </div>
                    <div class="footer-bottom-right">
                    	<a href="<?php echo site_url('/columbia') ?>"><?php the_field('button_text1','option'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right">
    	<p><?php the_field('copyright_text','option'); ?></p>
    </div>
</footer>
<!------- End footer -------->

<?php wp_footer(); ?>

</body>