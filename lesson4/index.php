<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>lesson 3</title>
</head>
<body>
	<h1>Lesson 3</h1>
	<hr>
	<?php
		echo "<h4>task 1</h4>";
		echo "<p><i>Написать функцию для нахождения площади прямоугольника</i></p>";

		function area($length, $width) {
			return $length * $width;
		}

		$length = 15;
		$width = 5;
		$area = area($length, $width);
		echo "При высоте $length и ширине $width площадь прямоугольника равна $area";
		
		// task end
		echo "<hr>";
		// new task
		
		echo "<h4>task 2</h4>";
		echo "<p><i>Вывести количество дней в любом месяце (на выбор)</i></p>";

		$year = 2040;
		$month = 9;
		$days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
		echo "$month месяц $year год — $days дней";
		
		// task end
		echo "<hr>";
		// new task
		
		echo "<h4>task 3</h4>";
		echo "<p><i>Написать функцию аналогичную работе “echo” используя замыкание. Вывод текста на экран должен быть возвращаться функцией (само echo/print не используем)</i></p>";

		function write($string) {
			return function() use ($string) {
				return $string;
			};
		}
		
		$echo_hello = write("что-то");
		$result = $echo_hello();
		echo $result;
		
		
		// task end
		echo "<hr>";
		// new task
		
		echo "<h4>task 4</h4>";
		echo "<p><i>Посчитать количество дней до нового года</i></p>";

		$new_year = new DateTime("2025-01-01");
		$today = new DateTime();
		$interval = $today->diff($new_year);
		echo $interval->format('%a дней до нового года');
		
		// task end
		echo "<hr>";
		// new task
		
		echo "<h4>task 5</h4>";
		echo "<p><i>Вычислить разницу между двумя датами</i></p>";

		$dateOne = new DateTime("2024-01-01");
		$dateTwo = new DateTime("2028-02-14");
		$interval = $dateOne->diff($dateTwo);
		echo $interval->format('разница между датами в %a дней');

	?>
</body>
</html>