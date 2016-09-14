(function($) {
	$('.hamburger, .close-nav').click( function(e){
		$('.main-navigation').toggleClass('open');
	});

	$('.menu-a-b, .menu-c-d, .menu-e-j, .menu-k-m, .menu-n-p, .menu-q-t, .menu-u-z').click(function(e){
		$('.resources').toggleClass('show');
	})
})(jQuery);
