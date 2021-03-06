(function($) {
	$(document).ready(function() {
		animatedHover();
		sendContactForm();
	});

	function sendContactForm() {
		var isFormValid;
		
		$('form#maruContacto button').click(function() {
			isFormValid = validateForm();
			
			if (isFormValid) {
				sendAjaxEmail();
				$('div.contacto-texto').hide();
			}
			else {
				return false;
			}
			
		});

	}

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
					bottom : "10px"
				}, 300);
			}
		});
	}

	function validateForm() {
		var form = $('form#maruContacto input');
		var formFields = getFormFields(form);
		var mensaje = {};
		var textRegex = new RegExp('^[A-Za-z\\s]{1,40}$');
		var emailRegex = new RegExp('^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$');
		
		mensaje.isFormValid = true;
		$.each(formFields, function(index, field) {
			$('.errorMessage'+ index +'').remove();
			$('body').append('<div class="errorMessage errorMessage' + index + '"></div>')
			$(field).removeClass('error');
			if (field.value == '') {
				mensaje[index] = 'El campo ' + field.name + ' no puede estar vacío';
				mensaje.isFormValid = false;
				$(field).addClass('error');
				$('.errorMessage'+ index +'').insertBefore($('form#maruContacto'));
				$('.errorMessage'+ index +'').html(mensaje[index]);
			}
			else if ($(field)[0].type == 'text') {
				if (!(textRegex.test(field.value))) {
					mensaje[index] = 'El ' + field.name + ' no es válido';
					mensaje.isFormValid = false;
					$(field).addClass('error');
					$('.errorMessage'+ index +'').insertBefore($('form#maruContacto'));
					$('.errorMessage'+ index +'').html(mensaje[index]);
				}
			}
			else if ($(field)[0].type == 'email') {
				if (!(emailRegex.test(field.value))) {
					mensaje[index] = 'El ' + field.name + ' no es válido';
					mensaje.isFormValid = false;
					$(field).addClass('error');
					$('.errorMessage'+ index +'').insertBefore($('form#maruContacto'));
					$('.errorMessage'+ index +'').html(mensaje[index]);
				}
			}
		});	

		return mensaje.isFormValid;
	}

	function sendAjaxEmail() {
		$('form#maruContacto').submit(function(e) {
			var postData = $(this).serializeArray();
    		var formURL = $(this).attr("action");
			
			$.ajax({
				url: "mail.php",
				type: "POST",
				data: postData,
				success: function(data, textStatus, jqXHR) {
					$('form#maruContacto').remove();
					$('body').append(data);
					$('div.mailSuccess').insertAfter($('div#menuButton'));
				},
				error: function(jqXHR, textStatus, errorThrown) {
					alert('error: ' + errorThrown);
				}
			});
			e.preventDefault();
		});
	}

})(jQuery);