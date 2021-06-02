<?php

$server="localhost";
$username="root";
$password="kiran2001";
$con=mysqli_connect($server,$username,$password,"vibe");

$name=$_POST["name"];
$email=$_POST["email-contactus"];
$msg=$_POST["msg"];

$q="INSERT INTO  `vibe_contactus` VALUES('$name','$email','$msg')";
$sql=mysqli_query($con,$q);
header('Location: contactus.php');

?>