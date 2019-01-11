
$(document).ready(function() {

	$('form').submit(function(e) {
		e.preventDefault();
		var data = $(this).serializeArray();
		data.push({name: 'tag', value: 'login'});

		$.ajax({
			url: 'process.php',
			type: 'post',
			dataType: 'json',
			data: data,
			beforeSend: function() {
				$('.fas').css('display','inline-block');
			}
		})
		.done(function() {  
			$('span').html("Bienvenido");
		})
		.fail(function() {  
			$('span').html("Usuario o contraseña incorrecto");
		})
		.always(function() {
			setTimeout(function() {
				$('.fas').hide();
			}, 700);
		});
		
	})
})