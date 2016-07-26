 <?php get_header(); global $category; ?>
 <?php	$image=get_post_meta(44,"banner_image",true);
$thumb = wp_get_attachment_image_src($image, 'full' );
?>
  <section class="banner inner_banner" style="background: url(<?php echo $url = $thumb['0'];?>);">
        <div class="headline">
            <h2><?php echo $current_category = single_cat_title("", false); ?></h2>
        </div>
    </section>
	 <section class="blog_section">
        <div class="container">
            <div class="row asd" id="scroll">
			
			<?php
								$posts=get_posts(array(
									   'showposts' => 4,
									   'paged'         => 1,
									   'post_type' => 'property',
									   'tax_query' => array(
										   array(
										   'taxonomy' => 'property-category',
										   'field' => 'name',
										   'terms' => array($current_category))
									   ),
									   'orderby' => 'title',
									   'order' => 'DESC')
									);
					 ?>
			<input type="hidden" name="page_val" id="page_val" value="1"> 
			<input type="hidden" name="totalrec" id="totalrec" value="<?php echo $post->num_rows; ?>">
			<input type="hidden" name="curr_diss" id="curr_diss" value="2">
			<input type="hidden" name="cat" id="cat" value="<?php echo $current_category;?>">
					  <?php
					
					 foreach($posts as $post)
					{ ?>    <div class="col-md-3">
								<div class="item">
                                            <a href="#" class="box2">
                                                <div class="list_img">
												<?php $newpost = $post->ID;
												 $image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id( $newpost ),'news_tile' );
													$url = $image_attributes[0];
													?>
                                                    <img src="<?php echo $url; ?>">
													<?php if($slug == 'recent_sales'){
														echo '<h2 class="sold">SOLD</h2>';
													} ?>
                                                </div>
                                                <div class="inner_box">
                                                    <div class="pad">
                                                        <h2><?php the_title(); ?></h2>
                                                        <h5><?php echo get_field('sub_title',$post->ID); ?></h5>
                                                        <p><?php echo get_field('days_for_visit',$post->ID); ?> <?php echo date(' j, F',time()+86400*$i); ?></p>
                                                        <p><?php echo get_field('time_for_visit',$post->ID); ?></p>
                                                    </div>
                                                    <div class="all_detail">
                                                        <div class="pad">
                                                            <ul>
                                                                <li><?php echo get_field('number_of_bedroom',$post->ID); ?><i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                <li><?php echo get_field('number_of_washroom',$post->ID); ?><img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                <li><?php echo get_field('parking_capacity',$post->ID); ?><i class="fa fa-car" aria-hidden="true"></i></li>
                                                            </ul>
                                                            <div class="price">
                                                                <label>price :</label><?php if($slug != 'upcoming_auction'){ echo get_field('property_price',$post->ID);} else
																	{ echo get_field('property_price_auction',$post->ID);}																?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                       </div>
									</div>
					<?php } wp_reset_query(); ?>  
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
	if($(window).scrollTop() > div_top){
		if(jQuery(window).scrollTop() >= jQuery('.asd').offset().top + jQuery('.asd').outerHeight() - window.innerHeight) {
			//var totalrec = jQuery('#totalrec').val();
							var page_val = jQuery('#page_val').val();
							var page_val1 = parseInt(page_val) + 1;
							var curr_diss= parseInt(page_val) * 2;
							jQuery('#page_val').val(page_val1);
							jQuery('#curr_diss').val(curr_diss);
			var page = document.getElementById("page_val").value;
			var category = document.getElementById("cat").value;
			//alert(category);
			jQuery.ajax({
					type: "POST",
					url: "<?php bloginfo('template_url'); ?>/ajax/propertyload.php",
					data: {
						page_val1: page,
						cat : category,
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
}); 
</script>