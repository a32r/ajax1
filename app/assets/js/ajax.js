$('#name').blur(function() {
	name_js = $(this).val();
});

$('#email').blur(function() {
	email_js = $(this).val();
});

$('#description').blur(function() {
	description_js = $(this).val();
});

$('input[value="Отправить"]').click(function(e) {
	e.preventDefault();
	$.ajax({
		url: 'app/php/db_save.php',
		method: 'post',
		data: {
			name: name_js,
			email: email_js,
			description: description_js
		}
	})
		.done(function() {
			if ($('.message').length == 0) {
				$('.container').append('<div class="message">Данные успешно внесены в базу</div>');
				setTimeout(function() {
					$('.message').remove();
				}, 1000);
			};
		});
	name_js = undefined;
	email_js = undefined;
	description_js = undefined;
	$('#name, #email, #description').val('');
});