<?php
include 'dbconn.php';

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$pw = $_POST['pw'];

$sql = "INSERT INTO user(first, last, email, pw)
VALUES ('$first', '$last', '$email', '$pw')";


if ($conn->query($sql)=== TRUE)
	{	
		header('location: succes.php?g=1');
	}
else
	{
		header('location: succes.php?g=2');
	}
$conn->close();
