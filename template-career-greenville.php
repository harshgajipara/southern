<?php
/*
Template Name: Career Greenville
*/
get_header('columbia');
?>

 <!------- Start career page  -------->
    <section class="career-main">
        <div class="container">
            <div class="career">
                <div class="career-top">
	                <h2 class="southern-title">Current Job Openings</h2>
                </div>            


                <?php if( have_rows('career') ): ?>
				    
				    <?php while( have_rows('career') ): the_row(); 
				        $job_title = get_sub_field('job_title');
				        $job_description = get_sub_field('job_description');

				        ?>
				    	
				    	<div class="career-bottom">
		                    <h2 class="southern-title"><?php echo $job_title; ?></h2>
		                    <p><a data-toggle="collapse" href="#<?php echo get_row_index(); ?>">READ MORE</a></p>
		                    <div class="collapse" id="<?php echo get_row_index(); ?>">
		                        <p><?php echo $job_description; ?></p>
		                    </div>
		                </div>

				    <?php endwhile; ?>
				    
				<?php endif; ?>

            </div>            
        </div>
    </section>

    <!------- End career page-------->

<?php get_footer('columbia'); ?>