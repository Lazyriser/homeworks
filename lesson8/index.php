<?php

function elements_sum($array) {
	$sum = 0;
	foreach ($array as $element) {
		$sum += $element;
	}

	return $sum;
}

$array = [1, 5, 9, 2, 0];

$element_list = implode(", ", $array);

echo "Сумма элементов массива " . $element_list . " равна " . array_sum($array);

echo "<br><hr>";




function array_check($array, $string) {
	$number = null;
	if (is_numeric($string)) {
		$number = (int) $string;
	} else {
		
	}

	$coincidence = false;
	foreach ($array as $element) {
		if ($element == $number) {
			$coincidence = true;
			break;
		}
	}
	if ($coincidence) {
		echo "Массив содержит число " . $number;
	} else {
		echo "Числа " . $number . " в массиве нет";
	}
	return $coincidence;
}

$array = ["5", "string", 6, "text", 7];
$element_list = implode(", ", $array);

$string_one = "8";
$string_two = "5";

echo "Массив [" . $element_list . "]";
echo "<br><br>";

echo "Первое число " . $string_one;
echo "<br>";
array_check($array, $string_one);

echo "<br><br>";

echo "Второе число " . $string_two;
echo "<br>";
array_check($array, $string_two);

echo "<br><hr>";

function sort_array ($array) {
	$length = count($array);

	for ($i = 0; $i < $length - 1; $i++) {
		for ( $j = 0; $j < $length - $i - 1; $j++) {
			if ($array[$j] > $array[$i + 1]) {
				$temp = $array[$j];
				$array[$j] = $array[$j + 1];
				$array[$j + 1] = $temp;
			}
		}
	}

	return $array;
}

$array = [1, 5, 9, 2, 7];

echo "Массив до сортировки: " . $element_list;
echo "<br>";
print_r($array);

echo "<br>";
echo "<br>";

$element_list = implode(", ", $array);

echo "Массив после сортировки: " . $element_list;
echo "<br>";

$sorted_numbers = sort_array($array);
print_r($sorted_numbers);

?>