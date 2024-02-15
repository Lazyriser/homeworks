<!DOCTYPE html>
<html>
<head>
    <title>Форма-анкета</title>
</head>
<body>
<?php
	// Переменные
	// Данные
	$phone = $address = $birthdate = $email = $gender = "";
	// Ошибки
	$phoneErr = $addressErr = $birthdateErr = $emailErr = $genderErr = "";

	// Телефон
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["phone"])) {
			$phoneErr = "Номер телефона обязателен";
		} else {
			$phone = test_input($_POST["phone"]);
		if (!preg_match("/^\d{10}$/", $phone)) {
			$phoneErr = "Неверный формат номера телефона";
		}
	}

	// Адрес
	if (empty($_POST["address"])) {
		$addressErr = "Адрес обязателен";
	} else {
		$address = test_input($_POST["address"]);
	}

	// Дата рождения
	if (empty($_POST["birthdate"])) {
		$birthdateErr = "Дата рождения обязательна";
	} else {
		$birthdate = test_input($_POST["birthdate"]);
	}

	// Email
	if (empty($_POST["email"])) {
		$emailErr = "Email обязателен";
	} else {
		$email = test_input($_POST["email"]);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$emailErr = "Неверный формат email";
		}
	}

	// Пол
	if (empty($_POST["gender"])) {
		$genderErr = "Выберите пол";
	} else {
		$gender = test_input($_POST["gender"]);
		}
	}

	// Функция для обработки входных данных
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	// Сохранение данных в массив
	$user_data = array(
		"phone" => $phone,
		"address" => $address,
		"birthdate" => $birthdate,
		"email" => $email,
		"gender" => $gender
	);

		

	// Вывод возраста пользователя
	function calculateAge($birthdate) {
		$today = new DateTime();
		$birthDate = new DateTime($birthdate);
		$age = $today->diff($birthDate)->y;
		return $age;
	}

	// Обработка адреса пользователя
	function parseAddress($addressString) {
			$addressArray = array(
					'country' => '',
					'city' => '',
					'street' => ''
		);
		$addressParts = explode(', ', $addressString);
		if (count($addressParts) >= 1) {
				$addressArray['country'] = $addressParts[0];
		}
		if (count($addressParts) >= 2) {
				$addressArray['city'] = $addressParts[1];
		}
		if (count($addressParts) >= 3) {
				$addressArray['street'] = $addressParts[2];
		}
		return $addressArray;
	}

	// Вывод всех функций
	echo "Массив с данными из формы: ";
	print_r($user_data);

	echo "<br>";

	$user_birthdate = $user_data['birthdate']; // Используем дату рождения из анкеты
	$user_age = calculateAge($user_birthdate);
	echo "Ваш возраст: " . $user_age . " лет";

	echo "<br>";

	$user_address_string = $user_data['address'];
	$user_address_array = parseAddress($user_address_string);
	print_r($user_address_array);
?>

<h2>Форма-анкета</h2>
<form method="post" action="<?php /* echo htmlspecialchars($_SERVER["PHP_SELF"]); */ ?>hello.php">
	Номер телефона: <input type="text" name="phone">
	<span class="error">* <?php echo $phoneErr;?></span>
	<br><br>
	Адрес: <input type="text" name="address">
	<span class="error">* <?php echo $addressErr;?></span>
	<br><br>
	Дата рождения: <input type="date" name="birthdate">
	<span class="error">* <?php echo $birthdateErr;?></span>
	<br><br>
	Email: <input type="text" name="email">
	<span class="error">* <?php echo $emailErr;?></span>
	<br><br>
	Пол:
	<input type="radio" name="gender" value="female"> Женский
	<input type="radio" name="gender" value="male"> Мужской
	<span class="error">* <?php echo $genderErr;?></span>
	<br><br>
	<input type="submit" name="submit" value="Отправить">
</form>

</body>
</html>