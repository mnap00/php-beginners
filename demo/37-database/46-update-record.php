<?php include 'db.php'; ?>
<?php include 'functions.php'; ?>

<?php
if (isset($_POST['submit'])) {
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>46. (U) Update Records Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<div class="col-xs-6">
			<form action="46-update-record.php" method="post">
				<div class="form-group">
					<label for="username">Username</label>
					<input class="form-control" type="text" name="username">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input class="form-control" type="password" name="password">
				</div>
				<div class="form-group">
					<select id="" name="id">
						<?php show_all_data(); ?>
					</select>
				</div>
				<input class="btn btn-primary" type="submit" value="Submit" name="submit">
			</form>
		</div>
	</div>

</body>
</html>
