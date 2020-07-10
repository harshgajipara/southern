<?php get_header('columbia'); ?>

<!------- Start Blog first page  -------->
<section class="featured-article-main">
	<div class="container">
        <div class="featured-article">
            <div class="featured-article-top">
                <h2 class="southern-title"><?php single_term_title(); ?> Posts</h2>
            </div>
            <div class="featured-article-bottom">

                <?php 
                //http://codex.wordpress.org/Function_Reference/WP_Query#Taxonomy_Parameters
                $term_slug = get_queried_object()->slug;
                        if ( !$term_slug )
                        return;
                        else
                $args = array(
                    'tax_query' => array(
                                     array(
                                       'taxonomy' => 'col_cat',
                                       'field' => 'slug',
                                       'terms' => $term_slug,
                                     )
                                   )
                ); ?>

            	<?php echo do_shortcode('[ajax_load_more post_type="columbia_blog" taxonomy="col_cat" taxonomy_terms="'.$term_slug.'" taxonomy_operator="IN"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer('columbia'); ?>