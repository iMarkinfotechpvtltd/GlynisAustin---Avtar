<?php 
// Template Name: contact us
get_header();
 ?>
 <?php	$image=get_post_meta(52,"banner_image",true);
$thumb = wp_get_attachment_image_src($image, 'full' );
?>
<section class="banner inner_banner" style="background: url(<?php echo $url = $thumb['0'];?>);">
        <div class="headline">
            <h2></h2>
        </div>
    </section>
    <section class="contact_us">
        <div class="container">
            <div class="left_part1">
                <div class="inner_lft">
                    <h2>contact us</h2>
                    <p><?php the_field('contact_us_content',52); ?></p>
                    <div class="connecting">
                        <div class="bx_connection">
                            <div class="lt_part">
                                <p><i class="fa fa-paper-plane" aria-hidden="true"></i></p>
                                <a href="emailto:<?php the_field('email_address',52); ?>"><?php the_field('email_address',52); ?></a>
                            </div>
                            <div class="rt_part">
                                <p>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </p>
                                <p><?php the_field('address',52); ?></p>
                            </div>
                        </div>
                        <div class="bx_connection">
                            <div class="lt_part">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <p>Mob.:<a href="tel:<?php the_field('mobile_no',52); ?>"> <?php the_field('mobile_no',52); ?></a>
                                </p>
                            </div>
                            <div class="rt_part">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <p>Fax:<a href="#"><?php the_field('fax_no',52); ?></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right_part1">
                <div class="form_info">
                    <h2>Get in Touch</h2>
                    <div class="form_cntct">
                        <?php echo do_shortcode('[contact-form-7 id="59" title="get in touch"]'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="map_site" id="google-maps">
            <iframe src="<?php the_field('map_source',52); ?>" frameborder="0" style="border:0" scroll="no"  allowfullscreen></iframe>
        </div>
    </section>


  
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 <?php get_footer(); ?>