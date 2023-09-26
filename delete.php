<?php
include('connection.php');
$isbnNo = $_GET['isbnNo'];
$sql = "DELETE FROM `booktable` WHERE isbnNo='$isbnNo'";
$data = mysqli_query($conn,$sql);
if($data){
    echo "deleted <br>";
    header('location:show.php');
    // echo "<a href='show.php'>View</a>";
}
else{
    echo "error";
}
?>