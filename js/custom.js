"use strict";

//DISCOUNT FORM
//-------------------------------------------------
(function($){
	var validateEmail = function(email) {
		var regexp = /^[0-9a-zA-Z]+([0-9a-zA-Z]*[-._+])*[0-9a-zA-Z]+@[0-9a-zA-Z]+([-.][0-9a-zA-Z]+)*([0-9a-zA-Z]*[.])[a-zA-Z]{2,6}$/;
		return regexp.test(email);
	}

	$('#discount_form').on('submit', function(e) {
		e.preventDefault();
		var domain = document.location.hostname,
		discount_code = 'dsc_code=first15',
		email = $('#discount_email').val(),
		email_param = validateEmail(email) ? 'email=' + email + '&' : '';

		document.location.href = domain + '/order?' + email_param + discount_code;
	});
})(jQuery);

//SLICKNAV MENU
//-------------------------------------------------
(function($){
	$('#nav').slicknav({prependTo: '#mobile_nav'});

	//create additional menu near slicknav menu
	$('#mobile_nav').find('.mobile-nav-show').prependTo('#mobile_nav').wrapAll('<ul class="mobile-nav-visible" />');

	//close slicknav menu after click outside an element
	$(document).on('click', function(event) {
		if(!$(event.target).closest('.slicknav_menu').length && !$(event.target).is('.slicknav_menu')) {
			if($('.slicknav_open').size()) {
				$('#nav').slicknav('close');
			}
		}
	})
})(jQuery);

//TOP SLIDER
//-------------------------------------------------
(function($){
	$('#top_block').owlCarousel({
		loop: true,
		nav: true,
		navText: ['<i class="f_icon-left-open"></i>', '<i class="f_icon-right-open"></i>'],
		autoplay: true,
		autoplayTimeout: 7000,
		autoplayHoverPause: true,
		responsive: {
			0: {items:1}
		}
	});
})(jQuery);

//SAMPLES SLIDER
//-------------------------------------------------
(function($){
	$('#samples_slider').owlCarousel({
		loop: true,
		nav: true,
		navText: ['<i class="f_icon-left-open"></i>', '<i class="f_icon-right-open"></i>'],
		dots: false,
		autoplay: true,
		autoplayTimeout: 7000,
		autoplayHoverPause: true,
		responsive: {
			0: {items:1},
			768: {items:2},
			992: {items:3}
		}
	});
})(jQuery);

//PARTNERS SLIDER
//-------------------------------------------------
(function($){
	$('#partners_slider').owlCarousel({
		loop: true,
		margin: 10,
		smartSpeed: 50,
		autoplay: true,
		autoplayTimeout: 7000,
		autoplayHoverPause: true,
		responsive: {
			0: {items:3},
			768: {items:4},
			992: {items:6}
		}
	});
})(jQuery);

//COUNTERS
//-------------------------------------------------
$('.counter').counterUp({
	delay: 20,
	time: 2000
});

//SCROLL TOP BUTTON
//-------------------------------------------------
(function($){
	var findWindowHeight = function(){
		return windowHeight = $(window).height();
	};

	var addScrollButton = function(){
		if ($(window).scrollTop() > windowHeight && !$('#scrollButton').size()) {
			var scrollButton = '<div id="scrollButton" class="scroll-button"/>';
			$('body').append(scrollButton);
		}else if($(window).scrollTop() < windowHeight && $('#scrollButton').size()){
			$('#scrollButton').remove();
		}
	};

	var scrollPage = function(){
		$('body, html').animate({scrollTop : 0}, 800);
	};

	var windowHeight = findWindowHeight();

	$(window).scroll(addScrollButton);
	$(window).resize(findWindowHeight);

	$('body').on('click', '#scrollButton', scrollPage);
})(jQuery);

//FIXED HEADER
//-------------------------------------------------
(function($){
	var fixedItem = $('#header'),
			fixedClass = 'fixed',
			minMarginTop;

	if (fixedItem.size()){
		var scrollTopValue = function() {
			return $(window).scrollTop()
		};

		var fixedFunc = function() {
			fixedItem.addClass(fixedClass).css({top: 0});
			$('body').css({marginTop:minMarginTop})
		};

		var unfixedFunc = function() {
			fixedItem.removeClass(fixedClass).css({top:-minMarginTop});
			$('body').css({marginTop:0});
		};

		var toggleFixedFunc = function() {
			if ($(window).width() < 468) {
				unfixedFunc();
				return;
			};

			minMarginTop = fixedItem.height();

			if ( scrollTopValue() > minMarginTop && scrollTopValue() < minMarginTop * 2) {
				fixedFunc();
			}
			else if (scrollTopValue() === 0) {
				unfixedFunc();
			}
		};

		if ($(window).width() >= 468) {
			fixedFunc();
		};

		$(window).scroll(toggleFixedFunc);
		$(window).resize(toggleFixedFunc);
	}
})(jQuery);
