<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<?php	$image=get_post_meta(44,"banner_image",true);
$thumb = wp_get_attachment_image_src($image, 'full' );
?>
 <section class="banner inner_banner" style="background: url(<?php echo $url = $thumb['0'];?>);">
        <div class="headline">
            <h2>blog description</h2>
        </div>
    </section>
    <section class="blog_description">
        <div class="container">
            <h2 class="bd_ttl"><?php the_title(); ?></h2>
            <span><i class="fa fa-calendar" aria-hidden="true"></i>Posted on 18 April 2016</span>
			<?php $newpost = $post->ID;
							 $image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id( $newpost ),'news_image' );
								$url = $image_attributes[0];
						?>
            <img class="main_img" src="<?php echo $url;?>" height="423px" width="1140px">
			 <?php while (have_posts()) : the_post();?>
            <p><?php the_content(); ?></p>
			<?php endwhile; ?>
			
			<?php $status = get_field('comment_control',44); 
			if($status == "Show Comment Box"){?>
            <div class="comnt_post">
			
                <img src="<?php echo esc_url(get_template_directory_uri());?>/images/post_img.jpg">
            </div>
			<?php } ?>
            <div class="reading_more">
                <h2 class="title">INTERESTED IN READING MORE?</h2>
                <div class="row">
				<?php 
				global $post;
					$type = 'news';
					$args=array(
					  'post_type' => $type,
					  'post_status' => 'publish',
					  'orderby' => 'rand',
					  'posts_per_page' =>4
					  );
					$my_query = new WP_Query($args);
					while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <div class="col-md-3">
                        <div class="read_box">
                            <a class="view_hover" href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('full'); ?>
                                <div class="view_effect">
                                </div></a>
                            <a class="b_ttl" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <span>Posted on <?php echo get_the_date('F j, Y'); ?></span>
                        </div>
                    </div>
					<?php endwhile; wp_reset_query(); ?>
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
