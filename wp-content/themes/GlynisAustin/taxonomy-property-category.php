<?php get_header(); global $category; ?>
    <?php	$image=get_post_meta(44,"banner_image",true);
$thumb = wp_get_attachment_image_src($image, 'full' );
?>
        <section class="banner inner_banner" style="background: url(<?php echo $url = $thumb['0'];?>);">
            <div class="headline">
                <h2><?php echo $current_category = single_cat_title("", false); ?></h2>
            </div>
        </section>
        <?php if($current_category != 'Off-Market Home'){ ?>

            <script href="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.js"></script>

            <div class="search_option_bar">
                <div class="search_prop_div">
                    <div class="s_fill">
                        <div class="outer">
                            <select id="p_catagory">
                                <option value="0">Any</option>
                                <option value="1">Sale</option>
                                <option value="3">Auction</option>
								<option value="2">Sold</option>
                            </select>
                        </div>
                        <div class="outer1">

                            <input type="text" id="area" placeholder="Area, Suburb or postcode">

                        </div>
                        <div class="outer2">
                            <select id="p_type">
                                <option value="0">Any Property type</option>
                                <option value="1">House</option>
                                <option value="2">Apartment / Unit</option>
                                <option value="3">Townhouse</option>
                                <option value="4">New Development</option>
                                <option value="5">Vacant Land</option>
                                <option value="6">Commercial</option>
                                <option value="7">Acreage / Rural</option>
                            </select>
                        </div>
                        <button class="srch_btn" id="srh_btn">search</button>
                    </div>
                    <div class="s_fill flex">
                        <div class="outer3">
                            <select id="bedrooms">
                                <option value="0">Any Bedrooms</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5 and more</option>
                            </select>
                        </div>
                        <div class="outer4">
                            <select id="bathrooms">
                                <option value="0">Any Bathrooms</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5 and more</option>
                            </select>
                        </div>
                        <div class="outer5">
                            <select id="parking">
                                <option value="0">Parking not Essential</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5 and more</option>
                            </select>
                        </div>

                    </div>
                    <div class="btm_div">
                        <div class="range">
                            <div id="slider" class="filter_range"></div>
                        </div>

                        <div class="rd">
                            <label class="control control--checkbox">Surrounding Suburb
                                <input type="checkbox" id="c1" />
                                <div class="control__indicator"></div>
                            </label>
                        </div>
                        <p class="expand mj_op">options -</p>
                    </div>
                </div>
            </div>

            <?php } ?>


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
					{ ?>
                                    <div class="col-md-3 col-sm-3">
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
                    jQuery("#srh_btn").click(function () {

                        var pcategory = jQuery('#p_catagory').val();
                        var area = jQuery('#area').val();
                        var p_type = jQuery('#p_type').val();
                        var bedrooms = jQuery('#bedrooms').val();
                        var bathrooms = jQuery('#bathrooms').val();
                        var parking = jQuery('#parking').val();
                        //alert(parking);
                        var minprice = jQuery('#slider').slider('values', 0);
                        minprice = minprice * 10000;

                        var maxprice = jQuery('#slider').slider('values', 1);
                        maxprice = maxprice * 10000;

                        jQuery.ajax({
                            type: "POST",
                            url: "<?php echo esc_url(get_template_directory_uri());?>/ajax/propertysearch.php",
                            data: {
                                pcategory: pcategory,
                                area: area,
                                p_type: p_type,
                                bedrooms: bedrooms,
                                bathrooms: bathrooms,
                                parking: parking,
                                minprice: minprice,
                                maxprice: maxprice,
                            },
                            success: function (resp) {
                                if (resp != "") {
                                    //alert(resp);
									window.location.href="<?php echo site_url(); ?>/search-result?r="+resp;
                                }
                            }
                        });
                    });
                </script>


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
                <script>
                    jQuery(document).ready(function () {
                        jQuery(".expand").click(function () {
                            jQuery(".flex").slideToggle();
                        });
                    });
                </script>
                <script>
                    jQuery(document).ready(function () {
                        jQuery(".expand").click(function () {
                            jQuery(".mj_op").toggleClass("l_op");
                        });
                    });
                </script>




                <?php get_footer(); ?>
				