<?php
include('connection.php');
$isbnno = $_GET['isbnno'];
$sql = "DELETE FROM `booktable` WHERE isbnno='$isbnno'";
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