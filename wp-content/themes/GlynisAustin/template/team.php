<?php 
// Template Name: team
get_header();
 ?>
    <?php	$image=get_post_meta(86,"banner_image",true);
$thumb = wp_get_attachment_image_src($image, 'full' );
?>
        <section class="banner inner_banner" style="background: url(<?php echo $url = $thumb['0'];?>);">
            <div class="headline">
                <h2>the team</h2>
            </div>
        </section>
        <section class="tm_section">
            <div class="container">
                <div class="member_view">
                    <div class="row">
                        <?php
							$type = 'member';
							$args=array(
							  'post_type' => $type,
							  'post_status' => 'publish',
							  'order'      => 'ASC',
							  'posts_per_page' =>-1
							  );
							$my_query = new WP_Query($args);
							if( $my_query->have_posts() ) {
							  while ($my_query->have_posts()) : $my_query->the_post(); ?>
                            <div class="col-md-3 col-sm-3">
                                <div class="m_box">
                                    <div>
                                        <?php $newpost = $my_query->ID;
								 $image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id( $newpost ),'team_member' );
									$url = $image_attributes[0];
									?>
                                            <a href="<?php the_permalink(); ?>">
												<img src="<?php echo $url; ?>">
											</a>
                                    </div>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                    <h3><?php echo get_field('designation',$my_query->ID); ?></h3>
                                </div>
                            </div>
                            <?php endwhile; } wp_reset_query(); ?>
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
                            <a href="<?php echo get_site_url() ?>/contact">GET IN TOUCH <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <?php get_footer(); ?>