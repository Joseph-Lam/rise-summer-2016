(function($) {

		$(".menu").hide();
		$( ".cross" ).hide();

		$( ".hamburger" ).click(function() {
			$( ".menu" ).slideToggle();
			console.log("it worked");
		});

		// $( ".cross" ).click(function() {
		// 	$( ".menu" ).slideToggle( "slow", function() {
		// 		$( ".cross" ).hide();
		// 		$( ".hamburger" ).show();
		// 	});
		// });
}(jQuery));
