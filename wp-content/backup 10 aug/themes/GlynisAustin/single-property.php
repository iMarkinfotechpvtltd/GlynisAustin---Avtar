<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); 

function get_numerics ($str) 
{
	preg_match_all('/\d+/', $str, $matches);
	return $matches[0];
}
$property_id = $post->ID;
$post1 = get_post($property_id);

$tax = get_post_taxonomies( $post->ID );
$name1= wp_get_post_terms($post->ID, $tax ,  array("fields" => "names")); 
$cata_name = $name1[0];?>
<section class="banner slider_prop_page" style="">
        <section class="slider_prop">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
			<?php 
			$one = get_post_meta($post->ID,'slider_images',true); 
			$arr=get_numerics($one); 
			
			$a=1;
			 foreach($arr as $val)
			 {
				 $small_image_url = wp_get_attachment_image_src($val, 'full'); ?>
				 <?php if($small_image_url != "")
				 {
					?>
					
				<div class="item <?php if($a==1){ echo 'active'; } ?>" style="background: url(<?php echo $small_image_url[0]; ?>); background-size:cover;">

					<div class="info1">
						<div class="container">
							<?php $id = get_field('community',$post->ID); 
							$term = get_term( $id ,'property-category' );?>
                            <h2><?php the_title(); ?><?php echo " , ". $term->name; ?></h2>

						</div>
					</div>
				</div>
               
			<?php $a++; } } ?>
                    
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
    </section>
    <section class="individual_prop">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="section_left">
                        <h2><?php the_title(); ?></h2>
                        <p><?php while (have_posts()) : the_post(); 
								the_content(); 
								endwhile; ?>	</p>
                        <h3>features</h3>
                       
							<?php echo get_field('feature_of_property',$post_ID); ?>
                       
                        <h3>important info</h3>
                        <div class="info_imp">
                            <div class="lft_div">
                                land -
                            </div>
                            <div class="rgt_div">
							<?php $id = get_field('community',$post->ID); 
							$term = get_term( $id ,'property-category' );?>
                                <?php echo $term->name; ?>
                            </div>
                            <div class="lft_div">
                                rates -
                            </div>
                            <div class="rgt_div">
                                <?php if($name1[0] != 'Upcoming Auction'){ echo '$'.get_field('property_price',$post->ID); } else
								{ echo get_field('property_price_auction',$post->ID); }										
								?>
                            </div>
                            <div class="lft_div">
                                BODY CORPORATE -
                            </div>
                            <div class="rgt_div">
                                Lorem Ipsum
                            </div>
                            <div class="lft_div">
                                RENTAL APPRAISAL -
                            </div>
                            <div class="rgt_div">
                                Lorem Ipsum
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="section_right">
                        <ul class="avlble_cat">
                            <li><?php echo get_field('number_of_bedroom',$post->ID); ?><i aria-hidden="true" class="fa fa-bed"></i></li>
                            <li><?php echo get_field('number_of_washroom',$post->ID); ?><img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                            <li><?php echo get_field('parking_capacity',$post->ID); ?><i aria-hidden="true" class="fa fa-car"></i></li>
                        </ul>
                        <div class="adrs_div">
                            <h3><?php if($name1[0] == 'Upcoming Auction'){ echo "Auction";} else if($name1[0] == 'Recent Sales'){ echo "Sold";} else { echo "For Sale";}?></h3>
                            <a class="tltp" href="#" data-toggle="tooltip" data-placement="left" title="Add To Calender">
                                <p>Address :</p>
                                <p><?php echo get_field('address',$post->ID); ?></p>
                            </a>
                            <div class="tooltip left" role="tooltip">
                                <div class="tooltip-arrow"></div>
                                <div class="tooltip-inner">
                                    Some tooltip text!
                                </div>
                            </div>
                        </div>
						<div class="inspection_div">
                            <h3>inspections</h3>
						<?php
					$days=array();
					$days = get_field('days_for_visit',$post1->ID); 
					$no =count($days);
					if($no != 1)
					{
					for($h=0;$h<$no;$h++)
					{ for( $i=0; $i<7; $i++) 
						{ $day = date('l',time()+86400*$i); 
						if($day == $days[$h]) { ?>
								<a class="tltp" href="#" data-toggle="tooltip" data-placement="left" title="Add To Calender">
									<div class="list_inspection">
										<p><?php echo $days[$h] ?> <?php echo date(' j, F',time()+86400*$i); ?></p>
										<p><?php echo get_field('time_for_visit',$post->ID); ?></p>
									</div>
								</a>
								<div class="tooltip left" role="tooltip">
									<div class="tooltip-arrow"></div>
									<div class="tooltip-inner">
										Some tooltip text!
									</div>
								</div>
							                           
                        
							<?php } } } }
							else
							{
							 for( $i=0; $i<7; $i++) 
						{ $day = date('l',time()+86400*$i); 
						if($day == $days) { ?>
								<a class="tltp" href="#" data-toggle="tooltip" data-placement="left" title="Add To Calender">
									<div class="list_inspection">
										<p><?php echo $days ?> <?php echo date(' j, F',time()+86400*$i); ?></p>
										<p><?php echo get_field('time_for_visit',$post->ID); ?></p>
									</div>
								</a>
								<div class="tooltip left" role="tooltip">
									<div class="tooltip-arrow"></div>
									<div class="tooltip-inner">
										Some tooltip text!
									</div>
								</div>
							                           
                        </div>
						<?php } } }?>
                        <h3>download</h3>
                        <ul class="dwnld_cntnt">
                            <li>
							<?php $contact = get_field('contact_file',$post->ID); ?>
                                <!--<a href="#" onclick="download(<?php echo $contact['url']; ?>);" > -->
								<a href="javascript:void(0);" onclick="filedownload('<?php echo $contact['url']; ?>');">contact</a>
                            </li>
                            <li>
							<?php  $map = get_field('map_file',$post->ID); ?>
                                <a href="javascript:void(0);" onclick="filedownload('<?php echo $map['url']; ?>');" >map</a>
                            </li>
                            <li>
							<?php $broc = get_field('brochure',$post->ID); ?>
                                <a href="javascript:void(0);" onclick="filedownload('<?php echo $broc['url']; ?>');" >brochure</a>
                            </li>
                            <li>
							<?php $plan = get_field('floor_plan',$post->ID); ?>
                                <a href="javascript:void(0);" onclick="filedownload('<?php echo $plan['url']; ?>');" >floor plan</a>
                            </li>	
                        </ul>
						<script>
						function filedownload(id) {
							<?php if ( is_user_logged_in() ) { ?> 
							window.open(id,'_blank');
							//alert(id);
							<?php } else { 
								?>
								jQuery('#loginModal').modal()                      
								jQuery('#loginModal').modal({ keyboard: false })   
								jQuery('#loginModal').modal('show')   
								<?php
							 } ?>
						}
						</script>
                        <div class="share_connect">
                            <h3>share</h3>
                            <ul>
                                <li>
                                    <a href="#"><i aria-hidden="true" class="fa fa-facebook"></i></a>

                                </li>
                                <li>
                                    <a href="#"><i aria-hidden="true" class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i aria-hidden="true" class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i aria-hidden="true" class="fa fa-pinterest-p"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		</div>
		<?php $id = get_field('assosiatewith',$post_ID); 
						$member = get_post($id); 
						?>
        <div class="agent_group">
            <div class="agent">
			<?php $newpost = $member->ID;
							 $image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id( $newpost ),'' );
								$url = $image_attributes[0];
						?>
                <div class="img_a" style=" background: url(<?php echo $url; ?>) no-repeat scroll 0 0;">
                    <div class="agent_box">
                        <h2>agent</h2>
                        
						
						<p><?php echo get_the_title($id); ?></p>
                        <a class="tel" href="tel:<?php echo get_field('phone_number',$member->ID); ?>"><?php echo get_field('phone_number',$member->ID); ?></a>
                        <a class="ml" href="mailto:<?php echo get_field('email',$member->ID); ?>"><?php echo get_field('email',$member->ID); ?></a>
                        <a class="clk" href="<?php the_permalink($id); ?>">CLICK FOR MORE PROPERTIES <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
