<?php
/*
Template Name: Columbia
*/
get_header('columbia');
?>

<!------- Home page Start -------->
<section class="columbia-main">
    <div class="owl-carousel owl-theme" id="columbia-slider">
		

         <?php if( have_rows('images') ): ?>

                <?php while( have_rows('images') ): the_row(); 

                    // vars
                    $image = get_sub_field('image');
                   
                    ?>

                <div class="item">
                   <figure>
                    <?php if($image): ?>
                         <img src="<?php echo $image; ?>" alt=""/>
                     <?php endif; ?>
                   </figure>    
               </div>

                <?php endwhile; ?>
        <?php endif; ?>
     </div>
	<div class="container">
    	<div class="columbia">
        	<figure>
            	<img src="<?php echo get_theme_file_uri(); ?>/images/logo.png" alt=""/>
            </figure>
        </div>
    </div>
</section>
<section class="mobile-tab">
    <div class="my-menu-right">
        <div class="header-tab">
            <ul class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                <li><a href="<?php echo site_url('/greenville') ?>">GREENVILLE</a></li>
                <li><a href="<?php echo site_url('/columbia') ?>">COLUMBIA</a></li>
            </ul>   
        </div>

        <?php $link = get_field('social_links','option'); ?>
        <ul class="header-social">
            <li><a href="<?php echo $link['instagram']; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a> </li>                    
            <li><a href="<?php echo $link['facebook']; ?>"><i class="fa fa-facebook-f" aria-hidden="true"></i></a> </li>
            <li><a href="<?php echo $link['pinterest']; ?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a> </li>                        
        </ul>
    </div>
</section>
<!------- End page Start -------->

<?php wp_footer(); ?>