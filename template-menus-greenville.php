<?php 
/*
Template Name: Menus Greenville
*/
get_header('greenville');
?>

<!------- Start menus page  -------->
    <section class="menus-main">
            <div class="container">
                <div class="menus">
                <div class="menus-top">
                <h2 class="southern-title"><?php the_title(); ?></h2>
                <ul class="nav nav-tabs">

                    <?php if( have_rows('menus') ): ?>

                    <?php while( have_rows('menus') ): the_row(); 

                        $name = get_sub_field('menu_name');
                        $content = get_sub_field('menus_content');
                        $id = get_sub_field('id');
                        ?>

                        <li class="active">
                            <a data-toggle="tab" href="#<?php echo get_row_index(); ?>">
                                <?php if($name): ?>
                                <p><?php echo $name; ?></p>
                                <?php endif; ?>
                            </a>
                        </li>

                    <?php endwhile; $i++; ?>

                    <?php endif; ?>  
                </ul>
                </div>
                    
                    <div class="tab-content clearfix">
                        <?php while( have_rows('menus') ): the_row();   

                            $name = get_sub_field('menu_name');
                            $content = get_sub_field('menus_content');
                            $id = get_sub_field('id');
                            ?>

                        <div class="tab-pane fade in active" id="<?php echo get_row_index(); ?>">
                            <div class="menus-bottom-main">
                                <div class="menus-bottom-title">
                                <?php if($name); ?>
                                    <h3><?php echo $name; ?></h3>
                                <?php endif; ?>
                                </div>
                                 
                                <div class="menus-bottom-column">
                                <?php if($content); ?>
                                <?php echo $content; ?>
                                <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>                  
                    </div>      
                </div>
            </div>
        </div>
    </div>
    </div>
    </section>
    <!--End LEAFY GREENS -->

    <!------- End menus page-------->

<?php get_footer('greenville'); ?>