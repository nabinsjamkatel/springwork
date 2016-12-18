<?php
include"conn.php";
if(isset($_POST['contact_submit']))
{
	$name = $_POST['your_name'];
	$add = $_POST['address'];
	$email = $_POST['your_email'];
	$Phone= $_POST['phonenumber'];
	$message = $_POST['your_message'];

$qry = "INSERT INTO `contact` (`user_id`, `Name`, `Address`, `Phone`, `Email`, `Message`) 
       VALUES (NULL, '$name', '$add', '$email', '$Phone', '$message');";

if(mysqli_query($link, $qry))
{
	echo "Data Inserted";
}
else
{
	echo "Error ";
}
}
?>