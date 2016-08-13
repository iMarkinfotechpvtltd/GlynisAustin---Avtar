<?php 
// Template Name: Testinomial
get_header();
 ?>
 <?php	$image=get_post_meta(33,"banner_image",true);
$thumb = wp_get_attachment_image_src($image, 'full' );
?>
 <section class="banner inner_banner" style="background: url(<?php echo $url = $thumb['0'];?>);">
        <div class="headline">
            <h2>testimonial</h2>
        </div>

    </section>
    <h2 class="title testimonial_page_ttl">people saying</h2>
    <section class=" video_banner">

        <!--banner_section start-->

        <div id="amazingslider-wrapper-1" style="">
            <div id="amazingslider-1" style="">
                <ul class="amazingslider-slides">
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
					  while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <li>
                        <iframe width="1349" height="465" src="<?php the_field('video_source',$my_query->ID);?>?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=0"></iframe>
                    </li>
					<?php endwhile; wp_reset_query(); ?>
                </ul>
            </div>
        </div>
    </section>
    <section class="testimonial_main">
        <div class="container">

            <div class="testimonial_heading">
                <h3>What <span>are people saying?</span></h3>
            </div>
            <div class="test_list">
			<?php
				global $post;
				$type = 'testimonial';
				$args=array(
				  'post_type' => $type,
				  'post_status' => 'publish',
				  'order'      => 'ASC',
				  'post per page' => 3
				  );
				$my_query = new WP_Query($args);
				  while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <div class="testi_sec1">
                    <div class="testi_sec_lft">
                        <img alt="testi1" src="<?php echo esc_url(get_template_directory_uri());?>/images/default.png">

                    </div>
                    <div class="testi_sec_rght">
                        <p><?php the_content(); ?></p>
                        <div class="testi_author">
                            <h4><?php the_title(); ?></h4>
                            <span><?php echo get_field('sub_title',$my_query->ID); ?></span>
                        </div>
                    </div>
                </div>
				<?php endwhile; wp_reset_query(); ?>
				
				
                <nav class="blogPagination">
                    <ul class="pagination pull-right"> </ul>
                </nav>



            </div>
            <!--test_list end-->
            <div class="cmpntry_btn">
                <a title="" href="#">see more</a>
            </div>
        </div>

    </section>


 
 
 
 
 
 
 
 
 
 
 
<?php get_footer(); ?>