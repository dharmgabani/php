<?php
include('connection.php');
$bookName; 
$authorName ;
$bookCode; 
$cost; 
$isbnNo ;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $bookCode = $_POST['bookCode'];
      $bookName = $_POST['bookName'];
      $authorName = $_POST['authorName'];
      $cost = $_POST['cost'];
      $isbnNo = $_POST['isbnNo'];

$sql = "INSERT INTO booktable (bookCode,bookName,authorName,cost,isbnNo)
VALUES ('$bookCode','$bookName','$authorName','$cost','$isbnNo')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
}
?>