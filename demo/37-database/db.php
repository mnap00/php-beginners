<?php

$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

if (!$connection) {
	die('Database connection failed!');
}

$query = 'SELECT * FROM users';
$result = mysqli_query($connection, $query);

if (!$result) {
	die('Query FAILED' . mysqli_error());
}
