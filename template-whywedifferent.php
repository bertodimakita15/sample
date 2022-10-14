<?php 
/*
* Template Name: How We Different
*/
get_header(); ?>
	  
<!-- <div class="banner inner_banner">
        <div class="container-fluid">
            <div class="maxw">
              <div class="row">
                <div class="col-md-12">
                  <div class="bannner_title">
                      <h5 class="text-center text-uppercase text-light">Welcome To</h5>
                      <h2 class="text-center text-uppercase text-light"> <?php //the_title(); ?></h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
-->
    </section> 

    <!-- end header and banner -->


<br><br>
    <section class="customar diffrent_main"> 

        <div class="container-fluid">
          <div class="maxw1">
            <div class="dif_btn_sec">
				
<button type="button" class="df_btn text-uppercase text-center mb-3 filter-button work active" data-filter="com_work" onclick="work()">OUR COMMUNITY WORK</button>
           
<button type="button" class="df_btn text-uppercase text-center mb-3 filter-button pedagogies" data-filter="inno_pedagogies" onclick="pedagogies()">OUR INNOVATIVE PEDAGOGIES</button>

<button type="button" class="df_btn text-uppercase text-center mb-3 filter-button platforms" data-filter="learn_platform" onclick="platforms()">OUR LEARNING PLATFORMS</button>

            </div>
			
				
            <div class="content_sec" style=" 
  margin: 0;
  padding: 0;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #ffffff;
  ">
				
   <!--image slider start-->
    <div class="slider">
      <div class="slides"> 
        <!--radio buttons start-->
        <input  type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        
        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slide first">
          <img id="img1st" src="<?php echo get_field('reallybots_for_unesco'); ?>" alt="">   
        </div>
		  
        <div class="slide">
		  <img id="img2nd" src="<?php echo get_field('blended_learning_for_schools_in_the_philippines'); ?>" alt="">
        </div>
		  
        <div class="slide">
          <img id="img3rd" src="<?php echo get_field('mentoring_of_designers_and_facilitators'); ?>" alt="">
        </div>
   
        <!--slide images end-->
        <!--automatic navigation start-->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
           -->
        </div>
        <!--automatic navigation end-->
      </div>
      <!--manual navigation start-->
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
     
      </div>
      <!--manual navigation end-->
    </div>
    <!--image slider end-->
				
            </div>
			
			
          </div>
        </div>
      </section>
	  
<?php get_footer(); ?>
<script>
// jQuery(document).ready(function(){
// 	var defvalue = 'our-community-work';
// 	jQuery(".filter").not('.'+defvalue).hide('3000');
//     jQuery('.filter').filter('.'+defvalue).show('3000');

//     jQuery(".filter-button").click(function(){
//         var value = jQuery(this).attr('data-filter');
// 		jQuery(".filter-button").removeClass("active");
// 		jQuery(this).addClass("active");
        
//         if(value == "all")
//         {
//             //$('.filter').removeClass('hidden');
//             jQuery('.filter').show('1000');
//         }
//         else
//         {
// //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
// //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
//             jQuery(".filter").not('.'+value).hide('3000');
//             jQuery('.filter').filter('.'+value).show('3000');
            
//         }
//     });
    
   
// });
	
	var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 3){
        counter = 1;
      }
    }, 5000);
	
	jQuery(document).ready(function(){

        var defvalue = 'our-community-work';
	    jQuery(".filter").not('.'+defvalue).hide('3000');
        jQuery('.filter').filter('.'+defvalue).show('3000');
	    
		jQuery('.slider3').hide('0');
        jQuery('.slider2').hide('0');  
		
		
        jQuery(".work").click(function(){
			document.getElementById("img1st").src="<?php echo get_field('reallybots_for_unesco'); ?>";
			document.getElementById("img2nd").src="<?php echo get_field('blended_learning_for_schools_in_the_philippines'); ?>"; 
			document.getElementById("img3rd").src="<?php echo get_field('mentoring_of_designers_and_facilitators'); ?>"; 
			
//             jQuery('.slider3').hide('3000');
//             jQuery('.slider2').hide('3000');    
//             jQuery('.slider').show('3000');

        });

        jQuery(".pedagogies").click(function(){
				document.getElementById("img1st").src="<?php echo get_field('designing_errors_for_learning_and_teaching'); ?>";
			document.getElementById("img2nd").src="<?php echo get_field('learning_atmosphere_and_production'); ?>"; 
			document.getElementById("img3rd").src="<?php echo get_field('nano_learning_pedagogy'); ?>"; 
			
			
			
//             jQuery('.slider').hide('3000');
//             jQuery('.slider3').hide('3000');    
//             jQuery('.slider2').show('3000');
        });

        jQuery(".platforms").click(function(){
			
			document.getElementById("img1st").src="<?php echo get_field('reallylesson_platform'); ?>";
			document.getElementById("img2nd").src="<?php echo get_field('reallybot_creation_platform'); ?>"; 
			document.getElementById("img3rd").src="<?php echo get_field('tech_tree_learning_platform'); ?>"; 
			
			
//             jQuery('.slider').hide('3000');
//             jQuery('.slider2').hide('3000');    
//             jQuery('.slider3').show('3000');
        });

    jQuery(".filter-button").click(function(){
        var value = jQuery(this).attr('data-filter');
		jQuery(".filter-button").removeClass("active");
		jQuery(this).addClass("active");
        });
    
   
});

</script>