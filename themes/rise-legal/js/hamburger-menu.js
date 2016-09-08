(function($) {
	console.log("hello");
		$(".menu").hide();
		$( ".cross" ).hide();

		$( ".hamburger" ).click(function() {
			$( ".menu" ).slideToggle( "slow", function() {
				$( ".hamburger" ).hide();
				$( ".cross" ).show();
			});
		});

		$( ".cross" ).click(function() {
			$( ".menu" ).slideToggle( "slow", function() {
				$( ".cross" ).hide();
				$( ".hamburger" ).show();
			});
		});
}(jQuery));
