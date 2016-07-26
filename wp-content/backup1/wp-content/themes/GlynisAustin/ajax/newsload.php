<?php
include('../../../../wp-config.php');
?>
<?php
$display_count=4;

 $offSet=$_POST['page_val1'];

 $offSet = ( $offSet - 1 ) * $display_count; 

       
                 $type = 'news';
					$args=array(
					  'post_type' => $type,
					  'post_status' => 'publish',
					  'order'      => 'DESC',
					  'posts_per_page' =>$display_count,
					  'offset'=>$offSet
					  );
					$my_query = new WP_Query($args);
					$total = $my_query->found_posts;
					
					if($my_query->have_posts()){
					  while ($my_query->have_posts()) : $my_query->the_post(); 
					
					  ?>
							<div class="col-md-3">
								<div class="news_box">
									<a class="b_img" href="<?php echo get_the_permalink(); ?>">
										<?php the_post_thumbnail('full'); ?>
									</a>
									<div class="n_inner">
										<a class="b_ttl" href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a>
										<span>Posted on <?php echo get_the_date('F j, Y'); ?></span>
										<p><?php  $content = get_the_content(); echo mb_strimwidth($content, 0, 80);?></p>
									</div>
								</div>
							</div>
						
					
			<?php  endwhile; 
					}

			?>
