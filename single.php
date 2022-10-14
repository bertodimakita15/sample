<?php get_header(); ?>
 </section>

    <!-- end header and banner -->

<?php if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post(); ?>
    <section class="art_banner" style="margin-top: 0px;">
        <div class="container-fluid">
            <div class="maxw1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="big_img_box details_big_img">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full');?>" alt="" class="w-100">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="details_content_wrap">
                            <div class="leftBx">
                                <h3><?php echo get_the_date( 'd', $post->ID ); ?> <span><?php echo get_the_date( 'F', $post->ID ); ?></span></h3>
                                <ul>
                                    <li><a href="#">
                                      <icon class="icon-eye"></icon>
                                        <span><?php echo getPostViews(get_the_ID());?></span>
                                        </a>
                                    </li>
                                    <li><a href="#">
                                      <icon class="icon-massage"></icon>
                                            <span><?php echo get_comments_number(); ?></span>
                                    </a></li>
                                    <li>
									 <div class="btn-group">
									<a href="#" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <icon class="icon-share"></icon>
                                            <span>share</span>
                                    </a>
									
                                                  
                                                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-social">
                                                    <a class="dropdown-item social-facebook mb-1 rounded" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&text=<?php the_title(); ?>"><i class="fab fa-facebook-f"></i></a>
                                                    <a class="dropdown-item social-twitter mb-1 rounded" target="_blank" href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>"><i class="fab fa-twitter"></i></a>
                                                    <a class="dropdown-item social-youtube mb-1 rounded" target="_blank" href="https://www.linkedin.com/cws/share?url=<?php the_permalink(); ?>"><i class="fab fa-linkedin-in"></i></a>
                                                 
                                            </div>
                                      </div>  
									</li>
                                </ul>
                            </div>
                            <div class="rightBx">
							<h3><?php the_title(); ?></h3>
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <div class="line details_line"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="reply_sec">
						<h3 class="text-uppercase">Recent Comment</h3>
						 <?php comments_template(); ?>
                            
                           <!-- <div class="comment_details">
                                <h4 class="name_part">
                                    Merry watson54
                                </h4>
                                <p>I am still not sure why Ishan Kishan is being dropped. Krunal Pandya can’t play just as a pure batsman and hence I am very surprised at this thought process. Winning makes people forget their shortcomings and I think their batting is still a bit light and they should look at getting an extra batter in. James Nisham turned out to be a failure and I am not sure if he will get another game.I am still not sure why Ishan Kishan is being dropped. Krunal Pandya can’t play just as a pure batsman and hence I am very surprised at this thought process. Winning makes people forget their shortcomings and I think their batting is still a bit light and they should look at getting an extra batter in.</p>
                                <div class="time_replyCount">
                                    <h5>26 min ago</h5>
                                    <h6>reply <span>2</span> </h6>
                                </div>
                                <div class="reply_name">
                                  <h4><span>John Doe</span> I want contact Number pleae..</h4>
                                  <h5>Vew 1 more reply...</h5>
                                </div>
                            </div>-->
                        </div>
                        <div class="line"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="comment_form" id="respond">
                            <h3 class="text-uppercase">Your Comment</h3>
    
							<form action="https://mydevfactory.com/~sanjib7php/ankita/techglobal/wp-comments-post.php" method="post" id="commentform" class="comment-form">
                            <div class="comment_form_sec">
                                    <div class="form_sec">
                                            <div class="row">
                                                <div class="col-md-6 mb-5">
                                                    <div class="form-group">
													<input id="author" name="author" type="text" value="" required="required" placeholder="Name" class="form-control">
                                                        <!--<input class="form-control" id="" placeholder="Name" type="text">-->
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-5">
                                                    <div class="form-group">
													<input id="email" name="email" type="email" value="" aria-describedby="email-notes" required="required" class="form-control" placeholder="Email Address">
                                                        <!--<input class="form-control" id="" placeholder="Email Address" type="email">-->
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
													<textarea id="comment" name="comment" rows="3" maxlength="65525" required="required" class="form-control" placeholder="Comment"></textarea>
                                                        <!--<textarea class="form-control" placeholder="Comment" rows="3"></textarea>-->
                                                    </div>
                                                </div>
                                            </div>
                                       
                                    </div>
                                <div class="btn_sec">
								<?php $replytocom = $_GET['replytocom']; ?>
								        <button name="submit" type="submit" id="submit" class="submit d-block submit_btn text-uppercase">Submit</button>
								        <!--<input name="submit" type="submit" id="submit" class="submit d-block submit_btn text-uppercase" value="Post Comment">--> 
										<input type="hidden" name="comment_post_ID" value="<?php echo get_the_ID();?>" id="comment_post_ID">
										<input type="hidden" name="comment_parent" id="comment_parent" value="<?php echo $replytocom; ?>">
                                        
                                </div>
								<?php //comment_form(); ?>.
                            </div>
							</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } } ?>
	
<?php get_footer(); ?>