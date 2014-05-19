(function($) {
	$(document).ready(function() {
		animatedHover();
		//sendAjaxEmail();
		validateForm();


	});

	function getFormFields(form) {
		var field = {};
		
		form.each(function(index, value) {
			
			switch (index) {
				case 0 : 
					field[index] = value;
					break;
				case 1 : 
				    field[index] = value;
				    break;
				case 2 :
					field[index] = value;
					break;
			}
		});
		return field;
	}

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

	function validateForm() {
		var form = $('form#maruContacto input');
		var formFields = getFormFields(form);
		var mensaje = {};

		$.each(formFields, function(index, field) {
		
			if (field.value == '') {
				mensaje[index] = 'El campo ' + field.name + ' no puede estar vacío.';
				mensaje.isFormValid = false;
				$(field).css('border', '1px solid red');
			}
			else {
				mensaje.isFormValid = true;
			}
		});
	}

	function sendAjaxEmail() {
		$('form#maruContacto').submit(function(e) {
			var postData = $(this).serializeArray();
    		var formURL = $(this).attr("action");
			$.ajax({
				url: "../PHPMailer_5.2.0/mail.php",
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
		});
	}

})(jQuery);