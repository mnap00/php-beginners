<?php

if (isset($_POST['submit'])) {
	$names = array('Dinsdale', 'Peter', 'Mohad', 'Maria', 'Tom', 'Jerry');

	$minimum = 5;
	$maximum = 15;

	$login = $_POST['login'];
	$password = $_POST['password'];

	if (strlen($login) < $minimum) {
		echo 'Login has to be longer than ' . $minimum . ' characters.';
	}

	if (strlen($login) > $maximum) {
		echo 'Login cannot be longer than ' . $maximum . ' characters.';
	}

	if (!in_array($login, $names)) {
		echo 'Sorry. You are not allowed.';
	} else {
		echo 'Welcome!';
	}

	//echo 'Hello ' . $login . ' ';
	//echo 'Your password is ' . $password . ' ';
}
