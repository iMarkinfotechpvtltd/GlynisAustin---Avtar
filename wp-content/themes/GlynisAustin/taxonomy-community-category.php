<?php get_header(); ?>
    <?php
if( is_tax() ) {
    global $wp_query;
    $term = $wp_query->get_queried_object();
    $name = $term->name;
}
 ?>
        <section class="banner inner_banner" style="background: url(<?php echo z_taxonomy_image_url($category->term_id); ?>);">
            <div class="headline">
                <h2><?php echo $name; //$current_category = single_cat_title("", false); ?></h2>
            </div>
        </section>

        <section class="individual_community">
            <div class="container">
                <h2 class="title">why live in <?php echo $name; ?>?</h2>
                <div class="live_in">
                    <?php  $posts=get_posts(array(
					'showposts' => -1,
				   'post_type' => 'community',
				   'tax_query' => array(
					   array(
					   'taxonomy' => 'community-category',
					   'field' => 'name',
					   'terms' => array($name))
				   ),
				   'orderby' => 'title',
				   'order' => 'DESC')
				);
				foreach($posts as $post) { 
					$type = get_field('post_relate_with',$post->ID);
					if($type == 'Why live in this community'){
				?>
                        <div class="col-md-4 col-sm-6">
                            <div class="paddington_box">
                                <div class="">
                                    <?php $newpost = $post->ID;
							 $image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id( $newpost ),'blog-images' );
								$url = $image_attributes[0];
							?>
                                        <img src="<?php echo $url?>" alt="">
                                </div>
                                <a class="c_ttl" href="#">
                                    <?php the_title(); ?>
                                </a>
                                <p>
                                    <?php echo $post->post_content; ?>
                                </p>
                            </div>
                        </div>
                        <?php } } wp_reset_query(); ?>
                </div>
            </div>
            <div class="local_sayings">
                <div class="container">
                    <h2 class="title">WHAT LOCALS SAY</h2>
                    <div id="say">
                        <?php
					$type = 'testimonial';
					$args=array(
					  'post_type' => $type,
					  'post_status' => 'publish',
					  'order'      => 'ASC',
					  'posts_per_page' =>-1
					  );
					$my_query = new WP_Query($args);
					if( $my_query->have_posts() ) {
					  while ($my_query->have_posts()) : $my_query->the_post(); 
					  $id = get_field('testimonial_of',$my_query->ID);
					  if($term->term_id == $id){
					  ?>
                            <div class="item">
                                <p>
                                    <?php the_content(); ?>
                                </p>
                                <h3><?php the_title(); ?></h3>
                                <h4><?php echo get_field('sub_title',$my_query->ID); ?></h4>
                            </div>
                            <?php } endwhile; } ?>
                    </div>
                </div>
            </div>
            <div class="why_love_section">
                <div class="container">
                    <h3>WHY WE LOVE (<?php echo $name; ?>)</h3>
                    <div class="progress_Section">
                        <div class="row">
                            <div class="col-md-7 col-sm-7">
                                <div class="progress_info">
                                    <p>
                                        <?php echo nl2br($term->description);  ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-5">
                                <div class="progress_bar">
                                    <!--<h2 class="text-center">Scroll down the page a bit</h2><br><br> -->
                                    <div class="barWrapper">
                                        <span class="progressText">Schools</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo get_field('school',$term); ?>" aria-valuemin="0" aria-valuemax="100">
                                                <span class="popOver" data-toggle="tooltip" data-placement="top" title="<?php echo get_field('school',$term); ?>%"> </span>
                                            </div>
                                        </div>

                                        <div class="barWrapper">
                                            <span class="progressText">Transport</span>
                                            <div class="progress ">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo get_field('transport',$term); ?>" aria-valuemin="10" aria-valuemax="100" style="">
                                                    <span class="popOver" data-toggle="tooltip" data-placement="top" title="<?php echo get_field('transport',$term); ?>%"> </span>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="barWrapper">
                                            <span class="progressText">Shops</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo get_field('shops',$term); ?>" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="popOver" data-toggle="tooltip" data-placement="top" title="<?php echo get_field('shops',$term); ?>%"> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="barWrapper">
                                            <span class="progressText">Food / Drinks</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo get_field('food_and_drink',$term); ?>" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="popOver" data-toggle="tooltip" data-placement="top" title="<?php echo get_field('food_and_drink',$term); ?>%"> </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="barWrapper">
                                            <span class="progressText">Warm Score</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $d= get_field('warm_score',$term); ?>" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="popOver" data-toggle="tooltip" data-placement="top" title="<?php echo $d; ?>%"> </span>
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
            <div class="best_section">
                <div class="container">
                    <h2 class="title">best of (<?php echo $name; ?>)</h2>

                    <div class="best_div">
                        <?php  $posts=get_posts(array(
					'showposts' => -1,
				   'post_type' => 'community',
				   'tax_query' => array(
					   array(
					   'taxonomy' => 'community-category',
					   'field' => 'name',
					   'terms' => array($name))
				   ),
				   'orderby' => 'title',
				   'order' => 'DESC')
				);
				foreach($posts as $post) { 
					 $type = get_field('post_relate_with',$post->ID);
					if($type == 'Best of community'){?>

                            <div class="col-md-4 col-sm-6">

                                <div class="paddington_box">
                                    <div class="">
                                        <?php $newpost = $post->ID;
								 $image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id( $newpost ),'blog-images' );
									$url = $image_attributes[0];
								?>
                                            <img src="<?php echo $url?>" alt="">
                                    </div>
                                    <a class="c_ttl" href="#">
                                        <?php the_title(); ?>
                                    </a>
                                    <p>
                                        <?php echo $post->post_content; ?>
                                    </p>
                                </div>
                            </div>

                            <?php } } wp_reset_query(); ?>

                    </div>
                </div>
            </div>
        </section>



        <section class="get_in_touch">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="details">
                            <h2>ARE WE MISSING YOUR FAVOURITE?</h2>
                            <a href="<?php echo get_site_url(); ?>/contact">GET IN TOUCH <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            jQuery(document).ready(function () {

                jQuery("#say").owlCarousel({

                    autoPlay: 5000,
                    navigation: true,
                    navigationText: ["", ""],
                    items: 1,
                    itemsDesktop: [1199, 1],
                    itemsDesktopSmall: [979, 1],
                    itemsTablet: [768, 1],
                    itemsMobile: [479, 1]

                });

            });
        </script>

        <?php get_footer(); ?>