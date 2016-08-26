<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header();
global $pid; 
/* 
$mempost = get_post($mem);
echo '<pre>';
print_r($mempost);
echo '</pre>'; */

?>
    <section class="banner inner_banner1 single_member" style="">
        <div class="container">
            <div class="full_div">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="men">
                            <?php $newpost = $post->ID;
							 $image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id( $newpost ),'news_image' );
								$url = $image_attributes[0];
						?>
                                <img src="<?php echo $url; ?>">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="connect_info_detail">
                            <h2><?php the_title(); $pid = get_the_id(); ?></h2>
                            <?php while (have_posts()) : the_post();?>
                                <p>
                                    <?php the_content(); ?>
                                </p>
                                <?php endwhile; ?>
                                    <div class="conct_i">
                                        <div class="ic">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                        </div>
                                        <p><span>Email: </span><a href="mailto:<?php echo get_field('email',$post->ID); ?>"><?php echo get_field('email',$post->ID); ?></a></p>
                                    </div>
                                    <div class="conct_i">
                                        <div class="ic">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                        </div>
                                        <p><span>Phone: </span><a href="tel:<?php echo get_field('phone_number',$post->ID); ?>"><?php echo get_field('phone_number',$post->ID); ?></a></p>
                                    </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="in_about">
        <div class="container">
            <h2 class="title">property listings</h2>
        </div>
        <div class="tab_about">

            <div class="inner_tabs">
                <div class="container">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">

                        <li role="presentation" class="active"><a href="#open_times" aria-controls="home" role="tab" data-toggle="tab">current listings</a></li>
                        <li role="presentation"><a href="#recent_sales" aria-controls="profile" role="tab" data-toggle="tab">recent sales</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/testimonial">testimonials</a></li>

                    </ul>
                </div>
            </div>
            <section class="property_week sngl_tab">
                <div class="container">
                    <div class="property_tab">
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
						$name = $category->name;
						$termid = $category->term_id;
					if(($slug == 'open_times') || ($slug == 'recent_sales')){?>
                                <div role="tabpanel" class="tab-pane <?php if($a==1){ echo 'active'; }?>" id="<?php echo $slug; ?>">
                                    <div class="full-box">
                                        <div class="row">
                                            <?php for( $i=0; $i<7; $i++) 
						{ $day = date('l',time()+86400*$i); 
						if(($day == "Wednesday") || ($day == "Thursday") || ($day == "Saturday")) {
									if($slug == 'open_times'){
										$posts=get_posts(array(
										   'showposts' => -1,
										   'post_type' => 'property',
										   'tax_query' => array(
											   array(
											   'taxonomy' => 'property-category',
											   'field' => 'term_id',
											   'terms' => array($termid,15))
										   ),
										   'orderby' => 'title',
										   'order' => 'DESC')
										);
									}
									else
									{
										$posts=get_posts(array(
									   'showposts' => -1,
									   'post_type' => 'property',
									   'tax_query' => array(
										   array(
										   'taxonomy' => 'property-category',
										   'field' => 'term_id',
										   'terms' => array($termid))
									   ),
									   'orderby' => 'title',
									   'order' => 'DESC')
									);
									}
									
									
									foreach($posts as $post)
									{ 	$postid = $post->ID;

											$mems = get_field('assosiatewith',$post->ID);
					 				 
				if($pid == $mems){  
					//echo '"'.$pid.'-'.$mems.'"';
				/* }
				else{ */		//echo "test";		
				              		 
											$post=get_post($postid);

											$days=array();
											$days = get_field('days_for_visit',$post->ID); 
											$no =count($days);
											//echo "ffafaf";
											//the_title();
											
				
				
											if(gettype($days) == 'string')
											{
												
												if($day == get_field('days_for_visit',$post->ID)){
												?>
                                                <div class="col-md-3 col-sm-3">
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
                                                                <p>
                                                                    <?php echo get_field('days_for_visit',$post->ID); ?>
                                                                        <?php echo date(' j, F',time()+86400*$i); ?>
                                                                </p>
                                                                <p>
                                                                    <?php echo get_field('time_for_visit',$post->ID); ?>
                                                                </p>
                                                            </div>
                                                            <div class="all_detail">
                                                                <div class="pad">
                                                                    <ul>
                                                                        <li>
                                                                            <?php echo get_field('number_of_bedroom',$post->ID); ?><i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                        <li>
                                                                            <?php echo get_field('number_of_washroom',$post->ID); ?><img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                        <li>
                                                                            <?php echo get_field('parking_capacity',$post->ID); ?><i class="fa fa-car" aria-hidden="true"></i></li>
                                                                    </ul>
                                                                    <div class="price">
                                                                        <label>price :</label>
                                                                        <?php if($slug != 'upcoming_auction'){ echo get_field('property_price',$post->ID);} else
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
                                                    <div class="col-md-3 col-sm-3">
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
                                                                    <h2><?php the_title();?></h2>
                                                                    <h5><?php echo get_field('sub_title',$post->ID); ?></h5>
                                                                    <p>
                                                                        <?php echo $days[$j]; ?>
                                                                            <?php echo date(' j, F',time()+86400*$i); ?>
                                                                    </p>
                                                                    <p>
                                                                        <?php echo get_field('time_for_visit',$post->ID); ?>
                                                                    </p>
                                                                </div>
                                                                <div class="all_detail">
                                                                    <div class="pad">
                                                                        <ul>
                                                                            <li>
                                                                                <?php echo get_field('number_of_bedroom',$post->ID); ?><i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                            <li>
                                                                                <?php echo get_field('number_of_washroom',$post->ID); ?><img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                            <li>
                                                                                <?php echo get_field('parking_capacity',$post->ID); ?><i class="fa fa-car" aria-hidden="true"></i></li>
                                                                        </ul>
                                                                        <div class="price">
                                                                            <label>price :</label>
                                                                            <?php if($slug != 'upcoming_auction'){ echo get_field('property_price',$post->ID);} else
																			{ echo get_field('property_price_auction',$post->ID);}																?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <?php } } 
											}
									} 
								}
							} 
						} ?>
                                        </div>
                                    </div>

                                </div>
                                <?php } $a++; } ?>
                        </div>

                    </div>
                </div>
            </section>
        </div>

    </section>


    <?php get_footer(); 
?>