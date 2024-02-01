<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>lesson 7</title>
</head>
<body>
	<h1>Lesson 7</h1>
	<hr>
	<?php

		$string = "Я люблю PHP";

		echo "<h4>task 1</h4>";
		echo "<p><i>Удалить пробелы из исходной строки</i></p>";

		$string = str_replace(' ', '', $string);
		echo $string;

		// task end
		echo "<hr>";
		// new task

		echo "<h4>task 2</h4>";
		echo "<p><i>Заменить “PHP” на другую строку</i></p>";

		$string = "Я люблю PHP"; // reset
		$str = "JS";

		$string = str_replace('PHP', 'JS', $string);
		echo $string;

		// task end
		echo "<hr>";
		// new task

		echo "<h4>task 3</h4>";
		echo "<p><i>Найти содержит ли строка подстроку PHP</i></p>";

		$string = "Я люблю PHP"; // reset
		var_dump(strpos($string, "PHP"));
		var_dump(str_contains($string, "PHP"));

		// task end
		echo "<hr>";
		// new task

		echo "<h4>task 4</h4>";
		echo "<p><i>Удалить второе слово из исходной строки</i></p>";

		$string = "Я люблю PHP"; // reset
		$pos = strpos($string, " ");
		$len = strpos($string, " ", $pos + 1) - $pos;
		$string = substr_replace($string, "", $pos, $len);

		echo $string;

		// task end
		echo "<hr>";
		// new task

		echo "<h4>task 5</h4>";
		echo "<p><i>Написать регулярку для проверки моб номера телефона для РБ (+375…)</i></p>";

		$phone = "+375333333333";
		var_dump(preg_match("/^\\+375([0-9]{9})$/", $phone));
		

		// task end
		echo "<hr>";
		// new task

		echo "<h4>task 6</h4>";
		echo "<p><i>Регулярное выражение для проверки УРЛа вида /catalog/125/item-12/tovar-name. Урл адрес должен состоять из 4 выражений отделенными слешами, могут содержать спец символы -_№. Количество цифр может быть любым</i></p>";
		
		$url = "/catalog/125/item-12/tovar-name";
		var_dump(preg_match("/^\\/catalog\\/\\d+\\/item\\-\\d+\\/\\w/", $url));
	?>
</body>
</html>