<?php 
// Template Name: Seller-guide
get_header();
?>
<?php	$image=get_post_meta(275,"banner_image",true);
$thumb = wp_get_attachment_image_src($image, 'full' );
?>
<section class="banner inner_banner" style="background: url(<?php echo $url = $thumb['0'];?>);">
        <div class="headline">
            <h2></h2>
        </div>
    </section>
    <section class="sellerguide">
        <div class="container">
            <h3><?php echo get_field('banner_below_content',275); ?></h3>
        </div>
		<?php 
		$items=array();
		$items = get_field('select_category',275); 
		$no =count($items); 
		if($no == 1){ ?>
        <div class="expect_div marketing_div">
            <div class="container">
                <h2 class="title"><?php $term = get_term( $items ); echo $term->name; ?></h2>
				<?php $posts=get_posts(array(
					   'showposts' => -1,
					   'post_type' => 'seller-guide',
					   'tax_query' => array(
						   array(
						   'taxonomy' => 'seller-guide-category',
						   'field' => 'name',
						   'terms' => array($term->name))
					   ),
					   'orderby' => 'title',
					   'order' => 'DESC')
					); 
					foreach($posts as $post)
					{ ?>
                    <div class="col-md-3">
                        <div class="box20">
                            <a class="various fancybox.iframe" title="The Falltape" href="<?php echo get_field('video_source',$post->ID); ?>">
                                <img src="<?php echo esc_url(get_template_directory_uri());?>/images/news_img1.jpg">
                                <div class="view_hover_effect">
                                    <img src="<?php echo esc_url(get_template_directory_uri());?>/images/pause_icon.png">
                                </div>
                            </a>
                            <div class="n_inner">
                                <a href="#" class="h_title"><?php the_title(); ?></a>
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                    </div>
					<?php }?>
            </div>
        </div>
		<?php } else { 
			for($a=0; $a<$no; $a++)
			{
		?>
			 <div class="expect_div <?php if($a%2==1){echo 'marketing_div';}?>">
            <div class="container">
                <h2 class="title"><?php $term = get_term( $items[$a] ); echo $term->name; ?> </h2>
               
                    <?php $posts=get_posts(array(
					   'showposts' => -1,
					   'post_type' => 'seller-guide',
					   'tax_query' => array(
						   array(
						   'taxonomy' => 'seller-guide-category',
						   'field' => 'name',
						   'terms' => array($term->name))
					   ),
					   'orderby' => 'title',
					   'order' => 'DESC') 
					); 
					foreach($posts as $post)
					{ ?>
                    <div class="col-md-3">
                        <div class="box20">
                            <a class="various fancybox.iframe" title="<?php echo get_the_title(); ?>" href="<?php echo get_field('video_source',$post->ID); ?>">
                                <?php the_post_thumbnail('small'); ?>    
                            </a>
                            <div class="n_inner">
                                <a href="#" class="h_title"><?php the_title(); ?></a>
                                <p><?php echo $post->post_content;; ?></p>
                            </div>
                        </div>
                    </div>
					<?php }?>
                    
            </div>
        </div>	
			<?php } } ?>
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