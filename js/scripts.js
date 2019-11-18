(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		var $hamburger = $(".hamburger");
		var $navigation = $("nav");
		$hamburger.on("click", function(e) {
			$hamburger.toggleClass("is-active");
			$navigation.toggleClass('is-active');
		});
		
	});
	
})(jQuery, this);
