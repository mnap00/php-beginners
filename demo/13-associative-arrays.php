<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>13. Associative Arrays</title>
</head>
<body>

<?php
// phpcs:disable
$numbers = array( 10, 20, 94 );
//echo $numbers[2] . '<br>';
print_r( $numbers );
echo '<br>';

$names = array(
    'first_name' => 'Dinsdale',
    'last_name'  => 'Piranha',
);
print_r( $names );
echo '<br>';
echo $names['first_name'] . ' ' . $names[ 'last_name' ];

?>

</body>
</html>
