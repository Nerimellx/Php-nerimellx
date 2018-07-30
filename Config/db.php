<?php
$connection = mysqli_connect(
	$config['db']['server'],
	$config['db']['login'],
	$config['db']['password'],
	$config['db']['nameDB']
);
if ($connection == false )
{
	echo 'Неудалось подключится к Database!<br>';
	echo mysqli_connect_error();
	exit();
}
