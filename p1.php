<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="insert.php" method="post">
        Book_Code<input type="number" name="bookCode" id="" required><br>
        Book_Name<input type="text" name="bookName" id="" required><br>
        Author_Name<input type="text" name="authorName" id="" required><br>
        Cost<input type="number" name="cost" id="" required><br>
        IsbnNo<input type="number" name="isbnNo" id="" required><br>
        <button type="submit" value="submit">submit</button>
        <button type="button" value="show"> <a href="show.php">Show</a></button>

    </form>
</body>
</html>