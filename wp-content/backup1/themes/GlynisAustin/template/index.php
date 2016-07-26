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
                    <a href="#" class="">
                        <p>Seller
                            <br>Guides</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <p>
                            Communities
                        </p>
                    </a>
                </li>
                <li>
                    <a href="#">

                        <p>Buyer
                            <br>Guides</p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="tagline">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h2 class="pull-left">why choose glynis austin properties?</h2>
                        <a href="<?php echo get_field('why_choose',6); ?>" class="pull-right">click here <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
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
                    <a href="#">find out  more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
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
    <section class="property_week">
        <div class="container">
            <h2 class="title">This Week In Property</h2>
            <div class="property_tab">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#Times" aria-controls="profile" role="tab" data-toggle="tab">Open Times</a></li>
                    <li role="presentation"><a href="#Listings" aria-controls="home" role="tab" data-toggle="tab">New Listings</a></li>

                    <li role="presentation"><a href="#Auctions" aria-controls="messages" role="tab" data-toggle="tab">Upcoming Auctions </a></li>
                    <li role="presentation"><a href="#Sales" aria-controls="sales" role="tab" data-toggle="tab">Recent Sales</a></li>
                    <li role="presentation"><a href="#Homes" aria-controls="settings" role="tab" data-toggle="tab">Off-Market Homes</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane active" id="Times">
                        <div id="open">
                            <div class="item">
                                <div class="full-box">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="#" class="box1">
                                                <h3>monday</h3>
                                                <h2>25</h2>
                                                <h4>May</h4>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                            <div class="item">
                                <div class="full-box">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="#" class="box1">
                                                <h3>monday</h3>
                                                <h2>25</h2>
                                                <h4>May</h4>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                            <div class="item">
                                <div class="full-box">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="#" class="box1">
                                                <h3>monday</h3>
                                                <h2>25</h2>
                                                <h4>May</h4>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                        <a class="view_all_btn" href="#">view all opening times <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Listings">
                        <div id="property">
                            <div class="item">
                                <div class="full-box">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                            <div class="item">
                                <div class="full-box">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                            <div class="item">
                                <div class="full-box">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                        <a class="view_all_btn" href="#">view all listings<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Auctions">
                        <div id="auct">
                            <div class="item">
                                <div class="full-box">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="#" class="box1">
                                                <h3>monday</h3>
                                                <h2>25</h2>
                                                <h4>May</h4>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                            <div class="item">
                                <div class="full-box">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="#" class="box1">
                                                <h3>monday</h3>
                                                <h2>25</h2>
                                                <h4>May</h4>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                            <div class="item">
                                <div class="full-box">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="#" class="box1">
                                                <h3>monday</h3>
                                                <h2>25</h2>
                                                <h4>May</h4>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                        <a class="view_all_btn" href="#">VIEW ALL UPCOMING AUCTIONS <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Sales">
                        <div id="recentsale">
                            <div class="item">
                                <div class="full-box">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                            <div class="item">
                                <div class="full-box">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                                            <a href="#" class="box2">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                            <div class="item">
                                <div class="full-box">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                                            <a href="#" class="box2">
                                                <div class="list_img">
                                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                                <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
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
                        <a class="view_all_btn" href="#">VIEW ALL sales<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Homes">
                        <div class="full-box">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="box1">
                                        <h3>monday</h3>
                                        <h2>25</h2>
                                        <h4>May</h4>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="box2">
                                        <div class="list_img">
                                            <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                        <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                        <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                        <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
                                                    </ul>
                                                    <div class="price">
                                                        <label>price</label>1,20,000,000
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="box2">
                                        <div class="list_img">
                                            <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                        <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                        <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                        <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
                                                    </ul>
                                                    <div class="price">
                                                        <label>price</label>1,20,000,000
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="box2">
                                        <div class="list_img">
                                            <img src="<?php echo esc_url(get_template_directory_uri());?>/images/listing_img1.jpg">
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
                                                        <li>3<i class="fa fa-bed" aria-hidden="true"></i></li>
                                                        <li>2<img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                        <li>2<i class="fa fa-car" aria-hidden="true"></i></li>
                                                    </ul>
                                                    <div class="price">
                                                        <label>price</label>1,20,000,000
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="slider_prop">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/prop_img1.jpg" alt="">
                    <div class="info">
                        <div class="container">
                            <h2>10 Example Street, Auchenflower</h2>
                            <a href="#">View Property</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/prop_img1.jpg" alt="">
                    <div class="info">
                        <div class="container">
                            <h2>11 Example Street, Auchenflower</h2>
                            <a href="#">View Property</a>
                        </div>
                    </div>
                </div>
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