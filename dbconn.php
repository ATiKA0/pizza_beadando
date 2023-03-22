<?php

$conn = mysqli_connect("127.0.0.1", "root", "", "user");

if(!$conn){
    header('location: succes.php?g=2');
}
