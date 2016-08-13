<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>GLYNIS AUSTIN | Welcome</title>
<?php wp_head(); ?>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri());?>/images/fav_icon.png" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="<?php echo esc_url(get_template_directory_uri());?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Style -->
    <link href="<?php echo esc_url(get_template_directory_uri());?>/css/style.css" rel="stylesheet">
    <link href="<?php echo esc_url(get_template_directory_uri());?>/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo esc_url(get_template_directory_uri());?>/css/owl.theme.css" rel="stylesheet">
	 <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
	
	<!-- Fancybox CSS -->
     <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/css/jquery.fancybox-buttons.css">
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/css/jquery.fancybox-thumbs.css">
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/css/jquery.fancybox.css"> 

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
	
    <!----------------->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <section class="top_head">
        <div class="container">
            <div class="left_part pull-left">
                <ul>
                    <li>
                        <a href="javascript:void(0)" data-target="#news-letter" data-toggle="modal">SUBSCRIBE TO GLYNIS AUSTIN PROPERTIES ALERTS</a>
                    </li>
                    <li>
                        <a href="<?php echo get_site_url(); ?>/career"> CAREERS</a>
                    </li>
                    <li>
				    <?php $no = get_field('phone_no',397); 
					$no = str_replace(' ', '', $no); ?>
                        <a href="tel:<?php echo $no; ?>">CALL <?php echo get_field('phone_no',397); ?></a>
                    </li>
                </ul>
            </div>
            <div class="right_part pull-right">
                <ul>
                    <li>
                        <a href="<?php echo get_field('social_link_facebook',397); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>

                    </li>
                    <li>
                        <a href="<?php echo get_field('social_link_instagram',397); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>

                    <li>
                        <a href="<?php echo get_field('social_link_twitter',397); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo get_field('social_link_linkedin',397); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo get_field('social_link_youtube',397); ?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo get_field('social_link_pinterest',397); ?>" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
	<?php function checkuser(){
				if ( is_user_logged_in() ) {?>
					<script> jQuery( "#menu-item-323" ).hide(); </script>
				<?php } else { ?>
					<script> jQuery( "#menu-item-335" ).hide(); </script>
				<?php }
			}?>
			
    <header>
        <div class="container">
            <nav class="navbar navbar-default main_menu">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
								<?php	$image=get_post_meta(397,"header_logo",true);
								$thumb = wp_get_attachment_image_src($image, 'full' );
								?>
                    <a class="navbar-brand pull-left logo" href="<?php echo get_site_url(); ?>"><img src="<?php echo $url = $thumb['0'];?>"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="pull-right">
                    <ul class="nav navbar-nav pull-left">
						<?php

						$defaults = array(
						'theme_location'  => '',
						'menu'            => 'header_menu',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '%3$s',
						'depth'           => 0,
						'walker'          => ''
						);
						wp_nav_menu( $defaults );
						?> 
                       
                    </ul>
		<script>
		jQuery('ul.sub-menu').addClass('dropdown-menu1');
		jQuery( "ul li ul li" ).addClass( "dropdown" );
		jQuery( "#menu-item-324" ).attr( 'data-target','#Appraisal' );
		jQuery( "#menu-item-324" ).attr( 'data-toggle','modal' );
		jQuery( "#menu-item-323" ).attr( 'data-target','#loginModal' );
		jQuery( "#menu-item-323" ).attr( 'data-toggle','modal' );
		jQuery( "#menu-item-343" ).attr( 'data-target','#news-letter' );
		jQuery( "#menu-item-343" ).attr( 'data-toggle','modal' );
		jQuery( "#menu-item-335 a" ).attr('href','<?php echo wp_logout_url( home_url() ); ?>');
		</script>
		<?php checkuser();?>
                    <div class="search">
                        <form action="" class="search-form" method="get" role="search">
                            <input type="text" name="s" placeholder="Type here..">
                        </form>
                    </div>
                    <!---<form class="searchbox">
                        <input type="search" placeholder="Search......" name="search" class="searchbox-input" onkeyup="buttonUp();" required>
                        <input type="submit" class="searchbox-submit" value="GO">
                        <span class="searchbox-icon">GO</span>
                    </form>-->
                </div>
                <!-- /.navbar-collapse -->

            </nav>
        </div>
    </header>