</a>
                    </div>
                </div>
            </div>
			
            <div class="map_loc" id="google-maps">
                <h2>location</h2>
                <iframe src="<?php echo (get_field('map_source_link',$post1->ID)); ?>"></iframe>
            </div>
        </div>
    </section>
    <section class="get_in_touch">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="details">
                        <h2>Want more information or ready to inspect?</h2>
                        <a href="<?php echo get_site_url(); ?>/contact">enquire now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="community_slide_div">
        <div class="container">
            <div class="com_left">
                <div class="in_left_sec">
                    <h3>the community</h3>
                    <h4>why live in <?php echo $term->name; ?></h4>
                    <p><?php echo $term->description; ?></p>
                    <a href="#">click for more</a>
                </div>
            </div>
            <div class="slide_right">
                <h2>WHAT LOCALS SAY</h2>
                <div class="in_right_slide">
                    <div id="client_slider">
					<?php global $post;
					$type = 'testimonial';
					$args=array(
					  'post_type' => $type,
					  'post_status' => 'publish',
					  'order'      => 'ASC',
					  'posts_per_page' =>-1
					  );
					$my_query = new WP_Query($args);
					  while ($my_query->have_posts()) : $my_query->the_post();
					  $flag = false;
							$cat = $term->term_id;
						  $tcat = get_field('testimonial_of',$my_query->ID);
							if($cat == $tcat){
								$flag = true;
						?>
                        <div class="item">
                            <p><?php the_content(); ?></p>

                            <h3><?php the_title(); ?></h3>
                            <h4><?php echo get_field('sub_title',$my_query->ID); ?></h4>

                        </div>
							<?php } endwhile;
								if($flag == false)
								{
									echo '<div class="na"><h4>Testimonial Not Available.</h4></div>'; 
								}?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="other_prop">
        <h2 class="title">other properties to love</h2>
        <div class="container">
            <div class="full-box">
                <div class="row">
				<?php global $post;
					$type = 'property';
					$args=array(
					  'post_type' => $type,
					  'post_status' => 'publish',
					  'orderby' => 'rand',
					  'posts_per_page' =>4
					  );
					$my_query = new WP_Query($args);
					while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <div class="col-md-3">
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
					<?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
      
<?php get_footer(); ?>
