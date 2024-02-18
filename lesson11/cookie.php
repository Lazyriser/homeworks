<!DOCTYPE html>
<html>
<head>
	<title>Приветствие</title>
</head>
<body>
	<?php
	if (isset($_POST['name'])) {
		setcookie('name', $_POST['name'], time() + 3600); // Устанавливаем cookie на 1 час
	}

	if (isset($_COOKIE['name'])) {
		echo "Привет, " . $_COOKIE['name'] . "!";
	} else {
		echo "Введите свое имя на предыдущей странице.";
	}
	?>
</body>
</html>