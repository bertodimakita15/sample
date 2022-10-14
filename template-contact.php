<?php 
/*
* Template Name: Contact
*/
get_header(); ?>
	  
   <div class="banner inner_banner contact_banner">
        <div class="container-fluid">
            <div class="maxw">
              <div class="row">
                <div class="col-md-12">
                  <div class="bannner_title">
<!--                       <h5 class="text-center text-uppercase text-light">Welcome To</h5>
                      <h2 class="text-center text-uppercase text-light"><?php //the_title(); ?></h2> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div> 
    </section>

    <section class="contact_form">
        <div class="container-fluid">
            <div class="maxw">
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact_inner">
                            <h2 class="text-center text-uppercase"><?php echo get_field('contact_head'); ?></h2>
                            <h4 class="text-center"><?php echo get_field('contact_sub_head'); ?></h4>
                        	
							
                            <div class="form_sec">
                           							
									 	 
                                       <!--ICON-->
								<br><br>
								<center>
								<a href="https://www.linkedin.com/in/techtree-global-1369541ba/" target="_blank">
									<img id="icon_zoom" src="<?php echo 	get_field('soc_linkedin'); ?>"></a>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
								
								<a href="https://www.facebook.com/TechTreeGlobal/" target="_blank">
									<img  src="<?php echo get_field('facebook'); ?>"></a>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
								
								<a href="https://www.instagram.com/techtreeglobal/" target="_blank">
									<img  src="<?php echo get_field('instagram'); ?>"></a>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
								
								
								<a href="mailto:sam@techtreeglobal.com">
									<img  src="<?php echo get_field('email'); ?>"></a>
									</center> <br>
							<br>
								<hr>
								<center>
<!-- 									<a href="https://docs.google.com/forms/d/e/1FAIpQLSe577ssl2otv0N4VbCM57d7kp99e0l-yiNtN2PVcXxTzgQRew/viewform?usp=sf_link" class="join-com text-uppercase text-center d-block" target="_blank">
									JOIN COMMUNITY
									</a>
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Open modal
</button> -->
	<button class="join-com text-uppercase text-center d-block" type="button" data-toggle="modal" data-target="#myModal">
										JOIN COMMUNITY	
										</button>
								</center>
								
								<!-- Button to Open the Modal -->


<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
<!--       <div class="modal-header">
     <h4 class="modal-title">JOIN OUR GROWING COMMUNITY!</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
	
      </div> -->

      <!-- Modal body -->
      <div class="modal-body">
		
<?php echo do_shortcode('[email-subscribers-form id="1"]'); ?>

		  
		 
      </div>

      <!-- Modal footer -->
<!--       <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div> -->

    </div>
  </div>
</div>
								
									 <?php  /*if ( have_posts() ) {
											while ( have_posts() ) {
												the_post(); ?>
										<?php the_content(); ?>		
									  <?php } } */ ?>	
							
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>  

<?php get_footer(); ?>