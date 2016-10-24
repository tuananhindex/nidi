jQuery(document).ready(function() {
	jQuery(".ToggleSearch").click(function(){	
		$(".SearchBox").slideToggle('fast');
	});
});

jQuery(document).ready(function() {
	jQuery(".ToggleLanguage").click(function(){	
		$(".language-object").slideToggle('fast');
	});
});

jQuery(document).ready(function() {
	jQuery(".ToggleNav").click(function(){
		$(".MobileNav").toggle();
	});
});

jQuery(document).ready(function() {
	$('.nivoSlider').nivoSlider();
});

jQuery(document).ready(function() {
	$(function() {
    	$('.Unslider').unslider({
			speed: 500,               //  The speed to animate each slide (in milliseconds)
			delay: 3000,              //  The delay between slide animations (in milliseconds)
			complete: function() {},  //  A function that gets called after every slide animation
			keys: true,               //  Enable keyboard (left, right) arrow shortcuts
			dots: true,               //  Display dot navigation
			fluid: true              //  Support responsive design. May break non-responsive designs
		});
	});
});

jQuery(document).ready(function() {
    $('.FlexSlider').flexslider({
		animation: "slide",
		controlNav: true, 
		pauseOnHover: true,
		slideshowSpeed: 5000,
		animationSpeed: 1300,                
		start: function(slider){
		  $('body').removeClass('loading');
		}
	});
});

jQuery(document).ready(function() {
$('#isotope').isotope({ 
		filter: '*' ,
		layoutMode: 'masonry',
		animationOptions: {
		duration:750,
		easing: 'linear'}
	});
		
	// cache container
	var $container = $('#isotope');
	// initialize isotope
	$container.isotope({
	  // options...
	});
	
	// filter items when filter link is clicked
	$('#filters a').click(function(){
	  var selector = $(this).attr('data-filter');
	  $container.isotope({ filter: selector });
	  return false;
	});
	
	// filter current items
	var $filter = jQuery("#filters");
	$filter.find('a').click(function() {
		$filter.find('a').removeClass('current');
		$(this).addClass('current');
	});
});

jQuery(document).ready(function() {
$('#PortfolioIsotope').isotope({ 
		filter: '*' ,
		layoutMode: 'masonry',
		animationOptions: {
		duration:750,
		easing: 'linear'}
	});
		
	// cache container
	var $container = $('#PortfolioIsotope');
	// initialize isotope
	$container.isotope({
	  // options...
	});
	
	// filter items when filter link is clicked
	$('#ProtfolioFilters a').click(function(){
	  var selector = $(this).attr('data-filter');
	  $container.isotope({ filter: selector });
	  return false;
	});
	
	// filter current items
	var $filter = jQuery("#ProtfolioFilters");
	$filter.find('a').click(function() {
		$filter.find('a').removeClass('current');
		$(this).addClass('current');
	});
});

jQuery(document).ready(function() {
    $( "#accordion" ).accordion({
      collapsible: true
    });
});

$(document).ready(function() {	
	$('.blockquote').quovolver();
});

$(document).ready(function() {
	$("#OwlSection").owlCarousel({
		items:5,
		autoPlay: 5000,
		navigation: true,
		stopOnHover: true
	});
});

$(document).ready(function(){
	$(window).scroll(function(){
		if ($(this).scrollTop() > 250) {
			$('.BackTop').fadeIn();
		} else {
			$('.BackTop').fadeOut();
		}
	});
	$('.BackTop').click(function(){
		$("html, body").animate({ scrollTop: 0 }, 500);
		return false;
	});
});


$(document).ready(function() {
	if (window.innerWidth >= 768){
		$('.LogoRow').scrollToFixed();
	}
});