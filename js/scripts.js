(function ($, root, undefined) {

	$(function () {

		'use strict';

		// post name
		var singlePostName = $('.post_name').text()
		var headerPostName = $('.post-scroll p')

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
				headerPostName.text(singlePostName)
			} else {
				header.removeClass("scroll");
				headerPostName.text('')
			}
		});

		

	});

})(jQuery, this);
