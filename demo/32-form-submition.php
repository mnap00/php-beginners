<?php

if (isset($_POST['submit'])) {
	echo "Yes, it works!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>32. Checking for Form Submition</title>
</head>
<body>

<form action="32-form-submition.php" method="post">
	<input id="login" type="text" name="login" placeholder="Login ...">
	<input id="password" type="password" name="password" placeholder="Password ...">
	<br>
	<input type="submit" value="Submit" name="submit">
</form>

</body>
</html>
