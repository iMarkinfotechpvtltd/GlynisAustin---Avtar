<?php
include('../../../../wp-config.php');
?>
<?php
$display_count=2;

 $paged=$_POST['page_val1'];
 $category = $_POST['cat'];
					$posts=get_posts(array(
					   'showposts' => 4,
					   'paged'   => $paged,
					   'post_type' => 'property',
					   'tax_query' => array(
						   array(
						   'taxonomy' => 'property-category',
						   'field' => 'name',
						   'terms' => array($category))
					   ),
					   'orderby' => 'title',
					   'order' => 'DESC',
					   )
					);					
					foreach($posts as $post){ 
					
					  ?>
							<div class="col-md-3">
								<div class="item">
									<a href="<?php echo get_the_permalink(); ?>" class="box2">
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
                                                        <h5><?php echo get_field('sub_title',$post->ID); $post1= $post?></h5>
														<?php $member_id = get_field('assosiatewith',$post->ID); 
														
														$d=get_field('days_for_visit',$post1->ID);
																												
														//echo $type =gettype($d);
if($current_category == 'Off-Market Home'){
	$member = get_post($member_id);	
}
													?>
<p><?php if($current_category == 'Off-Market Home'){ echo 'Agent: '.$member->post_title; ?>
<p><?php echo 'M: '. get_field('phone_number',$member->ID); ?></p>
<p><a href="tel:<?php echo get_field('phone_number',$member->ID); ?>"><?php echo 'M: '. get_field('phone_number',$member->ID); ?></a></p>
<?php } else {
if(gettype($d) == 'array'){ echo $d[0]; } if(gettype($d) == 'string'){ echo $d; }  ?> 
<?php echo date(' j, F',time()+86400*$i); ?></p>
<p><?php echo get_field('time_for_visit',$post1->ID); } $member = null;?></p>
														
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
							</div>
					<?php	}

			?>
