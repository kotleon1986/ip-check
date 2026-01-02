<?php

if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
	$key = 'HTTP_X_FORWARDED_FOR';
} else {
	$key = 'REMOTE_ADDR';	
}

$ip = $_SERVER[$key];

echo $key . ': ' . $_SERVER['REMOTE_ADDR'];