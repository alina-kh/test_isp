<?php
require "common.inc.php";

if (isset($_POST['submit'])) {

	// Создаем массив для сбора ошибок
	$errors = array();

	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject= $_POST['subject'];
	$message = $_POST['message'];

	// Проводим проверки
	// trim — удаляет пробелы (или другие символы) из начала и конца строки
	if (trim($name) == '') {
		$errors[] = "Input Имя!";
	}

	if (trim($email) == '') {
		$errors[] = "Input Email!";
	}

	if (trim($subject) == '') {
		$errors[] = "Input subject!";
	}

	if (trim($message) == '') {
		$errors[] = "Input message!";
	}

	// проверка на правильность написания Email
	if (!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $email)) {
		$errors[] = 'Неверно введен е-mail!';
	}

	if (empty($errors)) {
		$query = "INSERT INTO form (name, email, subject, message) VALUES (?, ?, ?, ?)";
		$stmt = mysqli_prepare($dbc, $query);
		mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $subject, $message);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
		echo '<div style="color: green; ">Ваше обращение отправлено!</div><hr>';
	} else {
		foreach ($errors as $row) {
			echo '<div style="color: red; ">'. $row . '</div><hr>';
		}
	}
}
mysqli_close($dbc);
