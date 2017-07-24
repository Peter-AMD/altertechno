jQuery.noConflict();
jQuery(document).ready(function($){
	
	//LOADING BAR...
	Pace.on("done", function(){
		$(".cover").fadeOut(500);
		$(".pace").remove();
	});
	
	//STICKY MENU...
	$(".dt-sticky-menu").sticky({ topSpacing: 0 });
	
	//NICE SCROLL...
	// $("html").niceScroll({ zindex: 999999, cursorborder: "1px solid #424242" });
	
	//ONE PAGE NAV...
	if($('.menu-light').length == 0) {
		$('#main-menu').onePageNav({
			currentClass : 'current_page_item',
			filter		 : ':not(.external)',
			scrollSpeed  : 750,
			scrollOffset : 86
		});
	}
	
	//UI TO TOP PLUGIN...
	$().UItoTop({ easingType: 'easeInOutCirc' });
	
	 //MINI MOBILE MENU...
    $('nav#main-menu').meanmenu({
        meanMenuContainer: $('header .menu-main-menu-container'),
        meanRevealPosition: 'left',
        meanScreenWidth: 767,
        meanMenuClose: "<span/><span/><span/>",
		onePage: true
    });
	
	//TOGGLE PANEL...
	$("#toggle-panel").click(function(){
		if($('#toggle i').hasClass('fa-minus')) {
			$('#toggle i').removeClass('fa-minus');
			$('#toggle i').addClass('fa-plus');
		} else {
			$('#toggle i').removeClass('fa-plus');
			$('#toggle i').addClass('fa-minus');
		}

		$("#panel").slideToggle("medium");
		return false;
	}); 
	
	//Scroll Down...
	$('#home #scrolldown a').click(function(){
		   $.scrollTo('#about', 1400, { offset: { top: -85 }});
		   return false;
   });
   
	//Scroll Down...
	$('#sb-site #home #scrolldown a').click(function(){
		   $.scrollTo('#about', 1400, { offset: { top: -64 }});
		   return false;
   });
	
	"use strict";
	
	//TABS...
	if(jQuery('ul.dt-sc-tabs-frame').length > 0) {
		jQuery('ul.dt-sc-tabs-frame').tabs('> .dt-sc-tabs-frame-content');
	}

	if(jQuery('ul.dt-sc-tabs-vertical-frame').length > 0) {
		jQuery('ul.dt-sc-tabs-vertical-frame').tabs('> .dt-sc-tabs-vertical-frame-content', {
	      effect: 'fade'
      });
	}

	 /*Toggle shortcode*/
	jQuery('.dt-sc-toggle').toggle(function(){ jQuery(this).addClass('active'); },function(){ jQuery(this).removeClass('active'); });
	jQuery('.dt-sc-toggle').click(function(){ jQuery(this).next('.dt-sc-toggle-content').slideToggle(); });
	jQuery('.dt-sc-toggle-frame-set').each(function(){
		var $this = jQuery(this),
		$toggle = $this.find('.dt-sc-toggle-accordion');
		$toggle.click(function(){
			if( jQuery(this).next().is(':hidden') ) {
				$this.find('.dt-sc-toggle-accordion').removeClass('active').next().slideUp();
				jQuery(this).toggleClass('active').next().slideDown();
			}
		return false;
	});
	//Activate First Item always
	$this.find('.dt-sc-toggle-accordion:first').addClass("active");
	$this.find('.dt-sc-toggle-accordion:first').next().slideDown();
	});/* Toggle Shortcode end*/ 
	
	/*Toggle shortcode*/
	jQuery('.dt-sc-toggle').toggle(function(){ jQuery(this).addClass('active'); },function(){ jQuery(this).removeClass('active'); });
	jQuery('.dt-sc-toggle').click(function(){ jQuery(this).next('.dt-sc-toggle-content').slideToggle(); });
	jQuery('.dt-sc-toggle-set').each(function(){
		var $this = jQuery(this),
		$toggle = $this.find('.dt-sc-toggle-accordion');
		$toggle.click(function(){
			if( jQuery(this).next().is(':hidden') ) {
				$this.find('.dt-sc-toggle-accordion').removeClass('active').next().slideUp();
				jQuery(this).toggleClass('active').next().slideDown();
			}
		return false;
	});
	//Activate First Item always
	$this.find('.dt-sc-toggle-accordion:first').addClass("active");
	$this.find('.dt-sc-toggle-accordion:first').next().slideDown();
	});/* Toggle Shortcode end*/ 
	
	$(window).load(function() {

		//Portfolio isotope
		var $container = $('.dt-sc-portfolio-container');
		if( $container.length) {
			
			$width = $container.hasClass("no-space") ? 0 : 20;

			$(window).smartresize(function(){
				$container.css({overflow:'hidden'}).isotope({itemSelector : '.column',masonry: { gutterWidth: $width } });
			});
			
			$container.isotope({
			  filter: '*',
			  resizesContainer: true,
			  masonry: { gutterWidth: $width },
			  animationOptions: { duration: 750, easing: 'linear', queue: false  }
			});
			
		}
		
		if($("div.dt-sc-sorting-container").length){
			$("div.dt-sc-sorting-container a").click(function(){
				$width = $container.hasClass("no-space") ? 0 : 20;				
				$("div.dt-sc-sorting-container a").removeClass("active-sort");
				var selector = $(this).attr('data-filter');
				$(this).addClass("active-sort");
				$container.isotope({
					filter: selector,
					masonry: { gutterWidth: $width },
					animationOptions: { duration:750, easing: 'linear',  queue: false }
				});
			return false;	
			});
		}
		//Portfolio isotope End
		
		//Blog
		if( $(".apply-isotope").length ){
			$(".apply-isotope").isotope({itemSelector : '.column',transformsEnabled:false,masonry: { gutterWidth: 20} });
		}//Blog
		
		funafterwindowload();
				
	});	
	
	/*Tooltip*/
	 if(jQuery(".dt-sc-tooltip-bottom").length){
		jQuery(".dt-sc-tooltip-bottom").each(function(){ jQuery(this).tipTip({maxWidth: "auto"}); });
	 }
	  
	 if(jQuery(".dt-sc-tooltip-top").length){
		jQuery(".dt-sc-tooltip-top").each(function(){ jQuery(this).tipTip({maxWidth: "auto",defaultPosition: "top"}); });
	 }
	  
	 if(jQuery(".dt-sc-tooltip-left").length){
		jQuery(".dt-sc-tooltip-left").each(function(){ jQuery(this).tipTip({maxWidth: "auto",defaultPosition: "left"}); });
	 }
	  
	 if(jQuery(".dt-sc-tooltip-right").length){
		jQuery(".dt-sc-tooltip-right").each(function(){ jQuery(this).tipTip({maxWidth: "auto",defaultPosition: "right"}); });
	 }/*Tooltip End*/
	 
	 
	 //Twitter Tweets...
	if($('.tweets_container').length > 0) {	
		$(".tweets_container").tweet({
			modpath: 'js/twitter/',
			username: "envato",
			count: 3,
			loading_text: "loading tweets...",
			template: "{text} {time}"
		});
	}
	
	//Tweets CarouFred...
	if($('.tweets_container').length > 0) {
		$('.tweets_container .tweet_list').carouFredSel({
			width: 'auto',
			height: 'auto',
			scroll: 1,
			direction: 'up',
			items: {
				height: 'auto',
				visible: {
					min: 1,
					max: 1
				}
			}
		});
	}
	
	//Animate Number...
	$('.dt-sc-num-count').each(function(){
	  $(this).one('inview', function (event, visible) {
		  if(visible === true) {
			  var val = $(this).attr('data-value');
			  $(this).animateNumber({ number: val	}, 1000);
		  }
	  });
	});
	
	//Parallax Sections...
	$('.dt-sc-parallax-section').each(function(){
		$(this).bind('inview', function (event, visible) {
			if(visible === true) {
				$(this).parallax("50%", 0.3, true);
			} else {
				$(this).css('background-position', '');
			}
		});
	});

	//Contact Map...
	var $map = $('#contact_map');
	if( $map.length ) {
		$map.gMapResp({
			address: 'Iamdesigning, 1/52,3/53, Lal Bahadhur Colony,Shringar Nagar Road, Near Gopal Naidu School, Peelamedu, Coimbatore, TN 641004',
			zoom: 16,
			markers: [
				{ 'address' : 'Iamdesigning, 1/52,3/53, Lal Bahadhur Colony,Shringar Nagar Road, Near Gopal Naidu School, Peelamedu, Coimbatore, TN 641004' }
			],
			scrollwheel: false,
			styles: [ { "stylers": [ { "featureType": "all" }, { "saturation": -100 }, { "gamma": 0.50 }, {"lightness": 30 } ] } ]
		});
	}
		
	// Portfolio load more
	var j = 1;
	$('.load-more').click(function(){
	
		if(j == 4) {
			$('.load-more').text('Stop!! No more posts to load.').css({"cursor":"default"});;
		} else {

			$.ajax({
				type: "POST",
				url: "content/portfolio-"+j+".html",
				dataType: "html",
				cache: false,
				msg : '',
				beforeSend: function(){
					$('.load-more').html('Loading...');
				},
				success: function(msg){
					
					$('.dt-sc-portfolio-container').append( $(msg) ).isotope( 'appended', $(msg) );
					$('.dt-sc-portfolio-container').isotope( 'reloadItems' ).isotope();
					$(window).trigger( 'resize' );
				},
				complete: function(){
					if(j == 3) {
						$('.load-more').text('No more posts to load!').css({"cursor":"default"});;
					} else {
						$('.load-more').text('Load More');
					}
					j++;
				} 
			});
			
		}
		
	});

	$('form[name="frmnewsletter"]').validate({
		rules: { 
			mc_email: { required: true, email: true }
		},
		errorPlacement: function(error, element) {
			element.parent('p').addClass('error');
		}
	});

	//CONTACT FORM AJAX SUBMIT...
	$('form[name="enqform"]').submit(function () {
		
		var This = $(this);
		
		if($(This).valid()) {
			var action = $(This).attr('action');

			var data_value = unescape($(This).serialize());
			$.ajax({
				 type: "POST",
				 url:action,
				 data: data_value,
				 error: function (xhr, status, error) {
					 confirm('The page save failed.');
					 alert(error);
				   },
				  success: function (response) {
					$('#ajax_contactform_msg').html(response);
					$('#ajax_contactform_msg').slideDown('slow');
					if (response.match('success') != null) $(This).slideUp('slow');
				 }
			});
		}
		return false;
    });
	$('form[name="enqform"]').validate({
	   	onfocusout: function(element)
		{	
			$(element).valid();
		},
		rules: { 
			txtname: { required: true },
			txtemail: { required: true, email: true },
			txtmessage: { required: true }
		}
	});
	
	$('form[name="frmcomment"]').validate({
	   	onfocusout: function(element)
		{	
			$(element).valid();
		},
		rules: { 
			author: { required: true },
			email: { required: true, email: true },
			website: { required: false }
		},
	});
	
	$('form[name="frmsearch"]').validate({
		rules: { 
			srch_txt: { required: true }
		},
		errorPlacement: function(error, element) {
			element.parent('p').addClass('error');
		}
	});
	
	// animate css + jquery inview configuration
	(function ($) {
		"use strict";
		
		$(".animate").each(function () {
			$(this).bind('inview', function (event, visible) {
				var $delay = "";
				var $this = $(this),
					$animation = ($this.data("animation") !== undefined) ? $this.data("animation") : "slideUp";
				$delay = ($this.data("delay") !== undefined) ? $this.data("delay") : 300;
	
				if (visible === true) {
					   setTimeout(function () { $this.addClass($animation); }, $delay);
			   } else {
					   setTimeout(function() { $this.removeClass('animate'); } );
			   }
			});
		});
		
		$('.progressbar').each(function(){
			$(this).bind('inview', function (event, visible) {
				var t = $(this),
					dataperc = t.attr('data-perc'),
					lblpos = dataperc;
				t.find('.bar').animate({width:dataperc+'%'}, 800);
				t.find('.label').animate({left:lblpos+'%'}, 800);
				t.find('.perc').text(dataperc+'%');
			});
		});
		
	})(jQuery);
	

	 /*CUSTOM JS*/

	 var events = $(".events-ul li");
	 events.addClass("events-calendar");

	$('.menu-item-91 a').click(function()
	{	
		var getUrl = window.location;
		var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
		window.location.href = baseUrl;
		// alert();
	});

	$("#es_txt_name_pg").attr("placeholder", "Enter Name");
	$("#es_txt_email_pg").attr("placeholder", "Enter Email");

	// Javascript

	

});

  jQuery(window).load(function() {

  	   if (navigator.userAgent.match(/(Android|iPod|iPhone|iPad|IEMobile|Opera Mini)/)) {
  	   	 jQuery(".dt-sc-fullwidth-video-section").each(function(){
  	   	 	jQuery(this).find(".dt-sc-mobile-image-container").show();
  	   	 	jQuery(this).find(".dt-sc-video").remove();
  	   	 });
  	   }
	  
	  //Testimonial Carousel
	  if( jQuery('.dt-sc-testimonial-carousel').length ) {
		  jQuery('.dt-sc-testimonial-carousel').each(function(){
			  var pagger = jQuery(this).parents(".dt-sc-testimonial-carousel-wrapper").find("div.carousel-arrows"),
			      next = pagger.find("a.testimonial-next"),
				  prev = pagger.find("a.testimonial-prev") ;
			  		
			  jQuery(this).carouFredSel({
				  responsive:true,
				  auto:false,
				  width:'100%',
				  height: 'variable',
				  pagination: "#pager",
				  scroll:1,
				  items:{ 
				  	width:600,
				  	height: 'variable',
				  	visible: {min: 1,max: 1} 
				  },
				  prev:prev,
				  next:next
			  });
		  });
	 }

	// Clients Carousel
	if( jQuery('.dt-sc-partner-carousel').length) {
		jQuery('.dt-sc-partner-carousel').each(function(){
			  var pagger = jQuery(this).parents(".dt-sc-partner-carousel-wrapper").find("div.carousel-arrows"),
			      next = pagger.find("a.carousel-next"),
				  prev = pagger.find("a.carousel-prev");

			jQuery(this).carouFredSel({
				  responsive:true,
				  auto:true,
				  width:'100%',
				  height: 'variable',
				  scroll:1,
				  items:{
				  	height: 'variable',
				  	visible: {min: 1,max: 4} 
				  },
				  prev:prev,
				  next:next
			});

		});
	}// Clients Carousel End
	
	// Team Carousel
	if( jQuery('.dt-sc-team-carousel').length) {
		jQuery('.dt-sc-team-carousel').each(function(){
			  var pagger = jQuery(this).parents(".dt-sc-team-carousel-wrapper").find("div.carousel-arrows"),
			      next = pagger.find("a.carousel-next"),
				  prev = pagger.find("a.carousel-prev");

			jQuery(this).carouFredSel({
				  responsive:true,
				  auto:false,
				  width:'100%',
				  height: 'variable',
				  scroll:1,
				  items:{
				  	height: 'variable',
				  	visible: {min: 1,max: 4} 
				  },
				  prev:prev,
				  next:next
			});

		});
	}// Clients Carousel End	
	
	//DONUT CHART...
	jQuery('.donutchart').each(function(){
		jQuery(this).one('inview', function (event, visible) {
			if(visible === true) {
				var bgcolor, fgcolor = "";
				
				if(jQuery(this).attr('data-bgcolor') !== "") bgcolor = jQuery(this).attr('data-bgcolor'); else bgcolor = '#fdfdfd';
				if(jQuery(this).attr('data-fgcolor') !== "") fgcolor = jQuery(this).attr('data-fgcolor'); else fgcolor = '#959595';
				
				jQuery(this).donutchart({'size': 160, 'donutwidth': 8, 'fgColor': fgcolor, 'bgColor': bgcolor, 'textsize': 15 });
				jQuery(this).donutchart('animate');
			}
		});
	});	
	
});

