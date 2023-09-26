<?php
include('connection.php');
$bookname; $authorname ;
$bookcode; $cost; $isbnno ;
if ($_SERVER["REQUEST_METHOD"] == "GET") {
      $bookcode = $_GET['bookcode'];
      $bookname = $_GET['bookname'];
      $authorname = $_GET['authorname'];
      $cost = $_GET['cost'];
      $isbnno = $_GET['isbnno'];
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>

<body>
    <form action="update.php" method="post"><br>
        Book_Code <input type="number" name="bookcode" id="" required value="<?php echo $bookcode ?>"><br>
        Book_name <input type="text" name="bookname" id="" required value="<?php echo $bookname ?>"><br>
        Author_name <input type="text" name="authorname" id="" required value="<?php echo $authorname ?>"><br>
        cost <input type="number" name="cost" id="" required value="<?php echo $cost ?>"><br>
        Isbnno <input type="number" name="isbnno" id="" required value="<?php echo $isbnno ?>"><br>
        <input type="submit" value="Update">
    </form>
</body>

</html>

<?php
include('connection.php');
$bookname;
$authorname;
$bookcode;
$cost;
$isbnno;
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $bookcode = $_GET['bookcode'];
    $bookname = $_GET['bookname'];
    $authorname = $_GET['authorname'];
    $cost = $_GET['cost'];
    $isbnno = $_GET['isbnno'];

      $sql = "UPDATE `booktable` SET `Book_Code`='$bookcode',`Book_name`='$bookname',`authername`='$authorname',`cost`='$cost',`isbno`='$isbnno' WHERE `isbnno`='$isbnno'";

      if ($conn->query($sql) === TRUE) {
            echo "<br> New record updated successfully";
            header('location:show.php');
      } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
}
?>