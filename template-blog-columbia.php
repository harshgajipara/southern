<?php
/*
Template Name: Blog Columbia
*/
get_header('columbia');
?>

<!------- Start Blog first page  -------->
<section class="featured-article-main">
	<div class="container">
        <div class="featured-article">
            <div class="featured-article-top">
                <h2 class="southern-title">Featured articles</h2>
            </div>
            <div class="featured-article-bottom">

            	<?php 
            	$feature = new WP_Query(array(
            		'post_type'=>'columbia_blog',
            		'posts_per_page'=>4,
                'orderby' => 'date',
                'order' => 'DESC',
            	));
            		while($feature->have_posts()){
            			$feature->the_post();
            	?>

                <div class="featured-article-column">
                  <?php if(get_the_post_thumbnail_url()): ?>
                    <figure>
                        <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a>
                    </figure>
                  <?php endif; ?>

                    <div class="featured-article-description">
                        <a href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
                        <p><?php the_time('F  j, Y') ?></p>
                    </div>
                </div>
            <?php } ?>
                
            </div>            
        </div>        
    </div>
</section>

<section class="blog-latest-news-main">
	<div class="container">
    	<div class="blog-latest-news">
            <div class="blog-latest-news-top">
                <h2 class="southern-title">Featured articles</h2><br>
                <?php echo do_shortcode('[ajax_load_more container_type="div" post_type="columbia_blog" progress_bar="true" progress_bar_color="ed7070" button_label="Loading.." posts_per_page="4"]'); ?>
            </div>
            </div>                    
        </div>
    </div>
</section>
<section class="blog-categories-main">
	<div class="container">
        <div class="blog-categories">
	        <h2 class="southern-title">Categories</h2>
            <ul>
            	 <?php
                       $args = array(
                                   'taxonomy' => 'col_cat',
                               );

                       $cats = get_categories($args);

                       foreach($cats as $cat) { ?>
                          <li><a href="<?php echo get_category_link( $cat->term_id ) ?>">
                               <?php echo $cat->name; ?>
                          </a></li>
                      <?php } ?>
                      
                  </ul>
              </div>    
          </div>
      </section>

<!------- End Blog first page-------->

<?php get_footer('columbia'); ?>