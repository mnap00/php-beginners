<?php

if (isset($_POST['submit'])) {
	echo $_POST['name'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>60. Using the POST Super Global</title>
</head>
<body>

<form action="60-post.php" method="post">
	<input id="name" type="text" name="name">
	<input type="submit" value="SUBMIT" name="submit">
</form>

</body>
</html>
