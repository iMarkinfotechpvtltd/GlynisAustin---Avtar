 <?php 
 // Template Name: Communities 
 ?>
 <?php get_header(); global $category; ?>
 <?php	$image=get_post_meta(356,"banner_image",true);
$thumb = wp_get_attachment_image_src($image, 'full' );
?>
  <section class="banner inner_banner" style="background: url(<?php echo $url = $thumb['0'];?>);">
        <div class="headline">
            <h2>Communities<?php //echo $current_category = single_cat_title("", false); ?></h2>
        </div>
    </section>
		
	  <section class="community">
        <div class="container">
            <h2 class="title"><?php echo get_field('title',356); ?></h2>
        </div>
        <div class="grid_layout_section">
            <div class="container">
			<?php 
				$args = array(
					'type'                     => 'community',
					'orderby'                  => 'term_id',
					'taxonomy'                 => 'community-category',
					);
				$a=1;
				$categories = get_categories( $args );
				foreach ( $categories as $category ) {
				  $name = $category->name; ?>
				 <div class="col-md-3">
					<div class="com-box">
						<a class="com bwWrapper" href="<?php echo get_category_link( $category->term_id )?>">
							<img src="<?php echo z_taxonomy_image_url($category->term_id); ?>">
							<div class="view_effect">
								<h2><?php echo $name; ?></h2>
							</div>
						</a>
					</div>
				</div>
				<?php } ?>
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

