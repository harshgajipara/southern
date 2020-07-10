<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head(); ?>
</head>

<body>

<!------- Home page Start -------->
<section class="southern-way-main">
	<div class="southern-way-left">
    	<figure>
        	<img src="<?php the_field('front_banner_1'); ?>" alt=""/>
        </figure>
    </div>
	<div class="southern-way-right">
    	<figure>
        	<img src="<?php the_field('front_banner_2'); ?>" alt=""/>
        </figure>   
    </div>    
    <div class="southern-way-logo">
    	<div class="wrap">
    	<div class="left">
        	<a href="<?php echo site_url('/greenville') ?>">GREENVILLE</a> 
        </div>
            	<div class="right">
            <a href="<?php echo site_url('/columbia') ?>">COLUMBIA</a>
            </div>
            </div>
            <figure>
    	<img src="<?php the_field('home_page_logo'); ?>" alt=""/>
        </figure>
    </div>
</section>
<!------- End page Start -------->

<?php wp_footer(); ?>


</body>