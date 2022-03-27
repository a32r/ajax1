<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="app/assets/css/app.min.css">
		<title>Ajax Test</title>
	</head>
	<body>
		<div class="container">

			<div class="nav">
				<button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".send">
					Ввести данные
				</button>
				<button class="btn btn-warning" type="button" data-bs-toggle="collapse" data-bs-target=".get">
					Вывести данные
				</button>
			</div>

			<div class="content">

				<div class="send card">
					<div>Форма ввода данных</div>
					<div>
						<label for="name">Имя</label>
						<input class="form-control name" type="text" name="name" placeholder="Имя">
					</div>
					<div>
						<label for="email">Email</label>
						<input class="form-control email" type="text" name="email" placeholder="Email">
					</div>
					<div>
						<label for="description">Описание</label>
						<textarea class="form-control description" name="description" rows="5" placeholder="Описание"></textarea>
					</div>
					<input class="btn btn-primary" type="submit" value="Отправить">
				</div>

				<div class="get card">
					<div>Форма входа</div>
					<div>
						<label for="login">Логин (Admin)</label>
						<input class="form-control name" type="text" name="login" placeholder="Admin" value="Admin">
					</div>
					<div>
						<label for="pass">Пароль (111)</label>
						<input class="form-control name" type="password" name="pass" placeholder="111">
					</div>
					<input class="btn btn-primary" type="submit" value="Вход">
				</div>

			</div>

		</div>
		<script src="app/assets/js/app.min.js"></script>
	</body>
</html>
