<?php get_header('columbia'); ?>

 <!------- Start Blog first page  -------->
    <section class="blog-detail-main">
        <div class="container">
            <div class="blog-detail">

                 <?php while(have_posts()){
                        the_post();
                 ?>

                <div class="blog-detail-left">
                    <div class="blog-detail-left-top">
                        <h2 class="southern-title"><?php the_title(); ?></h2>
                        <p><?php the_time('F  j, Y') ?></p>
                    </div>
                    <div class="blog-detail-left-bottom">
                        <figure><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" /></figure>
                        <?php the_content(); ?>
                        <div class="blog-detail-event">
                            <p>EVENTS</p>
                            <ul class="a2a_kit a2a_default_style" >
                                <p>SHARE:</p>
                                <li><a class="a2a_button_facebook">FACEBOOK</a></li>
                                <li><a class="a2a_button_twitter">TWITTER</a></li>
                                <li><a class="a2a_button_email">EMAIL</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <?php } ?>

                <div class="blog-detail-right">
                        <div class="blog-detail-right-top">
                            <h2 class="southern-title">The Latest News</h2>
                        </div>

                        <?php
                            $recent = new WP_Query(array(
                                'post_type'=>'columbia_blog',
                                'posts_per_page'=>-1,
                                'orderby' => 'date',
                                'order' => 'DESC',
                            ));

                            while($recent->have_posts()){
                                $recent->the_post();
                         ?>

                        <div class="blog-detail-right-bottom">
                            <div class="blog-detail-right-column">
                                <a href="<?php the_permalink(); ?>"><h2 class="southern-title"><?php the_title(); ?></h2></a>
                                <p><?php the_time('F  j, Y') ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <section class="featured-article-main">
        <div class="container">
            <div class="featured-article">
                <div class="featured-article-top">
                    <h2 class="southern-title">Featured articles</h2>
                </div>
                <div class="featured-article-bottom">

                    <?php 
                    $featurd = new WP_Query(array(
                        'post_type'=>'columbia_blog',
                        'posts_per_page'=>4,
                    )); 

                    while($featurd->have_posts()){
                        $featurd->the_post();
                     ?>
                    

                    <div class="featured-article-column">
                        <figure>
                            <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a>
                        </figure>
                        <div class="featured-article-description">
                            <a href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
                            <p><?php the_time('F j, Y'); ?></p>
                        </div>
                    </div>
                    <?php } wp_reset_postdata(); ?>
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
                    <!-- <li><a href="#">RECIPES</a></li>
                    <li><a href="#"> EVENTS</a></li>
                    <li><a href="#">THE TEAM</a></li>
                    <li><a href="#">TIPS & TRICKS</a></li> -->
                </ul>
            </div>
        </div>
    </section>
    <!------- End Blog first page-------->

<?php get_footer('columbia'); ?>