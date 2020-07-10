<?php 
/*
Template Name: Venues of columbia
*/
get_header('columbia'); ?>

<!------- Start venues page  -------->
<section class="venues-main">
	<div class="container">
        <div class="venues">
            <div class="venues-top">
                <h2 class="southern-title"><?php the_title(); ?></h2>
                <div class="venues-top-left">
		            <?php the_field('heading_part'); ?>
                </div>
            </div>            
        </div>        
    </div>
</section>

<section class="venues-exclusive-main">
    <div class="container">
        <div class="venues-exclusive">
            <div class="venues-exclusive-top">
              <h2 class="southern-title">Exclusive to Southern Way</h2>
            </div>
            <div class="venues-exclusive-bottom">

            <?php if( have_rows('exclusive') ): ?>

                <?php while( have_rows('exclusive') ): the_row(); 

                    // vars
                    $venu_image = get_sub_field('venu_image');
                    $venu_name = get_sub_field('venu_name');
                    $venu_description = get_sub_field('venu_description');

                    ?>

                    <div class="venues-exclusive-column">
                        <?php if($venu_image): ?>
                    <figure>
                        <img src="<?php echo $venu_image; ?>" alt="">
                    </figure>
                        <?php endif; ?>
                    <div class="venues-exclusive-description">
                        <?php if($venu_name): ?>
                        <span><?php echo $venu_name; ?></span>
                        <?php endif; ?>

                        <?php if($venu_description): ?>
                           <p><?php echo $venu_description; ?></p>
                       <?php endif; ?>
                    </div>
                    </div>

                <?php endwhile; ?>

            <?php endif; ?>

            </div>
        </div>
    </div>
</section>

<section class="venues-favorite-main">
	<div class="container">
    	<div class="venues-exclusive">
        	<div class="venues-exclusive-top">
              <h2 class="southern-title">Our other favorite venues</h2>
            </div>
            <div class="venues-exclusive-bottom">


                <?php if( have_rows('favorite') ): ?>

                    <?php while( have_rows('favorite') ): the_row(); 

                        // vars
                        $image = get_sub_field('image');
                        $name = get_sub_field('name');
                        $location = get_sub_field('locaton');

                        ?>

                        <div class="venues-exclusive-column">
                            <?php if($image): ?>
                            <figure>
                                <img src="<?php echo $image; ?>" alt="">
                            </figure>
                            <?php endif; ?>

                            <div class="venues-exclusive-description">
                                <?php if($name): ?>
                                <span><?php echo $name; ?></span>
                                <?php endif; ?>
                                
                                <?php if($location): ?>
                                <p><?php echo $location; ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        

                    <?php endwhile; ?>

                <?php endif; ?>
                                                                                              
            </div>
        </div>
    </div>
</section>
<!------- End venues page-------->

<?php get_footer('columbia'); ?>