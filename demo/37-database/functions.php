<?php include 'db.php'; ?>
<?php

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
		die('QUERY FAILED: ' . mysqli_error($connection));
	}
}