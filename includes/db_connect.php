<?php
@ $db = new mysqli_connect('localhost', 'root', 'root', 'Invisivote.com');
if(mysqli_connect_errno())
{
	echo 'Error: Could not connect.';
	exit;
}
?>