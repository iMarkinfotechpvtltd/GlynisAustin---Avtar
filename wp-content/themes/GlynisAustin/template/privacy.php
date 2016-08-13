<?php 
// Template Name: privacy
get_header();
 ?>
 <?php	$image=get_post_meta(44,"banner_image",true);
$thumb = wp_get_attachment_image_src($image, 'full' );
?>
  <section class="banner inner_banner" style="background: url(<?php echo $url = $thumb['0'];?>);">
        <div class="headline">
            <h2>Privacy Policy</h2>
        </div>
    </section>
	<section class="blog_section">
        <div class="container">
			<?php $include = get_pages('include=407');
			$content = apply_filters('the_content',$include[0]->post_content);?>
			<p> <?php echo $content; ?></p>
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