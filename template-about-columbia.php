<?php 
/*
Template Name: About Columbia
*/
get_header('columbia'); ?> 

<!------- Start About page  -------->
<section class="about-southern-main">
	<div class="container">
        <div class="about-southern">
            <div class="about-southern-top">
            	<div class="about-southern-top-left">
	            	<h2 class="southern-title"><?php the_title(); ?></h2>
                </div>
            	<div class="about-southern-top-right">
                <?php if(get_field('heading_description')): ?>
                    <?php the_field('heading_description'); ?>
                <?php endif; ?>
                </div>
            </div>
            <div class="about-southern-bottom">
                <?php if(get_field('description')): ?>
                <?php $description = get_field('description'); ?>
                <?php endif; ?>
                <div class="about-southern-bottom-content">
                	<?php echo $description['left']; ?>
                </div>        
                <div class="about-southern-bottom-content">
                	<?php echo $description['right']; ?>
                </div>                                
            </div>
        </div>
    </div>
</section>

<section class="mobile-tab">
	<div class="container">
        <div class="my-menu-right">
            <div class="header-tab">
                <ul class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <li><a href="<?php echo site_url('/greenville') ?>">GREENVILLE</a></li>
                    <li><a href="<?php echo site_url('/columbia') ?>">COLUMBIA</a></li>
                </ul>   
            </div>
            <ul class="header-social">
                <?php $link = get_field('social_links','option'); ?>
                <li><a href="<?php echo $link['instagram']; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a> </li>                    
                <li><a href="<?php echo $link['facebook']; ?>"><i class="fa fa-facebook-f" aria-hidden="true"></i></a> </li>
                <li><a href="<?php echo $link['pinterest']; ?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a> </li>                        
            </ul>
        </div>
    </div>
</section>

<section class="about-our-team-main">
	<div class="container">
    	<div class="about-our-team">
            <div class="about-our-team-top">
	            <h2 class="southern-title">Our Team</h2>
            </div>
            <div class="about-our-team-bottom">

            <?php if( have_rows('our_team') ): ?>

                <?php while( have_rows('our_team') ): the_row(); 

                    // vars
                    $image = get_sub_field('image');
                    $name = get_sub_field('name');
                    $role = get_sub_field('role');
                    ?>

                    <div class="about-our-team-column">
                    <figure>
                        <img src="<?php echo $image; ?>" alt=""/>
                    </figure>
                    <div class="about-our-team-description">
                        <span><?php echo $name; ?></span>
                        <p><?php echo $role; ?></p>
                    </div>
                    </div>

                <?php endwhile; ?>

            <?php endif; ?>
				
            </div>                
        </div>
    </div>
</section>
<!------- End About page-------->

<?php get_footer('columbia'); ?>