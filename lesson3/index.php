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
		echo "<p><i>Объявите переменную x и присвойте ей значение 5. Затем увеличьте значение x на 3 и выведите результат на экран</i></p>";

		$x = 5;
		$x = $x + 3;
		echo $x;
		
		// task end
		echo "<hr>";
		// new task

		echo "<h4>task 2</h4>";
		echo "<p><i>Объявите переменные a и b, присвойте им значения 10 и 7 соответственно. Затем выведите на экран результат деления a на b.</i></p>";

		$a = 10;
		$b = 7;
		echo $a / $b;
		
		// task end
		echo "<hr>";
		// new task

		echo "<h4>task 3</h4>";
		echo "<p><i>Объявите переменные name и age и присвойте им значения «Алиса» и 25 соответственно. Затем выведите на экран фразу «Меня зовут Алиса и мне 25 лет».</i></p>";

		$name = "Алиса";
		$age = 25;
		echo ("Меня зовут " . $name . " и мне " . $age . " лет");
		
		// task end
		echo "<hr>";
		// new task

		echo "<h4>task 4</h4>";
		echo "<p><i>Объявите переменную y и присвойте ей значение 12. Затем увеличьте значение y в два раза и выведите результат на экран.</i></p>";

		$y = 12;
		echo $y * 2;
		
		// task end
		echo "<hr>";
		// new task

		echo "<h4>task 5</h4>";
		echo "<p><i>Объявите переменные x и y и присвойте им значения 6 и 4 соответственно. Затем выведите на экран результат умножения x на y.</i></p>";

		$x = 6;
		$y = 4;
		echo $x * $y;
		
		// task end
		echo "<hr>";
		// new task

		echo "<h4>task 6</h4>";
		echo "<p><i>Объявите две переменные и присвойте им значения чисел 7 и 3. Выполните операцию сложения с этими переменными и выведите результат.</i></p>";

		$seven = 7;
		$three = 3;
		echo $seven + $three;
		
		// task end
		echo "<hr>";
		// new task

		echo "<h4>task 7</h4>";
		echo "<p><i>Объявите переменную и присвойте ей строковое значение. Выполните операцию конкатенации этой строки со строкой «мне нравится программирование» и выведите результат.</i></p>";

		$text = "string";
		echo ($text . " мне нравится программирование");
		
		// task end
		echo "<hr>";
		// new task

		echo "<h4>task 8</h4>";
		echo "<p><i>Объявите переменную и присвойте ей значение числа. Затем выполните операцию инкремента на этой переменной и выведите результат.</i></p>";

		$increment = 1;
		$increment++;
		echo $increment;

		
		// task end
		echo "<hr>";
		// new task

		echo "<h4>task 9</h4>";
		echo "<p><i>Объявите две переменные и присвойте им значения строковых литералов. Выполните операцию конкатенации этих строк и выведите результат.</i></p>";

		$smthOne = "smthOne ";
		$smthTwo = "smthTwo";
		echo $smthOne . $smthTwo;
		
		// task end
		echo "<hr>";
		// new task

		echo "<h4>task 10</h4>";
		echo "<p><i>Объявите две переменные и присвойте им значение строковую цифру, в второй число. Выполните операцию сложения и выведите результат.</i></p>";

		$stringNum = "1";
		$justNum = 1;
		echo $stringNum + $justNum;
 
	?>
</body>
</html>