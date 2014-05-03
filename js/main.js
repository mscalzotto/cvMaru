(function($) {
	$(document).ready(function() {
		animatedHover();
	});

	function animatedHover() {
		$('div#menuButton a.linkNav').mouseover(function() {
			if (!$(this).parent().hasClass('active')) {
				$(this).parent().stop().animate({
					bottom : 0
				}, 200);
			}
		});

		$('div#menuButton a.linkNav').mouseout(function() {
			if (!$(this).parent().hasClass('active')) {
				$(this).parent().stop().animate({
					bottom : "25px"
				}, 200);
			}
		});
	}

})(jQuery);