<footer>
    <div class="container">
        <div class="footer_nav">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="block1">
                        <?php	$image=get_post_meta(397,"footer_logo",true);
								$thumb = wp_get_attachment_image_src($image, 'full' );
								?>
                            <a class="footer_logo" href="<?php echo get_site_url(); ?>"><img src="<?php echo $url = $thumb['0'];?>"></a>
                            <ul>
                                <?php
								$defaults = array(
								'theme_location'  => '',
								'menu'            => 'footer_left',
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
                                    <script>
                                        jQuery("#menu-item-382").attr('data-target', '#news-letter');
                                        jQuery("#menu-item-382").attr('data-toggle', 'modal');
                                    </script>
                            </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-3 col-xs-6">
                    <div class="block2">
                        <h2>PROPERTIES</h2>
                        <ul>
                            <?php
								$defaults = array(
								'theme_location'  => '',
								'menu'            => 'property_menu',
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
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="block3">
                        <h2>NEWS</h2>
                        <ul>
                            <?php
								$defaults = array(
								'theme_location'  => '',
								'menu'            => 'news_menu',
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
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <div class="block4">
                        <h2>COMMUNITIES</h2>
                        <ul>
                            <?php
								$defaults = array(
								'theme_location'  => '',
								'menu'            => 'community_menu',
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="proud">
        <div class="container">
            <h2>proudly in conjuction with</h2>
            <ul>
                <?php echo get_field('conjunction_with',397); ?>
            </ul>
        </div>
    </div>
    <div class="copyright">
        <ul>
            <li>
                <?php echo get_field('copyright',397); ?>
            </li>
            <li>
                <a href="<?php echo get_site_url(); ?>/privacy">privacy</a>
            </li>
            <li>
                <a href="#">site map</a>
            </li>
        </ul>
        <p class="imark">Powered By :<a href="http://www.imarkinfotech.com/" target="_blank"> iMark Infotech</a></p>
    </div>

    <!-- Login Model -->
    <div class="modal fade form_popup" id="loginModal">
        <div class="modal-dialog" role="document">
            <form role="form" id="user_login" action="" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                        <h2>Log in to your account</h2>
                        <p>You need to sign in or sign up before continuing.</p>
                        <div class="form-area">
                            <input type="text" id="username" name="username" placeholder="Email">
                            <input type="password" id="user_pass" name="user_pass" placeholder="Password">
                            <input type="hidden" name="action" value="wpLoginForm" />
                            <?php wp_nonce_field( 'wpLoginForm_html', 'wpLoginForm_nonce' ); ?>
                                <a href="#" data-toggle="modal" data-target="#forget" data-dismiss="modal" class="frgt_pwd">Forgot password?</a>
                                <button type="submit" class="popup_btn" name="submit">log in</button>
                                <p>Don't have an account? <a class="regstr" href="#" data-toggle="modal" data-target="#registerModal" onclick="myFunction()" data-dismiss="modal">Register here</a></p>
                        </div>
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        jQuery(function ($) {
            jQuery('#user_login').validate({

                rules: {
                    username: {
                        required: true,
                        minlength: 3
                    },

                    user_pass: {
                        required: true,
                        minlength: 6,
                    }
                },
                messages: {
                    username: {
                        required: "<?php _e( 'Please provide a username', 'agrg' ); ?>",
                        minlength: "<?php _e( 'Your username must be at least 3 characters long', 'agrg' ); ?>"
                    },

                    user_pass: {
                        required: "<?php _e( 'Please provide a password', 'agrg' ); ?>",
                        minlength: "<?php _e( 'Your password must be at least 6 characters long', 'agrg' ); ?>"
                    }

                },

                submitHandler: function (form) {
                    jQuery(form).ajaxSubmit({
                        type: "POST",
                        data: jQuery(form).serialize(),
                        url: '<?php echo admin_url('admin-ajax.php'); ?>',
                        success: function (data) {

                            if (data == 1) {
                                alert('Username Not exists');
                            }
                            if (data == 2) {
                                alert('Password Not Match');
                            }
                            if (data == 3) {
                                window.location.href = "<?php echo site_url(); ?>";
                            }

                        }
                    });
                }

            });
        });
    </script>
    <!-- Register Modal -->
    <div class="modal fade form_popup" id="registerModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <form id="wpjobus-register" type="post" action="">
                    <div class="modal-body">
                        <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                        <h2>register a new account</h2>
                        <p>Create an account to access documents, save searches and sign up for property alerts</p>
                        <div class="form-area">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="fname" id="fname" placeholder="First name">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="lname" id="lname" placeholder="Last name">
                                </div>
                            </div>
                            <input type="text" name="phone_no" id="phone_no" placeholder="Phone number (optional)">
                            <input type="text" name="user_email" id="user_email" placeholder="Email">
                            <input type="password" name="user_pass" id="user_pass" placeholder="Password">

                            <input type="hidden" name="action" value="wpjobusRegisterForm" />
                            <?php wp_nonce_field( 'wpjobusRegister_html', 'wpjobusRegister_nonce' ); ?>
                                <input name="submit" type="submit" value="<?php _e( 'Register', 'agrg' ); ?>" class="popup_btn">
                                <p>Already hace an account? <a class="regstr" href="#" data-toggle="modal" data-target="#loginModal" data-dismiss="modal">Sign in here</a></p>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        jQuery(function ($) {
            jQuery('#wpjobus-register').validate({

                rules: {
                    fname: {
                        required: true,
                        minlength: 3
                    },
                    lname: {
                        required: true,
                        minlength: 3
                    },
                    user_email: {
                        required: true,
                        email: true
                    },
                    user_pass: {
                        required: true,
                        minlength: 6,
                    }
                },
                messages: {
                    fname: {
                        required: "<?php _e( 'Please provide a first name', 'agrg' ); ?>",
                        minlength: "<?php _e( 'Your first name must be at least 3 characters long', 'agrg' ); ?>"
                    },
                    lname: {
                        required: "<?php _e( 'Please provide a last name', 'agrg' ); ?>",
                        minlength: "<?php _e( 'Your last name must be at least 3 characters long', 'agrg' ); ?>"
                    },
                    user_email: {
                        required: "<?php _e( 'Please provide an email address', 'agrg' ); ?>",
                        email: "<?php _e( 'Please enter a valid email address', 'agrg' ); ?>"
                    },
                    user_pass: {
                        required: "<?php _e( 'Please provide a password', 'agrg' ); ?>",
                        minlength: "<?php _e( 'Your password must be at least 6 characters long', 'agrg' ); ?>"
                    }
                },

                submitHandler: function (form) {

                    jQuery(form).ajaxSubmit({
                        type: "POST",
                        data: jQuery(form).serialize(),
                        url: '<?php echo admin_url('admin-ajax.php'); ?>',
                        success: function (data) {
                            
                            if (data == 1) {
                                alert('Username Already Exists');
                            }
                            if (data == 2) {
                                alert('Email Already Exists');
                            }
                            if (data == 3) {
                                window.location.href = "<?php echo site_url(); ?>";
                            }
                        }
                    });
                }

            });
        });
    </script>


    <!-- Book an Appraisal Model -->
    <div id="Appraisal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Book An Appraisal</h4>
                </div>
                <div class="modal-body">
                    <?php echo do_shortcode('[contact-form-7 id="59" title="get in touch"]'); ?>
                </div>
                <div class="modal-footer">

                </div>
            </div>

        </div>
    </div>

    <!-- Book an news-letter Model -->
    <div id="news-letter" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Subscribe Our News Letter</h4>
                </div>
                <div class="modal-body">
                    <?php echo do_shortcode('[mc4wp_form id="341"]'); ?>
                </div>
                <div class="modal-footer">

                </div>
            </div>

        </div>
    </div>

	
	
	<!-- forget Model -->
    <div class="modal fade form_popup" id="forget">
        <div class="modal-dialog" role="document">
			<div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Forgot Password</h4>
                </div>
                <div class="modal-body">
                    <input id="userdata" type="text" class="required" name="userdata" placeholder="Username or E-mail">
					<input type="submit" id="changepass" value="SUBMIT">
                </div>
                <div class="modal-footer">

                </div>
            </div>	
        </div>
    </div>

    <a href="#0" class="cd-top">Top</a>
</footer>
<?php wp_footer(); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo esc_url(get_template_directory_uri());?>/js/bootstrap.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri());?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri());?>/js/wow.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri());?>/js/classie.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri());?>/js/uisearch.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri());?>/js/modernizr.custom.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri());?>/js/custom_ie.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri());?>/js/main.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri());?>/js/jquery.BlackAndWhite.js"></script>
	<script src="<?php echo esc_url(get_template_directory_uri());?>/js/ajax-auth-script.js"></script>
