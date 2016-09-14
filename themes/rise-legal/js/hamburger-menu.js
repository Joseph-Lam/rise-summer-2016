(function($) {
	$('.hamburger, .close-nav').click( function(e){
		$('.main-navigation').toggleClass('open');
	});

	$('.resource-button').click(function(){
		var rangeToOpen = $(this).data('alpha');
		console.log(rangeToOpen);

		$('article').hide();

		$('.'+rangeToOpen).show();

	});



})(jQuery);
