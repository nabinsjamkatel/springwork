<?php
include "conn.php";
#require "conn.php";
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$add = $_POST['address'];
	$email = $_POST['email'];
	$user = $_POST['user'];
	$psd = $_POST['psd'];

$qry = "INSERT INTO `user` (`user`, `name`, `address`, `email`, `username`, `password`) 
VALUES (NULL, '$name', '$add', '$email', '$user', '$psd');";

if(mysqli_query($link,$qry))
{
	echo "Data Inserted";
}
else
{
	echo "Error ";
}
}
?>