<script>
	jQuery("#changepass").click(function () {

		var userdata = jQuery('#userdata').val();
		//alert(userdata);
		jQuery.ajax({
			type: "POST",
			url: "<?php echo esc_url(get_template_directory_uri());?>/ajax/forget-pass.php",
			data: {
				userdata: userdata,
			},
			success: function (resp) {
				if (resp != "") {
					alert(resp);
					window.location.href="<?php echo site_url(); ?>";
				}
			}
		});
	});
</script>	
<script>
jQuery(function () {
jQuery('[data-toggle="tooltip"]').tooltip()
})
</script>
 <?php if(!is_singular(property)) { ?>
    <script>
        jQuery(function () {
            jQuery('[data-toggle="tooltip"]').tooltip({
                trigger: 'manual'
            }).tooltip('show');
        });

        jQuery(window).scroll(function () {
            if (jQuery(window).scrollTop() > 1100) { // scroll down abit and get the action   
                jQuery(".progress-bar").each(function () {
                    each_bar_width = jQuery(this).attr('aria-valuenow');
                    jQuery(this).width(each_bar_width + '%');
                });

            }
        });
    </script>
<?php } ?>
    <?php $id = get_the_ID(); 
	if(($id == 269) || ($id == 422)){?>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
        <?php } ?>
            <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery.validate.js"></script>
            <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/form.js"></script>

            <script>
                jQuery('.carousel').carousel({
                    pause: 'none'
                });
            </script>

            <script>
                jQuery(document).ready(function () {

                    jQuery("#news").owlCarousel({

                        autoPlay: false, //Set AutoPlay to 3 seconds
                        navigation: true,
                        navigationText: ["", ""],
                        items: 4,
                        itemsDesktop: [1199, 4],
                        itemsDesktopSmall: [979, 3],
                        itemsTablet: [768, 3],
                        itemsMobile: [479, 1]

                    });

                });
            </script>
            <script>
                jQuery(document).ready(function () {

                    jQuery("#open, #recentsale, #property, #auct").owlCarousel({

                        autoPlay: false, //Set AutoPlay to 3 seconds
                        navigation: true,
                        navigationText: ["", ""],
                        items: 4,
                        itemsDesktop: [1199, 4],
                        itemsDesktopSmall: [979, 2],
                        itemsTablet: [768, 2],
                        itemsMobile: [479, 1]

                    });

                });
            </script>
            <script>
                // grab the initial top offset of the navigation 
                var stickyNavTop = jQuery('body').offset().top;
                // our function that decides weather the navigation bar should have "fixed" css position or not.
                var stickyNav = function () {
                    var scrollTop = jQuery(window).scrollTop(); // our current vertical position from the top

                    // if we've scrolled more than the navigation, change its position to fixed to stick to top,
                    // otherwise change it back to relative
                    if (scrollTop > 10) {
                        jQuery('header').addClass('sticky') & jQuery('.responsive-menu-button').addClass('move_scroll');
                    } else {
                        jQuery('header').removeClass('sticky') & jQuery('.responsive-menu-button').removeClass('move_scroll');
                    }

                };

                stickyNav();
                // and run it again every time you scroll
                jQuery(window).scroll(function () {
                    stickyNav();
                });
            </script>

            <script>
                var wow = new WOW({
                    boxClass: 'wow', // animated element css class (default is wow)
                    animateClass: 'animated', // animation css class (default is animated)
                    offset: 0, // distance to the element when triggering the animation (default is 0)
                    mobile: true, // trigger animations on mobile devices (default is true)
                    live: true, // act on asynchronously loaded content (default is true)
                    callback: function (box) {
                        // the callback is fired every time an animation is started
                        // the argument that is passed in is the DOM node being animated
                    },
                    scrollContainer: null // optional scroll container selector, otherwise use window
                });
                wow.init();
            </script>
            <script>
                jQuery('#google-maps').find('iframe').css('pointer-events', 'none');
                jQuery(function () {
                    jQuery('#google-maps').click(function (e) {
                        jQuery(this).find('iframe').css('pointer-events', 'auto');
                    }).mouseleave(function (e) {
                        jQuery(this).find('iframe').css('pointer-events', 'none');
                    });
                })
            </script>
            <script>
                jQuery(document).ready(function () {

                    jQuery("#client_slider").owlCarousel({
                        autoPlay: 5000, //Set AutoPlay to 3 seconds
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
            <script>
                function collision($div1, $div2) {
                    var x1 = $div1.offset().left;
                    var w1 = 40;
                    var r1 = x1 + w1;
                    var x2 = $div2.offset().left;
                    var w2 = 40;
                    var r2 = x2 + w2;

                    if (r1 < x2 || x1 > r2) return false;
                    return true;

                }

                // slider call

                jQuery('#slider').slider({
                    range: true,
                    min: 50,
                    max: 500,
                    values: [0, 500],
                    slide: function (event, ui) {

                        jQuery('.ui-slider-handle:eq(0) .price-range-min').html('$' + ui.values[0] + 'K');
                        jQuery('.ui-slider-handle:eq(1) .price-range-max').html('$' + ui.values[1] + 'K');
                        jQuery('.price-range-both').html('<i>$' + ui.values[0] + 'K' + ' - </i>$' + ui.values[1] + 'K');

                        //

                        if (ui.values[0] == ui.values[1]) {
                            jQuery('.price-range-both i').css('display', 'none');
                        } else {
                            jQuery('.price-range-both i').css('display', 'inline');
                        }

                        //

                        if (collision(jQuery('.price-range-min'), jQuery('.price-range-max')) == true) {
                            jQuery('.price-range-min, .price-range-max').css('opacity', '0');
                            jQuery('.price-range-both').css('display', 'block');
                        } else {
                            jQuery('.price-range-min, .price-range-max').css('opacity', '1');
                            jQuery('.price-range-both').css('display', 'none');
                        }

                    }
                });

                jQuery('.ui-slider-range').append('<span class="price-range-both value"><i>$' + jQuery('#slider').slider('values', 0) + 'K' + ' - </i>' + jQuery('#slider').slider('values', 1) + '</span>');

                jQuery('.ui-slider-handle:eq(0)').append('<span class="price-range-min value">$' + jQuery('#slider').slider('values', 0) + 'K' + '</span>');

                jQuery('.ui-slider-handle:eq(1)').append('<span class="price-range-max value">$' + jQuery('#slider').slider('values', 1) + 'K' + '</span>');
            </script>


            
            <?php  $id = get_the_ID();

		if(($id == 292) || ($id == 327)) {?>
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

                <script src="<?php echo esc_url(get_template_directory_uri());?>/js/jquery.fancybox.js"></script>
                <script type="text/javascript">
                    jQuery(document).ready(function ($) {
                        jQuery(".various").fancybox({
                            maxWidth: 800,
                            maxHeight: 600,
                            fitToView: false,
                            width: '70%',
                            height: '70%',
                            autoSize: false,
                            closeClick: false,
                            openEffect: 'elastic',
                            closeEffect: 'none'
                        });
                    });
                </script>
                <?php } ?>
                    </body>

                    </html>