<footer> <!--Footer Starts Here -->              
                            <div class="copyright">
                            	<a href="#home" class="dt-sc-tooltip-top" id="toTop" title="Back To Top"> </a>
                                <div class="container">
                                   <p> Copyright © 2017 AlTech | <a href="#"> Alternate Technology</a> </p>
                                </div>
                            </div>
						</footer><!--Footer Ends Here -->
                    </div>
				</section><!--Contact Section Ends Here -->
            </div>
        </div>
    </div><!-- Wrapper div ends here -->
	
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-easing-1.3.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/plugins.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrollTo.min.js"></script>    
    
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.meanmenu.min.js"></script>     
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/twitter/jquery.tweet.min.js"></script>  
    
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.nav.min.js"></script>    
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.tabs.min.js"></script>    
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.sticky.min.js"></script>
    
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.isotope.min.js"></script> 
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.tipTip.minified.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.validate.min.js"></script>
    
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.parallax.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/toucheffects.min.js"></script>
    
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/pace.min.js"></script>

	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
	<script type="text/javascript">
	jQuery.noConflict();
		jQuery(document).ready(function($) {
			$('.tp-banner').show().revolution(
			{
				dottedOverlay:"none",
				delay:9000,
				startwidth:1170,
				startheight:900,
				hideThumbs:200,

				thumbWidth:100,
				thumbHeight:50,
				thumbAmount:3,

				navigationType:"none",
				navigationArrows:"solo",
				navigationStyle:"round",

				touchenabled:"on",
				onHoverStop:"off",

				swipe_velocity: 0.7,
				swipe_min_touches: 1,
				swipe_max_touches: 1,
				drag_block_vertical: false,
				
				
				keyboardNavigation:"off",

				navigationHAlign:"center",
				navigationVAlign:"bottom",
				navigationHOffset:0,
				navigationVOffset:20,

				soloArrowLeftHalign:"left",
				soloArrowLeftValign:"center",
				soloArrowLeftHOffset:20,
				soloArrowLeftVOffset:0,

				soloArrowRightHalign:"right",
				soloArrowRightValign:"center",
				soloArrowRightHOffset:20,
				soloArrowRightVOffset:0,

				shadow:0,
				fullWidth:"off",
				fullScreen:"on",

				spinner:"spinner0",

				stopLoop:"off",
				stopAfterLoops:-1,
				stopAtSlide:-1,

				shuffle:"off",

				
				forceFullWidth:"off",
				fullScreenAlignForce:"off",
				minFullScreenHeight:"",
				hideTimerBar:"on",
				hideThumbsOnMobile:"off",
				hideNavDelayOnMobile:1500,
				hideBulletsOnMobile:"off",
				hideArrowsOnMobile:"off",
				hideThumbsUnderResolution:0,

				fullScreenOffsetContainer: "",
				fullScreenOffset: "",
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				startWithSlide:0				
			});
		
			$('.blog-slider').bxSlider({
				auto: true,
				mode: 'fade',
				pager: ''
			});

		});	//ready
    </script>
    
    <script src="http://www.google.com/jsapi"></script>
	<script src="http://maps.google.com/maps/api/js?libraries=places&key=AIzaSyA7nzmPMWzwv_5XkMr3CkLNU0gAgAvDJxo"></script>
    
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.gmap.min.js"></script>        
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
    
    <?php wp_footer(); ?>
</body>
</html>