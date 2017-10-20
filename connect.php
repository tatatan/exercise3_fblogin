<?php

$servername = 'localhost';
$username = 'secure_user';
$password = '7wmN58LN';
$database = 'secure_login';

$connect= mysqli_connect($servername,$username,$password,$database);
 
if(mysqli_connect_error($connect))
{
		echo 'Failed to connect';
}
 
?>