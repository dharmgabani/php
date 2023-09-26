<?php
$servername = "loacalhost";
$username = "root";
$password = "";
$dbname = "book";
$conn = mysqli_connect($servernam,$username,$password.$dbname);
if(!conn){
    die("conncection faild :" .mysqli_connect_error());
}
echo "connected successfully";
?>