<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

 <section class="banner inner_banner1" style="">
        <div class="container">
            <div class="full_div">
                <div class="row">
                    <div class="col-md-6">
                        <div class="men">
						<?php $newpost = $post->ID;
							 $image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id( $newpost ),'news_image' );
								$url = $image_attributes[0];
						?>
                            <img src="<?php echo $url; ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="connect_info_detail">
                            <h2><?php the_title(); ?></h2>
                           <?php while (have_posts()) : the_post();?>
							<p><?php the_content(); ?></p>
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

                        <li role="presentation" class="active"><a href="#c1" aria-controls="home" role="tab" data-toggle="tab">current listings</a></li>
                        <li role="presentation"><a href="#c2" aria-controls="profile" role="tab" data-toggle="tab">recent sales</a></li>
                        <li><a href="<?php echo get_site_url(); ?>/testimonial">testimonials</a></li>

                    </ul>
                </div>
            </div>
            <div class="container">

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="c1">
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
                    <div role="tabpanel" class="tab-pane" id="c2">
                        <div class="full-box">
                            <div class="row">
                                <div class="col-md-3">
                                    <a class="box2" href="#">
                                        <div class="list_img">
                                            <img src="images/listing_img1.jpg">
                                            <h2 class="sold">SOLD</h2>
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
                                            <h2 class="sold">SOLD</h2>
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
                                            <h2 class="sold">SOLD</h2>
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
                                            <h2 class="sold">SOLD</h2>
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

                </div>
            </div>

        </div>

    </section>


<?php get_footer(); ?>
