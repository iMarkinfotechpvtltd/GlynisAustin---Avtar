<?php 
// Template Name: for sale
get_header();
 ?>
<?php	$image=get_post_meta(44,"banner_image",true);
$thumb = wp_get_attachment_image_src($image, 'full' );
?>
        <section class="banner inner_banner" style="background: url(<?php echo $url = $thumb['0'];?>);">
            <div class="headline">
                <h2><?php echo "properties for sale"; ?></h2>
            </div>
        </section>
		<?php $posts=get_posts(array(
		   'showposts' => -1,
		   'post_type' => 'property',
		   'tax_query' => array(
			   array(
			   'taxonomy' => 'property-category',
			   'field' => 'term_id',
			   'terms' => array($termid,15,16))
		   ),
		   'orderby' => 'title',
		   'order' => 'DESC')
		);?>
		<section class="blog_section">
                    <div class="container">
                        <div class="row asd" id="scroll">
		<?php foreach($posts as $post)
		{?> <div class="col-md-3 col-sm-3">
                                        <div class="item box2">
                                            <?php if($current_category != 'Off-Market Home'){ ?>
                                                <a href="<?php the_permalink(); ?>" class="">
                                                    <?php } ?>
                                                        <div class="list_img">
                                                            <?php $newpost = $post->ID;
												 $image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id( $newpost ),'news_tile' );
													$url = $image_attributes[0];
													?>
                                                                <img src="<?php echo $url; ?>">
																
                                                                <?php if($current_category == 'Recent Sales'){
														echo '<h2 class="sold">SOLD</h2>';
													} ?>
                                                        </div>
                                                        <div class="inner_box">
                                                            <div class="pad">
                                                                <h2><?php the_title(); ?></h2>
                                                                <h5><?php echo get_field('sub_title',$post->ID); $post1= $post?></h5>
                                                                <?php $member_id = get_field('assosiatewith',$post->ID); 
														
														$d=get_field('days_for_visit',$post1->ID);
																												
														//echo $type =gettype($d);
if($current_category == 'Off-Market Home'){
	$member = get_post($member_id);	
}
													?>
                                                                    <p>
                                                                        <?php if($current_category == 'Off-Market Home'){ echo 'Agent: '.$member->post_title; ?>
                                                                            <p><a href="tel:<?php $m=get_field('phone_number',$member->ID); echo $m = preg_replace('/[^0-9]/', '', $m); ?>"><?php echo 'M: '. get_field('phone_number',$member->ID); ?></a></p>
                                                                            <p><a href="mailto:<?php echo get_field('email',$member->ID); ?>">Email to agent</a></p>
                                                                            <?php } else {
if(gettype($d) == 'array'){ echo $l=$d[0]; } if(gettype($d) == 'string'){ echo $l=$d; }  
for($i=1 ; $i<=7; $i++)
{
$day = date('l',time()+86400*$i);
if($l == $day){
	$j=$i;	
}	
}
?>
                                                                                <?php echo date(' j, F',time()+86400*$j); ?>
                                                                    </p>
                                                                    <p>
                                                                        <?php echo get_field('time_for_visit',$post1->ID); } $member = null;?>
                                                                    </p>

                                                            </div>

                                                            <div class="all_detail">
                                                                <div class="pad">
                                                                    <ul>
                                                                        <li>
                                                                            <?php echo get_field('number_of_bedroom',$post1->ID); ?><i class="fa fa-bed" aria-hidden="true"></i></li>
                                                                        <li>
                                                                            <?php echo get_field('number_of_washroom',$post1->ID); ?><img src="<?php echo esc_url(get_template_directory_uri());?>/images/bath_icon.png"></li>
                                                                        <li>
                                                                            <?php echo get_field('parking_capacity',$post1->ID); ?><i class="fa fa-car" aria-hidden="true"></i></li>
                                                                    </ul>
                                                                    <div class="price">
                                                                        <label>price :</label>
                                                                        <?php if($slug != 'upcoming_auction'){ echo get_field('property_price',$post1->ID);} else
														{ echo get_field('property_price_auction',$post1->ID);}																?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php if($current_category != 'Off-Market Home'){ ?>
                                                </a>
                                                <?php } ?>
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
				<script>
                    var div_top = jQuery('#scroll').offset().top;
                    jQuery(window).scroll(function () {
                        if (jQuery(window).scrollTop() > div_top) {
                            if (jQuery(window).scrollTop() >= jQuery('.asd').offset().top + jQuery('.asd').outerHeight() - window.innerHeight) {
                                //var totalrec = jQuery('#totalrec').val();
                                var page_val = jQuery('#page_val').val();
                                var page_val1 = parseInt(page_val) + 1;
                                var curr_diss = parseInt(page_val) * 2;
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
                                        cat: category,
                                    },
                                    success: function (resp) {
                                        if (resp != "") {
                                            //alert(resp);
                                            jQuery(".asd").append(resp);

                                        }
                                    }
                                });
                            }
                        }
                    });
                </script>
<?php get_footer();?>