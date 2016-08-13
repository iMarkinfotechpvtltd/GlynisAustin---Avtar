<?php 
// Template Name: about Page
get_header();
 ?>
 <?php	$image=get_post_meta(86,"banner_image",true);
$thumb = wp_get_attachment_image_src($image, 'full' );
?>
 <section class="banner inner_banner" style="background: url(<?php echo $url = $thumb['0'];?>);">
        <div class="headline">
            <h2>our story</h2>
        </div>
    </section>
    <section class="about_section">
        <div class="container">
            <div class="about_txt">
                <?php echo get_field('story_content',86); ?>
            </div>
            <div class="awards">
                <ul>
                    <li>
                        <div class="awrd">
						<?php	$image=get_post_meta(86,"award_1",true);
							$thumb = wp_get_attachment_image_src($image, 'full' );
							?>
                            <img src="<?php echo $url = $thumb['0'];?>">
                        </div>
                        <p>Award-1</p>
                    </li>
                    <li>
                        <div class="awrd">
						<?php	$image=get_post_meta(86,"award_2",true);
							$thumb = wp_get_attachment_image_src($image, 'full' );
							?>
                            <img src="<?php echo $url = $thumb['0'];?>">
                        </div>
                        <p>Award-2</p>
                    </li>
                    <li>
                        <div class="awrd">
						<?php	$image=get_post_meta(86,"award_2",true);
							$thumb = wp_get_attachment_image_src($image, 'full' );
							?>
                            <img src="<?php echo $url = $thumb['0'];?>">
                        </div>
                        <p>Award-3</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="parallax_div">
            <div class="container">
                <div class="count_box">
                    <h3><?php echo get_field('properties_sold',86); ?></h3>
                    <span class="line_mid"></span>
                    <h6>Properties Sold</h6>
                </div>
                <div class="count_box">
                    <h3><?php echo get_field('happy_clients',86); ?></h3>
                    <span class="line_mid"></span>
                    <h6>Happy Clients</h6>
                </div>
                <div class="count_box">
                    <h3><?php echo get_field('years_of_experince',86); ?></h3>
                    <span class="line_mid"></span>
                    <h6>Years of Experince</h6>
                </div>
                <div class="count_box">
                    <h3><?php echo get_field('cups_of_coffee',86); ?></h3>
                    <span class="line_mid"></span>
                    <h6>Cups of Coffee</h6>
                </div>
            </div>
        </div>
        <div class="exprnc_div">
            <div class="container">
                <h2 class="title"> THE GLYNIS AUSTIN EXPERIENCE</h2>
                <div class="exprnce_info">
                    <div class="row">
                            <ul>
                                <?php
								$type = 'austin';
								$args=array(
								  'post_type' => $type,
								  'post_status' => 'publish',
								  'order'      => 'ASC',
								  'posts_per_page' =>-1
								  );
								$my_query = new WP_Query($args);
								if( $my_query->have_posts() ) {
								  while ($my_query->have_posts()) : $my_query->the_post(); ?>
									<li>
										<div class="icon_exp">
											<i class="fa fa-home" aria-hidden="true"></i>
										</div>
										<div class="icon_info">
											<h2><?php the_title(); ?></h2>
											<p><?php the_content(); ?></p>
										</div>
									</li> 
								<?php endwhile; } wp_reset_query(); ?>   
                            </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="our_team">
            <div class="container">
                <h2 class="title">oUR team</h2>
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
							<div class="col-md-3">
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
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									<h3><?php echo get_field('designation',$my_query->ID); ?></h3>
								</div>
							</div> 
						<?php endwhile; } wp_reset_query(); ?>  		
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
                        <a href="<?php echo get_site_url() ?>/contact">GET IN TOUCH <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
 
 
 
 <?php get_footer(); ?>