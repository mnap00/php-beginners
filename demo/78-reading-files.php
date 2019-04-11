<?php

$file = 'example.txt';

if ($handle = fopen($file, 'r')) {
	$content = fread($handle, filesize($file)); // each byte equals a character
	echo $content;
	fclose($handle);
} else {
	echo 'The application was unable to write on the file.';
}
