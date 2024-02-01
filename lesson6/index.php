<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>lesson 6</title>
</head>
<body>
	<h1>Lesson 6</h1>
	<hr>
	<?php
		
		$string = "я люблю обучаться PHP";

		$array = [
			"name" => "Fred",
			"remove" => true,
			"additional_params" => [
				"is_married" => false,
				"country" => "France",
				"born" => "10.09.1982",
			]
		];
		

		echo "<h4>task 1</h4>";
		echo "<p><i>Привести все слова в исходном предложении к верхнему регистру</i></p>";
		
		echo mb_strtoupper( $string );
		
		// task end
		echo "<hr>";
		// new task

		echo "<h4>task 2</h4>";
		echo "<p><i>Написать функцию, которая которая на вход принимает исходное предложение и вторым аргументом любую строку. Далее внутри функции найти слово PHP и заменить его на слово со второго аргумента и вернуть результат выполнения функции.</i></p>";

		function replace_php( $string, $text ) {
			$replace_text = str_replace("PHP", $text, $string);
			return $replace_text;
		}

		$text = "ТЕКСТ";
		echo replace_php( $string, $text);

		// task end
		echo "<hr>";
		// new task

		echo "<h4>task 3</h4>";
		echo "<p><i>Посчитать количество слов в исходной строке</i></p>";

		echo "Количество слов " . str_word_count($string, 0, "АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯабвгдеёжзийклмнопрстуфхцчшщъыьэюя");

		// task end
		echo "<hr>";
		// new task

		echo "<h4>task 4</h4>";
		echo "<p><i>Посчитать количество всех символов исходной строки</i></p>";

		echo "Количество символов " . strlen($string);
		
		// task end
		echo "<hr>";
		// new task

		echo "<h4>task 5</h4>";
		echo "<p><i>Удалить второй элемент из массива</i></p>";
		unset($array["remove"]);
		print_r($array);
		
		// task end
		echo "<hr>";
		// new task
		
		echo "<h4>task 6</h4>";
		echo "<p><i>Найти возраст пользователя (на сегодняшний день)</i></p>";

		$birthdate = $array["additional_params"]["born"];
		$birthdate = DateTime::createFromFormat("d.m.Y", $birthdate);
		$currentdate = new DateTime();
		$diff = $birthdate->diff($currentdate);
		$age = $diff->y;
		echo "Возраст пользователя: $age лет";

		// task end
		echo "<hr>";
		// new task
		
		echo "<h4>task 7</h4>";
		echo "<p><i>Отсортировать массив по ключу (Использовать встроенные функции, без циклов!)</i></p>";

		ksort($array);
		print_r($array);

		// task end
		echo "<hr>";
		// new task
		
		echo "<h4>task 8</h4>";
		echo "<p><i>Добавить информацию о стране пользователя используя новый массив (название, столица, часовой пояс и пр.) и поместить данный массив вместо значения country</i></p>";

		$country_array = [
			"name" => "Страна",
			"capital" => "Столица",
			"timezones" => "Часовой пояс",
		];

		$array["additional_params"]["country"] = $country_array;
		print_r($array);
		
		// task end
		echo "<hr>";
		// new task
		
		echo "<h4>task 9</h4>";
		echo "<p><i>Объединить текущий массив с массивом [“child” => null] (встроенная функция объединения из занятия)</i></p>";

		$child_array = ["child" => null];
		$add_array = array_merge($array, $child_array);
		print_r($add_array);

		// task end
		echo "<hr>";
		// new task
		
		echo "<h4>task 10</h4>";
		echo "<p><i>Используя дату рождения превратить её в массив и добавить ключи соответствующие значению (день, месяц, год) поставить данный массив на вместо значения born (explode для массивов))</i></p>";

		$birthdate = $array["additional_params"]["born"];
		$birthdate_array = explode(".", $birthdate);
		$keys = array("day", "month", "year");
		$birthdate_array = array_combine($keys, $birthdate_array);
		$array["additional_params"]["born"] = $birthdate_array;
		print_r($array);

		// task end
		echo "<hr>";
		// new task
		
		echo "<h4>task 11</h4>";
		echo "<p><i>Вывести максимальное и минимальное число из даты рождения пользователя</i></p>";

		$birthdate = $array["additional_params"]["born"];
		$birthdate = date("d.m.Y", mktime(0, 0, 0, $birthdate["month"], $birthdate["day"], $birthdate["year"]));
		echo "Дата рождения: $birthdate\n";
		echo "Максимальное число: " . max(explode(".", $birthdate)) . "\n";
		echo "Минимальное число: " . min(explode(".", $birthdate)) . "\n";

		// task end
		echo "<hr>";
		// new task
		
		echo "<h4>task 12</h4>";
		echo "<p><i>Отсортировать числа из даты рождения пользователя по возрастанию</i></p>";

		$birthdate_array = explode(".", $birthdate);
		sort($birthdate_array);
		print_r($birthdate_array);

	?>
</body>
</html>