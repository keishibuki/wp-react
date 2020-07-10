jQuery(document).ready(function($){

/**
 * SPメニュー
 */
var applySpMenu = function() {
	var $menuBtn = $('#btn-hamburger');
	var $spMenu = $('#sp-menu');
	var $parent = $('.menu-item-has-children');
	$menuBtn.on('click', function() {
		$menuBtn.toggleClass("opening");
		$spMenu.toggleClass("opening");
	})

	$parent.prepend('<div class="btn-open"></div>');

	$('.btn-open').on('click', function() {
		$(this).toggleClass("opening");
		$(this).siblings('.sub-menu').toggleClass("opening");
	})

}

applySpMenu();

var $ofImgs = $('.ofi');
objectFitImages($ofImgs);

});
