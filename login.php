<?php
session_start();
include "conn.php";
if(isset($_POST['submit']))
{
	$user = $_POST['user'];
	$psd = $_POST['psd'];

	$_SESSION['user'] = $user;
$sql = "SELECT  `username` and `password` FROM `user` 
WHERE `username` = '$user' and `password`= '$psd' ;";

$op = mysqli_query($link,$sql);
$res = mysqli_num_rows($op);
if($res)
{
	header("Location:profile.php");
}
else
{
	header("Location:index.php");
}
}
?>