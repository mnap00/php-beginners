<?php include 'db.php'; ?>
<?php

function create_rows() {
	if (isset($_POST['submit'])) {
		global $connection;
		$username = $_POST['username'];
		$password = $_POST['password'];

		$username = mysqli_real_escape_string($connection, $username);
		$password = mysqli_real_escape_string($connection, $password);

		$hash_format = '$2y$10$';
		$salt = 'iusesomecrazystrings22';
		$hash_f_and_salt = $hash_format . $salt;

		$password = crypt($password, $hash_f_and_salt);

		$query = 'INSERT INTO users(username, password) ';
		$query .= 'VALUES (\'' . $username . '\', \'' . $password . '\')';

		$result = mysqli_query($connection, $query);

		if (!$result) {
			die(
				'<p class="text-danger mt-3">Query FAILED!</p>' .
				'<br>' .
				mysqli_error()
			);
		} else {
			echo '<p class="text-success mt-3">Record created.</p>';
		}
	}
}

function read_row() {
	global $connection;

	$query = 'SELECT * FROM users';

	$result = mysqli_query($connection, $query);

	if (!$result) {
		die('Query FAILED' . mysqli_error());
	}

	while ($row = mysqli_fetch_assoc($result)) {
		print_r($row);
	}
}

function show_all_data() {
	global $connection;

	$query = 'SELECT * FROM users';

	$result = mysqli_query($connection, $query);

	if (!$result) {
		die('Query FAILED' . mysqli_error());
	}

	while ($row = mysqli_fetch_assoc($result)) {
		$id = $row['id'];
		echo '<option value="' . $id . '">' . $id . '</option>';
	}
}

function update_table() {
	if (isset($_POST['submit'])) {
		global $connection;

		$username = $_POST['username'];
		$password = $_POST['password'];
		$id = $_POST['id'];

		$query = 'UPDATE users SET ';
		$query .= 'username = \'' . $username . '\', ';
		$query .= 'password = \'' . $password . '\' ';
		$query .= 'WHERE id = ' . $id;

		$result = mysqli_query($connection, $query);

		if (!$result) {
			die(
				'<p class="text-danger mt-3">Query FAILED!</p>' .
				'<br>' .
				mysqli_error()
			);
		} else {
			echo '<p class="text-success mt-3">Record updated.</p>';
		}
	}
}

function delete_rows() {
	if (isset($_POST['submit'])) {
		global $connection;

		$username = $_POST['username'];
		$password = $_POST['password'];
		$id = $_POST['id'];

		$query = 'DELETE FROM users ';
		$query .= 'WHERE id = ' . $id;

		$result = mysqli_query($connection, $query);

		if (!$result) {
			die(
				'<p class="text-danger mt-3">Query FAILED!</p>' .
				'<br>' .
				mysqli_error()
			);
		} else {
			echo '<p class="text-success mt-3">Record deleted.</p>';
		}
	}
}
