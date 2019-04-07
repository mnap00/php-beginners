<?php

print_r($_GET);

$id = 10;
$button = 'CLICK HERE NOW';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>59. Using the GET Super Global</title>
</head>
<body>

<a href="59-get-super-global.php?id=<?php echo $id; ?>"><?php echo $button ?></a>

</body>
</html>
