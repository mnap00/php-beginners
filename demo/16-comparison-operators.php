<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>16. Comparison and Logical Operators</title>
</head>
<body>

<h2>Comparison Operators</h2>
<pre>
	equal         ==
	identical     ===
	compare       > < >= <= <>
	not equal     !=
	not identical !==
</pre>

<h2>Logical Operators</h2>
<pre>
	and    &&
	or     ||
	not    !
</pre>

<br>

<?php

if (4 === '4' || 5 < 10) {
	echo "it is true" . '<br>';
}

if (4 === 4 && 5 < 10) {
	echo "it is too";
}

?>

</body>
</html>
