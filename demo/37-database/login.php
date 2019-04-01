<?php

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	echo $username;
	echo '<br>';
	echo $password;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<div class="col-xs-6">
			<form action="login.php" method="post">
				<div class="form-group">
					<label for="username">Username</label>
					<input class="form-control" type="text" name="username">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input class="form-control" type="password" name="password">
				</div>
				<input class="btn btn-primary" type="submit" value="Submit" name="submit">
			</form>
		</div>
	</div>

</body>
</html>
