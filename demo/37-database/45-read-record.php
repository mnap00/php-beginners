<?php

$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

if ($connection) {
	echo 'We are connected.';
} else {
	die('Database connection failed.');
}

$query = 'SELECT * FROM users';
$result = mysqli_query($connection, $query);

if (!$result) {
	die('Query FAILED' . mysqli_error());
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>45. (R) Reading Information in the Database</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<div class="col-xs-6">

		<?php
		while ($row = mysqli_fetch_assoc($result)) {
			?>
			<pre><?php print_r($row); ?></pre>
			<?php
		}
		?>

		</div>
	</div>

</body>
</html>
