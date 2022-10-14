<?php 
/*
* Template Name: Reallybots
*/
get_header(); ?>
	
<!-- <div class="banner">
        <video class="founder-video" muted autoplay loop controls >
  						<source src="<?php //echo get_field('bot_background_video'); ?>" type="video/mp4">

						</video>
      </div>	   -->
<!--     <div class="banner inner_banner">
        <div class="container-fluid">
            <div class="maxw">
              <div class="row">
                <div class="col-md-12">
                  <div class="bannner_title">

<h2 class="text-center text-uppercase text-light"><?php //the_title(); ?></h2> 
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
 -->
    </section>
<section class="founder" data-aos="fade-up">
			    <div class="container-fluid">
					<div class="maxw3">

         				 <h2 class="heading_sec text-uppercase text-center pb-5 pt-4"><?php echo get_field('about_founder'); ?>					</h2>
						<video class="founder-video" onloadstart="this.volume=0.5" autoplay loop controls >
  						<source src="<?php echo get_field('bot_background_video'); ?>" type="video/mp4">

						</video>
						
					</div>
			   </div>
		  </section>
    <!-- end header and banner -->

<!-- VIDEO -->

<!-- <section class="discover_all belive_parent" data-aos="fade-up">
<video id= "background_video_bot" src="<?php// echo get_field('bot_background_video'); ?>"  muted loop controls class="discover-vid"></video> 
	
</section> -->
<!--   <section class="founder" data-aos="fade-up">
			    <div class="container-fluid">
					<div class="maxw3">
						<video class="founder-video" muted loop autoplay controls >
  						<source src="<?php //echo get_field('bot_background_video'); ?>" type="video/mp4">

						</video>
						
					</div>
			   </div>
		  </section> -->
<div class="line">
</div>
    <!-- Discover all -->

    <section class="discover_all" data-aos="fade-up">
        <div class="container-fluid">
          <div class="maxw1">
            <div class="row">
              <div class="col-md-12">
                <div class="misson_inner discover_inner">
<!--                   <h5 class="text-uppercase intro_heading"><p><?php //echo get_field('bots_head'); ?></p> <span></span> </h5> -->
                  <div class="discover_inner_panel">
                    <h2 class="text-uppercase"><?php echo get_field('bot_sub_head'); ?></h2>
<!-- link here -->
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
			
			<?php $query = new WP_Query( array( 'post_type' => 'reallybot', 'order' => 'ASC' ) );

				if ( $query->have_posts() ) : ?>
				<?php while ( $query->have_posts() ) : $query->the_post();  ?>
              <div class="col-md-4 mb-5">
                <div class="imgWrap">
                  <div class="imgBx">
                    <a href="#">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full');?>" alt="" class="w-100">
                    <div class="dateBx">
                      <h3 class="text-capitalize">levels</h3>
                      <h4><?php echo get_field('from'); ?></h4>
                      <h5 class="text-uppercase">to</h5>
                      <h6><?php echo get_field('to'); ?></h6>
                    </div>
                    </a>
                    <div class="detailsBx">
                    <h3 class="text-uppercase"><?php the_title(); ?></h3>
                    <h4><?php the_excerpt(); ?></h4>
                    <ul>
           <?php  if( have_rows('listing') ) :
            while( have_rows('listing') ) : the_row(); ?>
                      <li><a href="<?php echo get_sub_field('list_link'); ?>" target="_blank"><span><i class="arrow right"></i></span><?php echo get_sub_field('list_text'); ?></a></li>
            <?php  $i++; endwhile; endif;  ?>
                    </ul>
                  </div>
                  </div>
                  
                </div>
              </div>
			  <?php endwhile; wp_reset_postdata(); ?>
			  <?php endif; ?>
              
            </div>
          </div>
        </div>
		              
      </section>
<center>
   <a href="<?php echo get_field('contact_button_link'); ?>" class="join-wwd text-uppercase text-center d-block"><?php echo get_field('contact_button'); ?></a>
       </center>
<br><br>
      <!-- end Discover all -->

    

    <!-- misson visson -->

   <!-- <section class="misson_visson rell_bottom" >
      <div class="container-fluid">
        <div class="maxw1">
          <div class="row">
            <div class="col-md-12">
              <div class="misson_inner rell_bottom_inner">
                <div class="rell_inner_details">
                  <h5 class="text-uppercase intro_heading"><p><?php echo get_field('bottom_head'); ?></p><span></span></h5>
                  <h2 class="text-uppercase"><?php echo get_field('bottom_sub_head'); ?></h2>
                  <h3><?php echo get_field('bottom_text_head'); ?> </h3>
                  <p><?php echo get_field('bottom_text'); ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <img src="<?php echo get_field('bottom_img'); ?>" alt="" data-toggle="modal" data-target=".bd-example-modal-lg">
    </section>

	
<div class="modal fade bd-example-modal-lg rell_video_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    <div class="modal-content">
      <video src="<?php echo get_field('video_popup'); ?>" muted loop autoplay class="w-100"></video>
    </div>
  </div>
</div>-->

    <!-- end misson visson -->
	<script>
var video = document.getElementById("background_video_bot");
video.addEventListener("canplay", function() {
  setTimeout(function() {
    video.play();
  }, 5000);
});
</script>
<?php get_footer(); ?>