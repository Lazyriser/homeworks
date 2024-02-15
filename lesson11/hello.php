<!DOCTYPE html>
<html>
<head>
	<title>Приветствие</title>
</head>
<body>
<?php
	session_start();
	if (isset($_POST['name'])) {
		$_SESSION['name'] = $_POST['name'];
	}

	if (isset($_SESSION['name'])) {
		echo "Привет, " . $_SESSION['name'] . "!";
	} else {
		echo "Введите свое имя на предыдущей странице.";
	}
?>
</body>
</html>