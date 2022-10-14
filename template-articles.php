<?php 
/*
* Template Name: Articles
*/
get_header(); ?>
	  
      <div class="banner inner_banner">
        <div class="container-fluid">
            <div class="maxw">
              <div class="row">
                <div class="col-md-12">
                  <div class="bannner_title artical_banner_text">
                      <h5 class="text-center text-uppercase text-light">Welcome To</h5>
                      <h2 class="text-center text-uppercase text-light"><?php the_title(); ?></h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>

    </section>

    <!-- end header and banner -->


    <!-- big images -->

    <section class="art_banner">
        <div class="container-fluid">
            <div class="maxw1">
                <div class="row">
                    <div class="col-md-12">
					  <?php
									$query = new WP_Query( array( 'post_type' => 'post', 'order' => 'DESC', 'posts_per_page' => 1) );
									if ( $query->have_posts() ) : ?>
									<?php while ( $query->have_posts() ) : $query->the_post(); ?>
                        <div class="big_img_box">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full');?>" alt="" class="w-100">
                            <div class="arti_banner_content_box">
                              <div class="topBx">
								  
								  <!--DATE-->
								  
                              <!--  <div class="date text-center text-uppercase"><?php //echo get_the_date( 'd', $post->ID ); ?><span><?php // echo get_the_date( 'F', $post->ID ); ?></span> </div> -->
                                <div class="share">
                                  
								  <div class="btn-group">
									<a href="#" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <span class="icon-share"></span>
                                    </a>
									
                                                  
                                                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-social">
                                                    <a class="dropdown-item social-facebook mb-1 rounded" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&text=<?php the_title(); ?>"><i class="fab fa-facebook-f"></i></a>
                                                    <a class="dropdown-item social-twitter mb-1 rounded" target="_blank" href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>"><i class="fab fa-twitter"></i></a>
                                                    <a class="dropdown-item social-youtube mb-1 rounded" target="_blank" href="https://www.linkedin.com/cws/share?url=<?php the_permalink(); ?>"><i class="fab fa-linkedin-in"></i></a>
                                                 
                                            </div>
                                      </div>
                                </div>
                              </div>
                              <h3 class="text-uppercase">Featured Article</h3>
                              <h4 class="artical_descrp"><?php the_title(); ?></h4>
                              <?php the_excerpt(); ?>
                              <div class="read_more">
                                <a href="<?php the_field('original_link'); ?>" target="_blank">
                                <h4 class="text-uppercase">Read more</h4>
                                <h5>
                                  <span class="icon-about_arrow"></span>
                                </h5>
                                </a>
                              </div>
                            </div>
                        </div>
						<?php endwhile; wp_reset_postdata(); ?>
						<?php endif; ?>	
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- big images -->


    <!-- Discover all -->

    


      <section class="customar diffrent_main testimoWrapper airtcal_wrapper">
        <div class="container-fluid">
          <div class="maxw1">
            <h6 class="dis_small_text text-uppercase text-center"><?php echo get_field('article_top_head'); ?></h6>
<!--             <h2 class="heading_sec text-uppercase text-center"><?php //echo get_field('article_head'); ?></h2> -->
<!--             <h5 class="text-center"><?php //echo get_field('article_text'); ?></h5> -->
          </div>
        </div>
      </section>


      <section class="alltabSec">
          <div class="container-fluid">
              <div class="maxw3">
                  <div class="row">
                      <div class="col-md-12">
                        <div class="all-artical_list">
                            <ul class="nav nav-tabs customTab" id="myTab" role="tablist">
							<?php $i=1;
								$args = array(
								  'orderby' => 'id',
								  'hide_empty'=> 0,
							  );
							  $categories = get_categories($args);
							  foreach ($categories as $cat) { ?>
                                <li class="nav-item">
                                    <a class="nav-link <?php if($i == 1){ ?>active<?php } ?>" id="catagories1-tab" data-toggle="tab" href="#catagories<?php echo $i; ?>" role="tab" aria-controls="catagories1" aria-selected="true"><?php echo $cat->name; ?></a>
                                </li>
							  <?php $i++; } ?> 

                              </ul>
                              <div class="tab-content" id="myTabContent">
                               
								<?php $i=1;
								$args = array(
								  'orderby' => 'id',
								  'hide_empty'=> 0,
							  );
							  $categories = get_categories($args);
							  foreach ($categories as $cat) { 
							  $catid = $cat->cat_ID; ?>
                                <div class="tab-pane fade show <?php if($i == 1){ ?>active<?php } ?>" id="catagories<?php echo $i; ?>" role="tabpanel" aria-labelledby="catagories<?php echo $i; ?>-tab">
                                  <div class="wrapper artWrapper">
                                  <div class="masonry">
								  <?php
									/*$query = new WP_Query( array( 'post_type' => 'post', 'order' => 'DESC', 'cat' => $catid) );
									if ( $query->have_posts() ) : ?>
									<?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                    <div class="brick">
                                      <div class="artImgbx">
                                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full');?>" alt="" class="w-100">
                                      </div>
                                      <div class="contentBx">
                                      
                                        <div class="title"><?php the_title(); ?></div>
                                        <div class="paraInner">
                                          <?php the_excerpt(); ?>
                                        </div>
                                        <div class="read_more">
                                          <a href="<?php the_permalink(); ?>">
                                          <h4 class="text-uppercase">Read more</h4>
                                          <h5>
                                            <span class="icon-about_arrow"></span>

                                          </h5>
                                          </a>
                                        </div>
                                      </div>
                                    </div>
									<?php endwhile; wp_reset_postdata(); ?>
									<?php endif; */?>	
									<?php echo do_shortcode('[ajax_load_more post_type="post" category="'.$cat->slug.'" posts_per_page="6" orderby="ID"]'); ?>	
                                    
                                  </div>
                                </div>
                              </div>
							  <?php $i++; } ?> 
							  
                              </div>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
      </section> 

<?php get_footer(); ?>