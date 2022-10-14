<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php bloginfo('name');?><?php wp_title( '|', true, 'left' ); ?></title>
	<?php wp_head(); ?>
  </head>
  <body>
    <div class="loder" id="mydiv">
      <img src="<?php echo get_field('logo', 'option'); ?>" alt="" data-aos="zoom-in" data-aos-duration="4000" data-aos-delay="600">
      <div class="boxes">
        <div class="box">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="box">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="box">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="box">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    </div>
    <div class="cursor"></div>
<!-- start header and banner -->

<div class="side-bar">
  <div class="menu_wrap">
    <div class="title">Menu</div>
    <div class="close-btn">
      <div class="icon_cross"><img src="<?php echo get_template_directory_uri(); ?>/images/cross.png" alt=""></div>
    </div>
  </div>
  <div class="menu">
   
	<?php 
                    wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container' => '',
                    'menu' => 'Header',
                    'items_wrap' => '<ul>%3$s</ul>',
                    ));
                ?>
	
  </div>
</div>


    
    <section class="header_sec">
      <header>
	    
        
        <div class="header_top_wrapper <?php if ( is_single() && 'post' == get_post_type() ) { ?>post_details_wrapper<?php } ?>"> 
          <div class="mainMenuSec">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">

                </div>
              </div>
            </div>
          
                  <nav class="navbar navbar-expand-lg">
           <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img src="<?php echo get_field('logo', 'option'); ?>" alt="" class="weblogo"></a>
                   <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button> -->

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <?php 
                    wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container' => '',
                     'menu_class' => 'navbar-nav ml-auto mainTopCustomNav',
                    'menu' => 'Header',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    ));
                ?>
          
                      
                    </div>
                  </nav>
                
        </div>
          <div class="container-fluid mobileNav">
            <div class="maxw">
              <div class="row">
                <div class="header_top_wrap">
                  <div class="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_field('logo', 'option'); ?>" alt="logo"></a></div>
                  <div class="social_nav">
                    <!--<div class="social">
                      <a href="<?php echo get_field('fb_link', 'option'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                      <a href="<?php echo get_field('twitter_link', 'option'); ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                      <a href="<?php echo get_field('instagram_link', 'option'); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>-->
                    <div class="navbar_sec menu-btn">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/menu-bars.png" alt="" id="menu_active">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>