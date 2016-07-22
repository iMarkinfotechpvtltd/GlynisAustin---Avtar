<?php 
// Template Name: carrer
get_header();
 ?>
 <?php	$image=get_post_meta(63,"banner_image",true);
$thumb = wp_get_attachment_image_src($image, 'full' );
?>
<section class="banner inner_banner" style="background: url(<?php echo $url = $thumb['0'];?>);">
        <div class="headline">
            <h2>career</h2>
        </div>
    </section>
    <section class="carrier">
        <div class="container">
            <div class="left_section">
                <div class="in_left_sec">
                    <h3><?php echo get_field('below_banner_section_left_title',63); ?></h3>
                    <p><?php echo get_field('below_banner_section_left_content',63); ?></p>
                </div>
            </div>
            <div class="right_section">
                <div class="in_right_sec">
                    <div class="cv_box">
                        <?php echo get_field('send_resume',63); ?>
						<a href="mailto: saler@glynisaustin.com">saler@glynisaustin.com</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carrier_opportunity">

            <div class="container">


                <div class="main_sec">
                    <div class="mid_box">
                        <h5>careers</h5>
                        <h6>Oppurtunity</h6>
                    </div>
                    <div class="first">
                        <div class="img_o"></div>
                    </div>
                    <div class="second">
                        <div class="form_info1">
                            <h2>Get in Touch</h2>
                            <div class="form_cntct1">
                                <?php echo do_shortcode('[contact-form-7 id="59" title="get in touch"]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
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