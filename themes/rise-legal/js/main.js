(function($) {
	
	$(document).ready(function(){
	//Script to open nav menu on mobile
		$('.hamburger').click( function(e){
			$('.main-navigation').addClass('open');
		});
		$('.close-nav, .site-content').click( function(e){
			$('.main-navigation').removeClass('open');
		});


	//Script to show/hide people groups
		$('.about-nav-link').click(function(){
			var contentToOpen = $(this).data('about-nav');

			$('div').removeClass('show');
			$(this).addClass('show').data('about-nav');

			$('.group-master-item').addClass('hidden');

			$('.'+ contentToOpen).removeClass('hidden');
		})

	//Script to show/hide resources
		$('.resource-button').click(function(){
			var rangeToOpen = $(this).data('alpha');
			
			$('button').removeClass('active');
			$(this).addClass('active').data('alpha');

			$('.resource-list').hide();

			$('.'+ rangeToOpen).show();

		});
	});

})(jQuery);
