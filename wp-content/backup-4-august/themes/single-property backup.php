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
?>
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
                        <ul class="ftr">
							<?php echo get_field('feature_of_property',$post_ID); ?>
                        </ul>
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
                                $<?php echo get_field('property_price',$post_ID); ?>
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
                            <li>3<i aria-hidden="true" class="fa fa-bed"></i></li>
                            <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                            <li>2<i aria-hidden="true" class="fa fa-car"></i></li>
                        </ul>
                        <div class="adrs_div">
                            <h3>auction</h3>
                            <a class="tltp" href="#" data-toggle="tooltip" data-placement="left" title="Add To Calender">
                                <p>Address</p>
                                <p>25 October Ownwards</p>
                                <p>10:00am to 10:30am</p>
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
                            <a class="tltp" href="#" data-toggle="tooltip" data-placement="left" title="Add To Calender">
                                <div class="list_inspection">
                                    <p>Saturday 1 October </p>
                                    <p>10:00am to 10:30am</p>
                                </div>
                            </a>
                            <div class="tooltip left" role="tooltip">
                                <div class="tooltip-arrow"></div>
                                <div class="tooltip-inner">
                                    Some tooltip text!
                                </div>
                            </div>
                            <a class="tltp" href="#" data-toggle="tooltip" data-placement="left" title="Add To Calender">
                                <div class="list_inspection">
                                    <p>Wednesday 4 October </p>
                                    <p>10:00am to 10:30am</p>
                                </div>
                            </a>
                            <div class="tooltip left" role="tooltip">
                                <div class="tooltip-arrow"></div>
                                <div class="tooltip-inner">
                                    Some tooltip text!
                                </div>
                            </div>
                        </div>
                        <h3>download</h3>
                        <ul class="dwnld_cntnt">
                            <li>
                                <a href="#">contact</a>
                            </li>
                            <li>
                                <a href="#">map</a>
                            </li>
                            <li>
                                <a href="#">brochure</a>
                            </li>
                            <li>
                                <a href="#">brochure</a>
                            </li>
                            <li>
                                <a href="#">floor plan</a>
                            </li>
                            <li>
                                <a href="#">floor plan</a>
                            </li>
                        </ul>
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
        <div class="agent_group">
            <div class="agent">
                <div class="img_a">
                    <div class="agent_box">
                        <h2>agent</h2>
                        <p>glynis austin</p>
                        <a class="tel" href="tel: 0403333013">0403 333 013</a>
                        <a class="ml" href="mail to:glynis@glynisaustin.com">glynis@glynisaustin.com</a>
                        <a class="clk" href="#">CLICK FOR MORE PROPERTIES <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
</a>
                    </div>
                </div>
            </div>
            <div class="map_loc">
                <h2>location</h2>
                <iframe src="<?php echo get_field('map_source_link',$post_ID); ?>"></iframe>
            </div>
        </div>
    </section>
    <section class="get_in_touch">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="details">
                        <h2>Want more information or ready to inspect?</h2>
                        <a href="#">enquire now</a>
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
                    <h4>why live in paddington</h4>
                    <p>Glynis Austin Properties is a real estate office working out of Brisbane, Australia. Glynis Austin Properties offers experience, knowledge, service and results to the Inner West Brisbane real estate marketplace. Selling quality property within Brisbane, Glynis Austin Properties is an award winning agency successfully defying the difficult global Real Estate market to produce real results and unbeaten service to clients. </p>
                    <a href="#">click for more</a>
                </div>
            </div>
            <div class="slide_right">
                <h2>WHAT LOCALS SAY</h2>
                <div class="in_right_slide">
                    <div id="client_slider">
                        <div class="item active">
                            <p>Smart home devices have traditionally been limited to automated blinds, A/V and media rooms, air conditioning, TVs, and lighting. </p>

                            <h3>red hill</h3>
                            <h4>Sue and Paul</h4>

                        </div>
                        <div class="item">
                            <p>Smart home devices have traditionally been limited to automated blinds, A/V and media rooms, air conditioning, TVs, and lighting. </p>

                            <h3>red hill</h3>
                            <h4>Sue and Paul</h4>

                        </div>
                        <div class="item">
                            <p>Smart home devices have traditionally been limited to automated blinds, A/V and media rooms, air conditioning, TVs, and lighting. </p>
                            <h3>red hill</h3>
                            <h4>Sue and Paul</h4>

                        </div>
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
                    <div class="col-md-3">
                        <a class="box2" href="#">
                            <div class="list_img">
                                <img src="images/listing_img1.jpg">
                            </div>
                            <div class="inner_box">
                                <div class="pad">
                                    <h2>Lorem Ipsum</h2>
                                    <h5>lorem ipsum</h5>
                                    <p>Monday 25, April</p>
                                    <p>10:00am - 11:00am</p>
                                </div>
                                <div class="all_detail">
                                    <div class="pad">
                                        <ul>
                                            <li>3<i aria-hidden="true" class="fa fa-bed"></i></li>
                                            <li>2<img src="images/bath_icon.png"></li>
                                            <li>2<i aria-hidden="true" class="fa fa-car"></i></li>
                                        </ul>
                                        <div class="price">
                                            <label>price</label>1,20,000,000
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a class="box2" href="#">
                            <div class="list_img">
                                <img src="images/news_img2.jpg">
                            </div>
                            <div class="inner_box">
                                <div class="pad">
                                    <h2>Lorem Ipsum</h2>
                                    <h5>lorem ipsum</h5>
                                    <p>Monday 25, April</p>
                                    <p>10:00am - 11:00am</p>
                                </div>
                                <div class="all_detail">
                                    <div class="pad">
                                        <ul>
                                            <li>3<i aria-hidden="true" class="fa fa-bed"></i></li>
                                            <li>2<img src="images/bath_icon.png"></li>
                                            <li>2<i aria-hidden="true" class="fa fa-car"></i></li>
                                        </ul>
                                        <div class="price">
                                            <label>price</label>1,20,000,000
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a class="box2" href="#">
                            <div class="list_img">
                                <img src="images/news_img3.jpg">
                            </div>
                            <div class="inner_box">
                                <div class="pad">
                                    <h2>Lorem Ipsum</h2>
                                    <h5>lorem ipsum</h5>
                                    <p>Monday 25, April</p>
                                    <p>10:00am - 11:00am</p>
                                </div>
                                <div class="all_detail">
                                    <div class="pad">
                                        <ul>
                                            <li>3<i aria-hidden="true" class="fa fa-bed"></i></li>
                                            <li>2<img src="images/bath_icon.png"></li>
                                            <li>2<i aria-hidden="true" class="fa fa-car"></i></li>
                                        </ul>
                                        <div class="price">
                                            <label>price</label>1,20,000,000
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a class="box2" href="#">
                            <div class="list_img">
                                <img src="images/news_img4.jpg">
                            </div>
                            <div class="inner_box">
                                <div class="pad">
                                    <h2>Lorem Ipsum</h2>
                                    <h5>lorem ipsum</h5>
                                    <p>Monday 25, April</p>
                                    <p>10:00am - 11:00am</p>
                                </div>
                                <div class="all_detail">
                                    <div class="pad">
                                        <ul>
                                            <li>3<i aria-hidden="true" class="fa fa-bed"></i></li>
                                            <li>2<img src="images/bath_icon.png"></li>
                                            <li>2<i aria-hidden="true" class="fa fa-car"></i></li>
                                        </ul>
                                        <div class="price">
                                            <label>price</label>1,20,000,000
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
      
<?php get_footer(); ?>
