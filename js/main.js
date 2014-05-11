(function($) {
	$(document).ready(function() {
		animatedHover();
		sendAjaxEmail();
	});

	function animatedHover() {
		$('div#menuButton a.linkNav').mouseover(function() {
			if (!$(this).parent().hasClass('active')) {
				$(this).parent().stop().animate({
					bottom : 0
				}, 300);
			}
		});

		$('div#menuButton a.linkNav').mouseout(function() {
			if (!$(this).parent().hasClass('active')) {
				$(this).parent().stop().animate({
					bottom : "25px"
				}, 300);
			}
		});
	}

	function sendAjaxEmail() {
		$('form#maruContacto').submit(function(e) {
			var postData = $(this).serializeArray();
    		var formURL = $(this).attr("action");
			$.ajax({
				url: "../mail.php",
				type: "POST",
				data: postData,
				success: function(data, textStatus, jqXHR) {
					alert('data: ' + data);
				},
				error: function(jqXHR, textStatus, errorThrown) {
					alert('error: ' + errorThrown);
				}
			});
			e.preventDefault();
		    e.unbind();
		});
	}

})(jQuery);