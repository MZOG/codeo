(function ($, root, undefined) {

	$(function () {

		'use strict';

		// handle nav button
		var $hamburger = $(".hamburger");
		var $navigation = $("nav");
		$hamburger.on("click", function (e) {
			$hamburger.toggleClass("is-active");
			$navigation.toggleClass('is-active');
		});

		// handle nav class
		var header = $(".header");
		$(window).scroll(function () {
			var scroll = $(window).scrollTop();

			if (scroll >= 30) {
				header.addClass("scroll");
			} else {
				header.removeClass("scroll");
			}
		});

	});

})(jQuery, this);
