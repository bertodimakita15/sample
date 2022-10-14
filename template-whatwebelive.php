<?php 
/*
* Template Name: What We Believe
*/
get_header(); ?>
	  
<!--  <div class="banner inner_banner">
        <div class="container-fluid">
            <div class="maxw">
              <div class="row">
                <div class="col-md-12">
                  <div class="bannner_title">
                      <h5 class="text-center text-uppercase text-light">Welcome To</h5>
                      <h2 class="text-center text-uppercase text-light"><?php the_title(); ?></h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div> -->

    </section>

    <!-- end header and banner -->


    <!-- Discover all -->

    <section class="discover_all belive_parent" data-aos="fade-up">
	  <video src="<?php echo get_field('top_right_video'); ?>" muted loop autoplay class="discover-vid"></video>
	  <div class="belive-sec">
        <div class="container-fluid">
          <div class="maxw1">
            <div class="row">
              <div class="col-md-12">
                <div class="misson_inner discover_inner belive_inner">
<!--                   <h5 class="text-uppercase intro_heading"><p><?php echo get_field('top_head'); ?></p> <span></span> </h5> -->
                  <div class="discover_inner_panel">
                    <h2 class="text-uppercase"><?php echo get_field('top_sub_head'); ?></h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="row belive_top">
                <div class="col-md-6">
                    <div class="left">
                        <p><?php echo get_field('top_left_text'); ?></p>
                        <a href="<?php echo get_field('contact_button_link'); ?>" class="talk_us_btn testimo_btn text-uppercase text-center d-block belive-btn"><?php echo get_field('contact_button'); ?></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right">
                        <p><?php //echo get_field('top_right_text'); ?></p>
						
                    </div>
                </div>
            </div>
          </div>
        </div>
		</div>
      </section>
      <div class="line"></div>


      <section class="customar belive" data-aos="fade-up">
        <div class="container-fluid">
          <div class="maxw3">
            <h6 class="dis_small_text text-uppercase text-center"><?php echo get_field('bottom_head'); ?></h6>
            <h2 class="heading_sec text-uppercase text-center"><?php echo get_field('bottom_sub_head'); ?></h2>
			<h3 class="heading_sec text-uppercase text-center belive-head"><?php echo get_field('bottom_head_two'); ?></h3>
            

            <div class="row">
              <div class="col-md-12">
                <div class="nav_wrap">
                  
                

            <section id="tabs">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
			
			 <?php $i=1;
			   if( have_rows('technologies') ) :
				while( have_rows('technologies') ) : the_row(); ?>
              <li class="nav-item">
                <a class="nav-link <?php if($i==1){ ?>active<?php } ?>" id="<?php if($i==1){ ?>home<?php } elseif($i==2){ ?>profile<?php } else{ ?>contact<?php } ?>-tab" data-toggle="tab" href="#<?php if($i==1){ ?>home<?php } elseif($i==2){ ?>profile<?php } else{ ?>contact<?php } ?>" role="tab" aria-controls="<?php if($i==1){ ?>home<?php } elseif($i==2){ ?>profile<?php } else{ ?>contact<?php } ?>" <?php if($i==1){ ?>aria-selected="true"<?php } else { ?>aria-selected="false"<?php } ?>><?php echo get_sub_field('technology_title'); ?></a>
              </li>
			  <?php  $i++; endwhile; endif;  ?>
            </ul>
            <div class="range-slider">
              <input class="range-slider__range" type="range" value="42" min="0" max="250" step="">
              <span class="range-slider__value" style="opacity:0;visibility: hidden;">0</span>
            </div>

            <div class="tab-content" id="myTabContent">
			<?php $i=1;
			   if( have_rows('technologies') ) :
				while( have_rows('technologies') ) : the_row(); ?>
              <div class="tab-pane fade<?php if($i==1){ ?> show active<?php } ?>" id="<?php if($i==1){ ?>home<?php } elseif($i==2){ ?>profile<?php } else{ ?>contact<?php } ?>" role="tabpanel" aria-labelledby="<?php if($i==1){ ?>home<?php } elseif($i==2){ ?>profile<?php } else{ ?>contact<?php } ?>-tab">
               <div class="tab_parent">
			   <video src="<?php echo get_sub_field('technology_background'); ?>" muted loop autoplay class="tab-vid"></video>
			   <div class="tab_details<?php if(get_sub_field('technology_text')){ ?> middle_text<?php } ?>">
                   <h3 class="text-uppercase"><?php echo get_sub_field('technology_title'); ?></h3>
				  <?php if(get_sub_field('technology_text')){ ?><p class="text-center"><?php echo get_sub_field('technology_text'); ?></p><?php } ?>
                  <ul>
				  <?php if( have_rows('technology_listing') ) :
					while( have_rows('technology_listing') ) : the_row(); ?>
                      <li><a href="<?php echo get_sub_field('technology_link'); ?>"><?php echo get_sub_field('technology_list'); ?></a></li>
                   <?php  endwhile; endif;  ?>   
                  </ul>
              </div>
			  </div>
			  
            </div>
			<?php  $i++; endwhile; endif;  ?>
           
            </div>
          </section>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  
  
      <!-- end Discover all -->    
	
<?php get_footer(); ?>
 <script>
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
          </script>