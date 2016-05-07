$(document).ready(function(){
	
	$("#send-mail").click(function () {
			alert("teste");
			var name = $('input#name').val(); // get the value of the input field
			var error = false;
			if (name == "" || name == " ") {
				$('#err-name').show(500);
				$('#err-name').delay(4000);
				$('#err-name').animate({
					height: 'toggle'
				}, 500, function () {
					// Animation complete.
				});
				error = true; // change the error state to true
			}

			var emailCompare = /^([a-z0-9_.-]+)@([da-z.-]+).([a-z.]{2,6})$/; // Syntax to compare against input
			var email = $('input#email').val().toLowerCase(); // get the value of the input field
			if (email == "" || email == " " || !emailCompare.test(email)) {
				$('#err-email').show(500);
				$('#err-email').delay(4000);
				$('#err-email').animate({
					height: 'toggle'
				}, 500, function () {
					// Animation complete.
				});
				error = true; // change the error state to true
			}


			var comment = $('textarea#comment').val(); // get the value of the input field
			if (comment == "" || comment == " ") {
				$('#err-comment').show(500);
				$('#err-comment').delay(4000);
				$('#err-comment').animate({
					height: 'toggle'
				}, 500, function () {
					// Animation complete.
				});
				error = true; // change the error state to true
			}

			if (error == false) {
				var dataString = $('#contact-form').serialize(); // Collect data from form
				$.ajax({
					type: "POST",
					url: $('#contact-form').attr('action'),
					data: dataString,
					timeout: 6000,
					error: function (request, error) {

					},
					success: function (response) {
						response = $.parseJSON(response);
						if (response.success) {
							$('#successSend').show();
							$("#name").val('');
							$("#email").val('');
							$("#comment").val('');
						} else {
							$('#errorSend').show();
						}
					}
				});
				return false;
			}

			return false; // stops user browser being directed to the php file
		});
});