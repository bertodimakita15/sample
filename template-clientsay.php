<?php 
/*
* Template Name: Clients Say
*/
get_header(); ?>
	  
<!--  <div class="banner inner_banner">
        <div class="container-fluid">
            <div class="maxw">
              <div class="row">
                <div class="col-md-12">
                  <div class="bannner_title">
                      <h5 class="text-center text-uppercase text-light">Welcome To</h5>
                      <h2 class="text-center text-uppercase text-light"><?php //the_title(); ?></h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div> -->

    </section>
<br><br>
    <!-- end header and banner -->


    <!-- Discover all -->

     <section class="more_clients">
        <h3 class="text-uppercase text-center">OUR PARTNERS</h3>
        <div class="container-fluid">
          <div class="maxw2">
            <div class="owl-carousel owl-theme clnd_box">
			
			<?php $i=1;
				$query = new WP_Query( array( 'post_type' => 'clients', 'order' => 'DESC' ) );
				if ( $query->have_posts() ) : ?>
				<?php while ( $query->have_posts() ) : $query->the_post();  ?>
              <div class="item" data-toggle="modal" data-target="#exampleModalCenter<?php echo $i; ?>">
                <div class="owl-inner">
                  <a href="javascript:void(0)">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full');?>" alt="">
                  </a>
                </div>
              </div>
			  
			  <?php $i++; endwhile; wp_reset_postdata(); ?>
				<?php endif; ?>
             
			  
			  
            </div>
          </div>
        </div>
      </section>


      <section class="customar belive diffrent_main testimoWrapper">
        <div class="container-fluid">
          <div class="maxw1">
            <h6 class="dis_small_text text-uppercase text-center">Testimonial</h6>
			  <br>
<!--             <h2 class="heading_sec text-uppercase text-center">Customer Says</h2> -->
          </div>
        </div>
      </section>

      <section class="mansori_wrapper">
        <div class="container-fluid">
          <div class="maxw1">
            <div class="wrapper">
              <div class="masonry">
			  
			  <?php
				$query = new WP_Query( array( 'post_type' => 'testimonials', 'order' => 'DESC' ) );
				if ( $query->have_posts() ) : ?>
				<?php while ( $query->have_posts() ) : $query->the_post();  ?>
                <div class="brick ">
                  <div class="top_wrap">
                    <div class="userDtl">
                      <div class="imgBxuser">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full');?>" alt="">
                      </div>
                      <h3><?php the_title(); ?> <span><?php echo get_the_excerpt(); ?></span> 
						<br> <span ><i id="clickhere">(Click)</i></span>
					</h3>
                    </div>
                    <div class="quote">
                      <span class="icon-coute_right"></span>
                    </div>
                  </div>
                  <div class="clientText">
                    <?php the_content(); ?>
                  </div>
                </div>
  				<?php endwhile; wp_reset_postdata(); ?>
  				<?php endif; ?>
               
              </div>
              <!-- .masonry -->
              
            </div>
        </div>
        </div>
      </section>
  
      
      
  
      <!-- end Discover all -->

     

 <!-- Modal -->
    <?php /*$i=1;
		$query = new WP_Query( array( 'post_type' => 'clients', 'order' => 'DESC' ) );
		if ( $query->have_posts() ) : ?>
	<?php while ( $query->have_posts() ) : $query->the_post();  ?>
    <div class="modal fade clientDetails" id="exampleModalCenter<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="clientWrap">
              <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full');?>" alt="">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>	
   <?php $i++; endwhile; wp_reset_postdata(); ?>
	<?php endif;*/ ?>	
<br>
<center>
									<a href="https://mydevfactory.com/~sanjib7php/ankita/techglobal/contact-us/" class="join-com text-uppercase text-center d-block" >
									CONTACT US
									</a>
								</center>
<br>

<?php get_footer(); ?>