<?php

$file = 'example.txt';

if ($handle = fopen($file, 'w')) {
	fwrite($handle, 'Hello World!');
	fclose($handle);
} else {
	echo 'The application was unable to write on the file.';
}
