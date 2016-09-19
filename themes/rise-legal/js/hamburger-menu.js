(function($) {
	
	$(document).ready(function(){
	//Script to open nav menu on mobile
		$('.hamburger, .close-nav').click( function(e){
			$('.main-navigation').toggleClass('open');
		});
	//Script to show/hide people groups
		$('.about-nav-link').click(function(){
			var contentToOpen = $(this).data('about-nav');

			$('div').removeClass('show');
			$(this).addClass('show').data('about-nav');

			$('.group-list').hide();

			$('.'+ contentToOpen).show();
		})

	//Script to show/hide resources
		$('.resource-button').click(function(){
			var rangeToOpen = $(this).data('alpha');
			
			$('button').removeClass('active');
			$(this).addClass('active').data('alpha');

			$('.resource-list').hide();

			$('.'+ rangeToOpen).show();

		});

	//Script to show/hide Page one content of Legal Contact Form
		$('#gform_next_button_1_2').click(function() {
			console.log('this button was clicked');
			$('.show').addClass('disappear');
			console.log('this content is hidden now!');
			
		})


	});

})(jQuery);
