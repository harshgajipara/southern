<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>    
</head>

<body <?php body_class(); ?>>

<!------- Header Start -------->
<header class="header-main">
    	<div class="container">
            <div class="my-menu">
                <div class="my-menu-left">
					<ul>
                        <?php 
                            wp_nav_menu(array(
                                'theme_location' => 'Colubia',
                                'menu_class' =>false,
                            ));
                         ?>
	                </ul>                
                </div>
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
            </div>
        </div>
</header>
<!------- Header End -------->