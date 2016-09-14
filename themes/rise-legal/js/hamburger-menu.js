(function($) {
	$('.hamburger, .close-nav').click( function(e){
		$('.main-navigation').toggleClass('open');
	});

	$('.resource-button').click(function(){
		var rangeToOpen = $(this).data('alpha');
		
		$('button').removeClass('active');
		$(this).addClass('active').data('alpha');

		$('ul').hide();

		$('.'+rangeToOpen).show();

	});



})(jQuery);
