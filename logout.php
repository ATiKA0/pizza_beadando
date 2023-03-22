<?php
setcookie("user", "", time()-3600);
session_start();
session_destroy();
$csatlak = mysqli_connect('localhost', 'root', '', 'kosar');
$tquery='DELETE FROM kosar';
$ttquery='ALTER TABLE kosar AUTO_INCREMENT = 1';
mysqli_query($csatlak, $tquery);
mysqli_query($csatlak, $ttquery);
mysqli_close($csatlak);
header("location:index.php");
?>
