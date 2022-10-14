    <!-- footer -->

    <section class="footer_sec">
      <footer>
        <div class="footer_logo">
          <a href="<?php bloginfo('url'); ?>">
          <img src="<?php echo get_field('logo', 'option'); ?>" alt="">
        </a>
        </div>
        <div class="container-fluid">
          <div class="maxw1 footer_top_wrap">
            <div class="row">
			 <div class="col-md-12">
			   <div class="address_info">
              
                <div class="phoneBx">
                  <a href="https://mydevfactory.com/~sanjib7php/ankita/techglobal/contact-us/">
                  <div class="icon">
                    <span class="icon-massage"></span>
                  </div>
                  <div class="ph_no"><?php echo get_field('phone', 'option'); ?></div>
                  <div class="desc"><?php echo get_field('phone_desc', 'option'); ?></div>
                  </a>
                </div>
                <div class="phoneBx">
                  <a href="mailto:<?php echo get_field('email', 'option'); ?>">
                  <div class="icon">
                    <span class="icon-envalop"></span>
                  </div>
				  <div class="desc"><?php echo get_field('email_desc', 'option'); ?></div>
                  <div class="ph_no"><?php echo get_field('email', 'option'); ?></div>
                  </a>
                </div>
              
			   </div>
			  </div>
            </div>
          </div>
          <div class="maxw">
            <div class="row">
              <div class="col-md-12">
                <div class="footer_social">
                  <div class="social">
                    <a href="<?php echo get_field('fb_link', 'option'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="<?php echo get_field('twitter_link', 'option'); ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="<?php echo get_field('instagram_link', 'option'); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                  </div>
                </div>
                <h3 class="colyright text-center"><?php echo get_field('copyright', 'option'); ?></h3>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </section>


    <!-- end footer -->

  <div class="chatBx" id="chatIcon">
     <a data-toggle="modal" data-target=".bd1-example-modal-lg"><img src="<?php echo get_template_directory_uri(); ?>/images/chat.png" alt=""></a> 
   </div>
   
   <!-- Modal -->
<div class="modal fade bd1-example-modal-lg rell_video_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    <div class="modal-content">
      <iframe src="https://www.reallybot.com/iframe/845cfe658bfec7b68b0b0a3da291ee54" width="100%" height="650"></iframe>
    </div>
  </div>
</div>  

<?php wp_footer(); ?>

  
        <script>
        AOS.init({
            offset: 300,
            duration: 1000,
        });
        </script>
        <script>
          window.addEventListener("scroll", function () {
            var header = document.querySelector(".header_top_wrapper");
            header.classList.toggle("sticky", window.scrollY > 0);
          });
        </script>
  </body>
</html>
