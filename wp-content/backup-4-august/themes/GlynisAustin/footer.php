<footer>
        <div class="container">
            <div class="footer_nav">
                <div class="row">
                    <div class="col-md-3">
                        <div class="block1">
                            <a class="footer_logo" href="<?php echo get_site_url(); ?>"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/footer_logo.png"></a>
                            <ul>
                                <li>
                                    <a href="<?php echo get_site_url(); ?>/about">About</a>
                                </li>
                                <li>
                                    <a href="<?php echo get_site_url(); ?>/team">Team </a>
                                </li>
                                <li>
                                    <a href="<?php echo get_site_url(); ?>/career">Careers</a>
                                </li>
                                <li>
                                    <a href="<?php echo get_site_url(); ?>/contact">Contact</a>
                                </li>
                                <li>
                                    <a href="#">Subscribe</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block2">
                            <h2>PROPERTIES</h2>
                            <ul>
                                <li>
                                    <a href="#">For Sale</a>
                                </li>
                                <li>
                                    <a href="#">Open Homes </a>
                                </li>
                                <li>
                                    <a href="#">Auctions</a>
                                </li>
                                <li>
                                    <a href="#">Recently Sold</a>
                                </li>
                                <li>
                                    <a href="#">Off Market</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="block3">
                            <h2>NEWS</h2>
                            <ul>
                                <li>
                                    <a href="<?php echo get_site_url(); ?>/local-news">Latest News</a>
                                </li>
                                <li>
                                    <a href="sellers-guide.html">Seller Guides</a>
                                </li>
                                <li>
                                    <a href="#">Buyer guides</a>
                                </li>
                                <li>
                                    <a href="<?php echo get_site_url(); ?>/testimonial">our Clients Say</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="block4">
                            <h2>COMMUNITIES</h2>
                            <ul>
                                <li>
                                    <a href="#">Paddington</a>
                                </li>
                                <li>
                                    <a href="#">Red Hill</a>
                                </li>
                                <li>
                                    <a href="#">Bardon</a>
                                </li>
                                <li>
                                    <a href="#">Auchenflower</a>
                                </li>
                                <li>
                                    <a href="#">Petrie Terrace</a>
                                </li>
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
                    <li>
                        <a href="http://raywhitepaddington.com.au/" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/proud_icon1.jpg"></a>
                    </li>
                    <li>
                        <a href="http://www.reiq.com/" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/proud_icon2.jpg"></a>
                    </li>
                    <li>
                        <a href="http://raywhite.com/" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/proud_icon3.jpg"></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <ul>
                <li>Copyright © Glynis Austin Properties - All Rights Reserved </li>
                <li>
                    <a href="#">privacy</a>
                </li>
                <li>
                    <a href="#">site map</a>
                </li>
            </ul>
            <p class="imark">Powered By :<a href="http://www.imarkinfotech.com/" target="_blank"> iMark Infotech</a></p>
        </div>
        <a href="#0" class="cd-top">Top</a>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo esc_url(get_template_directory_uri());?>/js/bootstrap.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri());?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri());?>/js/wow.min.js"></script>
  <script src="<?php echo esc_url(get_template_directory_uri());?>/js/custom_ie.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri());?>/js/main.js"></script>
	<?php wp_footer(); ?>
    <script>
        jQuery('.carousel').carousel({
            pause: 'none'
        });
    </script>
    <script>
        jQuery(document).ready(function () {

            jQuery("#testimonial").owlCarousel({

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
        jQuery(document).ready(function () {

            jQuery("#news").owlCarousel({

                autoPlay: false, //Set AutoPlay to 3 seconds
                navigation: true,
                navigationText: ["", ""],
                items: 4,
                itemsDesktop: [1199, 2],
                itemsDesktopSmall: [979, 1],
                itemsTablet: [768, 1],
                itemsMobile: [479, 1]

            });

        });
    </script>
    <script>
        jQuery(document).ready(function () {

            jQuery("#open, #recentsale, #property, #news, #auct").owlCarousel({

                autoPlay: false, //Set AutoPlay to 3 seconds
                navigation: true,
                navigationText: ["", ""],
                items: 4,
                itemsDesktop: [1199, 4],
                itemsDesktopSmall: [979, 1],
                itemsTablet: [768, 1],
                itemsMobile: [479, 1]

            });

        });
    </script>
    <script>
        // grab the initial top offset of the navigation 
        var stickyNavTop = $('body').offset().top;
        // our function that decides weather the navigation bar should have "fixed" css position or not.
        var stickyNav = function () {
            var scrollTop = $(window).scrollTop(); // our current vertical position from the top

            // if we've scrolled more than the navigation, change its position to fixed to stick to top,
            // otherwise change it back to relative
            if (scrollTop > 10) {
                jQuery('header').addClass('sticky');
            } else {
                jQuery('header').removeClass('sticky');
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
	jQuery(function() {
	jQuery('#google-maps').click(function(e) {
		jQuery(this).find('iframe').css('pointer-events', 'auto');
	}).mouseleave(function(e) {
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
        jQuery(function () {
            jQuery('[data-toggle="tooltip"]').tooltip()
        })
    </script>
</body>

</html>