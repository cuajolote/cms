$(document).ready(function() {

	$('form').submit(function(e) {
		e.preventDefault();
		
		var data = $(this).serializeArray();
		data.push({name: 'tag', value: 'login'});
		console.log(data);

		$.ajax({
			url: 'process.php',
			type: 'post',
			dataType: 'json',
			data: data,
			beforeSend: function() {
				$('.fas').css('display','inline-block');
			}
		})
		.done(function() {  //true
			$('span').html("Bienvenido");
		})
		.fail(function() {  //false
			$('span').html("Usuario o contraseña incorrecto");
		})
		.always(function() {
			setTimeout(function() {
				$('.fas').hide();
			}, 700);
		});
		
	})
})