<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show</title>
</head>

<body align="center">
    <h1>View Data</h1>
    <table border="1", align="center">
        <thead>
            <tr>
                <td>bookcode</td>
                <td>bookname</td>
                <td>authorname</td>
                <td>cost</td>
                <td>isbn</td>
                <td>Update</td>
                <td>delete</td>
            </tr>
           
        </thead>
        <tbody>
            <?php
            include('connection.php');
            $sql = "select * from booktable";
            $data = mysqli_query($conn, $sql);
            $total = mysqli_num_rows($data);
            while ($result = mysqli_fetch_array($data)){
                echo "
                <tr>
                <td>".$result['bookcode']."</td>
                <td>".$result['bookname']."</td>
                <td>".$result['authorname']."</td>
                <td>".$result['cost']."</td>
                <td>".$result['isbnno']."</td>
                <td><a href='update.php?bookcode=$result[bookcode]&bookname=$result[bookname]&authorname=$result[authorname]&cost=$result[cost]&isbnno=$result[isbnno]'>Update</a></td>
                <td><a href='delete.php?isbnno=$result[isbnno]'>Delete</a></td>
            </tr>
                ";
            }
            ?>
            
        </tbody>
    </table>
    <br>
    <button><a href="p1.php">Add More</a></button>

</body>

</html>