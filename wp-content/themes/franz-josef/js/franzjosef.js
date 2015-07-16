jQuery(document).ready(function($) {
	
	/* Front page slider */
	if ( ! franzJS.sliderDisable ) {
		$('.carousel').carousel({
			interval: franzJS.sliderInterval * 1000,
			pause	: 'hover'
		});
		$('.carousel .slide-title').each(function(){
			charLimit = 17;
			defaultSize = 5.2;
			minSize = 2.5;
			if ($(this).text().length > charLimit) {
				fontSize = (17 / $(this).text().length) * defaultSize;
				if (fontSize < minSize ) fontSize = minSize;
				$(this).css('font-size',  fontSize + 'vw');
			}
		});
	}
	
	/* Make the navbar smaller as visitor scrolls down */
	$(window).scroll(function() {
		var height = $(window).scrollTop();
		if ( height > 85 ) $('body').addClass('navbar-pinned');
		else $('body').removeClass('navbar-pinned');
	});
	
	/* Changes main menu and logo to full width if they are too wide */
	if ( ( $('.header .logo').outerWidth(true) + $('.header .navbar-nav').outerWidth(true) ) > $('.header').width()) {
		$('.header .navbar-nav').removeClass('navbar-right');
		$('.header').addClass('wide-nav');
		$('body').css('padding-top', $('.header').outerHeight() + 'px' );
	}
	
	/* Go to parent link of a dropdown menu if clicked when dropdown menu is open */
	$('.dropdown-toggle[href]').click(function(){
		if ($(this).parent().hasClass('open') || $(this).parent().hasClass('dropdown-submenu') ) window.location = $(this).attr('href');
	});	
	
	/* Smooth scroll to comment form */
	$('.comment-form-jump a').click(function(e){
		e.preventDefault();
		$('html, body').animate({scrollTop: $($(this).attr('href')).offset().top - 100}, 1000);
	});
	
	/* Add .label and .label-default classes to RSS widget dates */
	$('.widget_rss .rss-date').addClass('label label-default');
});