function funafterwindowload() {
	//Service Carousel
	if( jQuery('.dt-sc-service-carousel').length ) {
		
		var $l = jQuery(window).width();
		var $tt = '';
		if($l < 767) { $n = 1; $tt = ["PHP","PHP","PHP","PHP","HTML","HTML","HTML","HTML","CSS","CSS","CSS","CSS"]; } else { $n = 4; $tt = ["PHP","HTML","CSS"]; }
		
		jQuery('.dt-sc-service-carousel').each(function(){
			jQuery(this).carouFredSel({
				responsive:true,
				auto:false,
				width: '100%',
				height: 'variable',
				pagination: {
					container: "#carouselnav",
					anchorBuilder: function(nr) {
							var tooltip = $tt;
							return '<a href="#'+nr+'" title="'+tooltip[nr-1]+'" class="carouselnav-pager dt-sc-tooltip-top"><span>'+nr+'</span></a>';
						},
				},
				scroll :$n,
				items:{
					height: 'variable',
					visible: 
					{
						min: $n,
						max: $n
					} 
				},
			});
		});
	}
	
	 if(jQuery(".carouselnav-pager.dt-sc-tooltip-top").length){
		jQuery(".carouselnav-pager.dt-sc-tooltip-top").each(function(){ jQuery(this).tipTip({maxWidth: "auto",defaultPosition: "top"}); });
	 }
}

//MeanMenu Custom Scroll...
function funtoScroll(x, e) {
	"use strict";
	var str = new String(e.target);
	var pos = str.indexOf('#');
	var t = str.substr(pos);
	
	var eleclass = jQuery(e.target).prop("class");
	
	if(eleclass == "external") {
		window.location.href = e.target;	
	} else {
		jQuery.scrollTo(t, 750, { offset: { top: -44 }});
	}
	
	jQuery(x).parent('.mean-bar').next('.mean-push').remove();		
	jQuery(x).parent('.mean-bar').remove();

	jQuery('nav#main-menu').meanmenu({
		meanMenuContainer :  jQuery('header .menu-main-menu-container'),
		meanRevealPosition:  'left',
		meanScreenWidth   :  767,
        meanMenuClose : "<span /><span /><span />",
		onePage: true
	});
	
	e.preventDefault();

}(jQuery);