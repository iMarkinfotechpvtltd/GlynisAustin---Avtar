<?php 
// Template Name: News/Blog
get_header();
 ?>
 <?php	$image=get_post_meta(44,"banner_image",true);
$thumb = wp_get_attachment_image_src($image, 'full' );
?>
  <section class="banner inner_banner" style="background: url(<?php echo $url = $thumb['0'];?>);">
        <div class="headline">
            <h2>latest news</h2>
        </div>
    </section>
    <section class="blog_section">
        <div class="container">
            <div class="row asd" id="scroll">
			
			<?php
					global $post;
					$type = 'news';
					$args=array(
					  'post_type' => $type,
					  'post_status' => 'publish',
					  'order'      => 'DESC',
					  'posts_per_page' =>4,
					  'offset'         =>  0 
					  );
					  $my_query = new WP_Query($args); ?>
					  <input type="hidden" name="page_val" id="page_val" value="1"> 
			<input type="hidden" name="totalrec" id="totalrec" value="<?php echo $my_query->found_posts; ?>">
			<input type="hidden" name="curr_diss" id="curr_diss" value="2">
					  <?php
					
					  while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <div class="col-md-3">
                    <div class="news_box">
                        <a class="b_img" href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('full'); ?>
                        </a>
                        <div class="n_inner">
                            <a class="b_ttl" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <span>Posted on <?php echo get_the_date('F j, Y'); ?></span>
                            <p><?php  $content = get_the_content(); echo mb_strimwidth($content, 0, 80);?> </p>
                        </div>
                    </div>
                </div>
				<?php endwhile; wp_reset_query(); ?>  
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
<script>
var div_top = $('#scroll').offset().top;
jQuery(window).scroll(function () {
	var totalrec = document.getElementById("totalrec").value;
	//alert(totalrec);
	var currentdisplay = document.getElementById("curr_diss").value;
	//alert(currentdisplay);
if(totalrec > currentdisplay){
	if($(window).scrollTop() > div_top){
		if(jQuery(window).scrollTop() >= jQuery('.asd').offset().top + jQuery('.asd').outerHeight() - window.innerHeight) {
			var totalrec = jQuery('#totalrec').val();
							var page_val = jQuery('#page_val').val();
							var page_val1 = parseInt(page_val) + 1;
							var curr_diss= parseInt(page_val) * 2;
							jQuery('#page_val').val(page_val1);
							jQuery('#curr_diss').val(curr_diss);
			var page = document.getElementById("page_val").value;
			jQuery.ajax({
					type: "POST",
					url: "<?php bloginfo('template_url'); ?>/ajax/newsload.php",
					data: {
						page_val1: page, 
						format: 'raw'
					},
					success: function (resp) {
						if (resp != "") {
							//alert(resp);
							jQuery( ".asd" ).append(resp);
							
						}
					}
				});
			}
		}
	}
}); 
</script>