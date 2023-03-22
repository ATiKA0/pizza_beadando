<?php
include("dbconn.php");

if(isset($_COOKIE["user"]))
{
 header("location:index.php");
}

$email = $_POST['email'];
$pw = $_POST['pw'];

$sqle = "SELECT * FROM user WHERE email = '$email' AND pw = '$pw'";
$result=mysqli_query($conn,$sqle);
$rowcount=mysqli_num_rows($result);
$end=mysqli_fetch_array($result);
if($rowcount > 0){
	setcookie("user", ' '.$end["first"].' '.$end["last"].' ', time()+3600, "/");
    header("location:index.php");
}
else{
	session_start();
	$_SESSION['message'] = "Hibás adatok! Próbálja újra!";
	header("location:index.php");
}
?>
