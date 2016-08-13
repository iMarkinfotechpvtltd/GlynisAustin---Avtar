<?php 
// Template Name: Home Page
get_header();
 ?>
 
 
    <section class="banner">
        <div class="overlay">
            <iframe width="100%" src="<?php echo get_field('banner',6); ?>?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1">
            </iframe>
        </div>
        <div class="description">
            <h1>WELCOME <span> HOME</span></h1>
            <ul>
                <li>
                    <a href="<?php echo get_field('first_circle_source_link',6); ?>" class="">
                        <p><?php echo get_field('first_circle_content',6); ?></p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo get_field('second_circle_source_link',6); ?>">
                        <p><?php echo get_field('second_circle_content',6); ?></p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo get_field('third_circle_source_link',6); ?>">

                        <p><?php echo get_field('third_circle_content',6); ?></p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="tagline">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h2 class="pull-left">why choose glynis austin properties?</h2>
                        <a href="<?php echo get_field('why_choose',6); ?>" target="_black" class="pull-right">click here <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about_us">
        <div class="container">
            <div class="row">
                <div class="col-md-6 pull-right">
                    <h2>About Us</h2>
                    <p><?php echo get_field('about_us_content',6);?></p>
                    <a href="<?php echo get_site_url(); ?>/about">find out  more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
                <div class="col-md-6 pull-left">
					<?php	$image=get_post_meta(6,"about_us_image",true);
					$thumb = wp_get_attachment_image_src($image, 'about_pic' );
					?>
					<img src="<?php echo $url = $thumb['0'];?>">
                </div>
            </div>
        </div>
    </section>
    <section class="client_say_section">
        <div class="container">
            <h2 class="title">our clients say</h2>
            <div id="testimonial">
			<?php
					global $post;
					$type = 'testimonial';
					$args=array(
					  'post_type' => $type,
					  'post_status' => 'publish',
					  'order'      => 'ASC',
					  'posts_per_page' =>3
					  );
					$my_query = new WP_Query($args);
					if( $my_query->have_posts() ) {
					  while ($my_query->have_posts()) : $my_query->the_post(); ?>			
                <div class="item">
                    <div class="testim-box">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="lft">
                                    <iframe width="420" height="315" src="<?php the_field('video_source',$my_query->ID);?>?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=0"></iframe>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="rght">
                                    <p><?php the_content(); ?></p>
                                    <h3><?php the_title(); ?></h3>
                                    <h4><?php echo get_field('sub_title',$my_query->ID); ?></h4>
                                    <a href="<?php echo get_site_url(); ?>/testimonial">click to hear more from our clients</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<?php endwhile; 
					wp_reset_query(); } ?>

            </div>
        </div>
    </section>
	<script>
        jQuery('.client_say_section').ready(function () {
            jQuery("#testimonial").owlCarousel({

                autoPlay: 5000, //Set AutoPlay to 3 seconds
                navigation: true,
                navigationText: ["", ""],
                items: 1,
                itemsDesktop: [1199, 1],
                itemsDesktopSmall: [979, 1],
                itemsTablet: [768, 1],
                itemsMobile: [479, 1]

            });
        });
    </script>
    <section class="property_week">
        <div class="container">
            <h2 class="title">This Week In Property</h2>
            <div class="property_tab">
                <!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
				<?php 
					$args = array(
						'type'                     => 'property',
						'orderby'                  => 'term_id',
						'taxonomy'                 => 'property-category',
						);
					$a=1;
					$categories = get_categories( $args );
					foreach ( $categories as $category ) {
					  $name = $category->name; 
					  $slug = $category->slug;?>
					  
                    <li role="presentation" class="<?php if($a==1){ echo 'active';} ?>"><a href="#<?php echo $slug ?>" aria-controls="profile" role="tab" data-toggle="tab"><?php echo $name; ?></a></li>

					<?php $a++; } ?>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
					<?php 
					$args = array(
						'type'                     => 'property',
						'orderby'                  => 'term_id',
						'taxonomy'                 => 'property-category',
						);
					$a = 1;
					$categories = get_categories( $args );
					foreach ( $categories as $category ){
						$slug = $category->slug;
						$name = $category->name;?>
                    <div role="tabpanel" class="tab-pane <?php if($a==1){ echo 'active'; }?>" id="<?php echo $slug; ?>">
					<div class="full-box"><?php  
					if($slug == 'off_market_home'){?>
						<div class="offmarket-img">
							<img src="<?php echo esc_url(get_template_directory_uri());?>/images/offmarket.jpg" alt="">
						</div> 
						<script>
							jQuery( ".offmarket-img" ).click(function(){
								<?php if ( is_user_logged_in() ) { ?> 
								
									//alert('aaaaa');
									window.location="http://glynisaustin.stagingdevsite.com/dev/property-category/off_market_home/"; 
								 <?php } else { 
									?>
									jQuery('#registerModal').modal()                      
									jQuery('#registerModal').modal({ keyboard: false })   
									jQuery('#registerModal').modal('show')   
									<?php
								 } 
								 ?>
							});
						</script>
					<?php  }
					else 
					{?>
                        <div id="open">
						<?php for( $i=0; $i<7; $i++) 
						{ $day = date('l',time()+86400*$i); 
						if(($day == "Wednesday") || ($day == "Thursday") || ($day == "Saturday")) {
									if(($slug != 'recent_sales') && ($slug != 'new_listing')){ ?>
										<div class="item">
                                            <a href="#" class="box1">
                                                <h3><?php echo date('l',time()+86400*$i); ?></h3>
                                                <h2><?php echo date('j',time()+86400*$i); ?></h2>
                                                <h4><?php echo date('F',time()+86400*$i); ?></h4>
                                            </a>
										</div> 
										
								  <?php  }
								 
									$posts=get_posts(array(
									   'showposts' => -1,
									   'post_type' => 'property',
									   'tax_query' => array(
										   array(
										   'taxonomy' => 'property-category',
										   'field' => 'name',
										   'terms' => array($name))
									   ),
									   'orderby' => 'title',
									   'order' => 'DESC')
									);
									$z=0;
									foreach($posts as $post)
									{ 
											$days=array();
											$days = get_field('days_for_visit',$post1->ID); 
											$no =count($days);
											
											if(gettype($days) == 'string')
											{
												
											if($day == get_field('days_for_visit',$post->ID)){
											?>
											  <div class="item">
													<a href="<?php the_permalink(); ?>" class="box2">
														<div class="list_img">
														<?php $newpost = $post->ID;
														 $image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id( $newpost ),'news_tile' );
															$url = $image_attributes[0];
															?>
															<img src="<?php echo $url; ?>">
															<?php if($slug == 'recent_sales'){
																echo '<h2 class="sold">SOLD</h2>';
															} ?>
														</div>
														<div class="inner_box">
															<div class="pad">
																<h2><?php the_title(); ?></h2>
																<h5><?php echo get_field('sub_title',$post->ID); ?></h5>
																<p><?php echo get_field('days_for_visit',$post->ID); ?> <?php echo date(' j, F',time()+86400*$i); ?></p>
																<p><?php echo get_field('time_for_visit',$post->ID); ?></p>
															</div>
															<div class="all_detail">
																<div class="pad">
																	<ul>
																		<li><?php echo get_field('number_of_bedroom',$post->ID); ?><i class="fa fa-bed" aria-hidden="true"></i></li>
																		<li><?php echo get_field('number_of_washroom',$post->ID); ?><img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
																		<li><?php echo get_field('parking_capacity',$post->ID); ?><i class="fa fa-car" aria-hidden="true"></i></li>
																	</ul>
																	<div class="price">
																		<label>price :</label><?php if($slug != 'upcoming_auction'){ echo get_field('property_price',$post->ID);} else
																			{ echo get_field('property_price_auction',$post->ID);}																?>
																	</div>
																</div>
															</div>
														</div>
													</a>
											   </div>
											<?php  
											} } else{ 
												for($j=0;$j<$no;$j++){
												if($day == $days[$j]){?>
													<div class="item">
													<a href="<?php the_permalink(); ?>" class="box2">
														<div class="list_img">
														<?php $newpost = $post->ID;
														 $image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id( $newpost ),'news_tile' );
															$url = $image_attributes[0];
															?>
															<img src="<?php echo $url; ?>">
															<?php if($slug == 'recent_sales'){
																echo '<h2 class="sold">SOLD</h2>';
															} ?>
														</div>
														<div class="inner_box">
															<div class="pad">
																<h2><?php the_title(); ?></h2>
																<h5><?php echo get_field('sub_title',$post->ID); ?></h5>
																<p><?php echo $days[$j]; ?> <?php echo date(' j, F',time()+86400*$i); ?></p>
																<p><?php echo get_field('time_for_visit',$post->ID); ?></p>
															</div>
															<div class="all_detail">
																<div class="pad">
																	<ul>
																		<li><?php echo get_field('number_of_bedroom',$post->ID); ?><i class="fa fa-bed" aria-hidden="true"></i></li>
																		<li><?php echo get_field('number_of_washroom',$post->ID); ?><img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
																		<li><?php echo get_field('parking_capacity',$post->ID); ?><i class="fa fa-car" aria-hidden="true"></i></li>
																	</ul>
																	<div class="price">
																		<label>price :</label><?php if($slug != 'upcoming_auction'){ echo get_field('property_price',$post->ID);} else
																			{ echo get_field('property_price_auction',$post->ID);}																?>
																	</div>
																</div>
															</div>
														</div>
													</a>
											   </div>

											<?php } } }
									$z++;}
						} } ?>
								</div>
				<?php } ?>
						</div>
                        <a class="view_all_btn" href="<?php echo get_category_link( $category->term_id )?>">view all <?php if($slug == 'open_times'){ echo "open times";} if($slug == 'new_listing'){ echo "listing";} if($slug == 'off_market_home'){ echo "off market";} if($slug == 'recent_sales'){ echo "sales";} if($slug == 'upcoming_auction'){ echo "upcoming auction";}?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
					<?php $a++; } ?>
            </div>

        </div>
		</div>
    </section>
    <section class="slider_prop">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
		 <?php $posts=get_posts(array(
			   'showposts' => 3,
			   'post_type' => 'property',
			   'orderby' => 'rand',
			   'order' => 'DESC')
			);
			$a=1;
			foreach($posts as $post) {
			 $image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id( $newpost ),'feature-slider' );
													$url = $image_attributes[0];?>
                <div class="item <?php if($a==1 ){ echo 'active';} ?>" style="background:url(<?php echo $url; ?>);">
				<?php $newpost = $post->ID;
						?>						
                   
                    <div class="info">
                        <div class="container">
						<?php $id = get_field('community',$post->ID); 
							$term = get_term( $id ,'property-category' );						?>
                            <h2><?php the_title(); ?><?php echo " , ". $term->name; ?></h2>
                            <a href="<?php the_permalink(); ?>">View Property</a>
                        </div>
                    </div>
                </div>
			<?php $a++; } ?> 
            </div>

            <!-- Controls -->

            <div class="cntrls">

                <a data-slide="prev" role="button" href="#carousel-example-generic" class="left carousel-control">


                </a>
                <a data-slide="next" role="button" href="#carousel-example-generic" class="right carousel-control">

                </a>
            </div>
        </div>
    </section>
    <section class="news_section">
        <div class="container">
            <h2 class="title">latest local news</h2>
            <div id="news">

                    
						<?php
					global $post;
					$type = 'news';
					$args=array(
					  'post_type' => $type,
					  'post_status' => 'publish',
					  'order'      => 'DESC',
					  'posts_per_page' =>8
					  );
					$my_query = new WP_Query($args);
					  while ($my_query->have_posts()) : $my_query->the_post(); ?>
						
                            <div class="item">
                                <div class="news_box">
                                    <a class="b_img" href="<?php the_permalink(); ?>">
									<?php $newpost = $my_query->ID;
							 $image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id( $newpost ),'news_tile' );
								$url = $image_attributes[0];
								?>
                                        <img src="<?php echo $url; ?>" >
										
										<?php //the_post_thumbnail('full'); ?>
                                    </a>
                                    <div class="n_inner">
                                        <a class="b_ttl" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        <span>Posted on <?php echo get_the_date('F j, Y'); ?></span>
                                        <p><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 100); ?></p>
                                    </div>
                                </div>
							</div>
					<?php endwhile;
					wp_reset_query();?>		
            </div>
        </div>
    </section>
    <section class="get_in_touch">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="details">
                        <h2>TAKE ADVANTAGE OF OUR LOCAL KNOWLEDGE</h2>
                        <a href="<?php echo get_site_url(); ?>/contact">GET IN TOUCH <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
 

 
<?php get_footer(); ?>