+(function($) {

$(document).ready(function() {
	var openMenu = $('#open-button'),
	closeMenu = $('#close-button'),
	menu = $('.menu');

	openMenu.click(function() {
		$('body').toggleClass('menuOpen');
		menu.removeClass('hide');
		menu.toggleClass('activeMenu');
		return false;
	});
	closeMenu.click(function() {
		menu.addClass('hide');
		$('body').removeClass('menuOpen');
		return false;
	});
});

})(jQuery);
