


<?php include '../db_config.php' ?>

<?php

{
$name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$comment = $_POST['comment'];

}
// Insert data into the database
$stmt = "INSERT INTO `contect` (`name`, `contact`, `email`, `comment`, `date`) VALUES ('$name', '$contact', '$email', '$comment', current_timestamp())";
$res= mysqli_query($conn,$stmt);

if($res){
    header("location: ../success.php");
}else{
    header("location: ../404.php");
}
// Close the connection
$conn->close();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>success</title>
</head>
<?php include '../header.php' ?>
<body>
    <div class="content">
       
    </div>
</body>
<?php include '../footer.php' ?>
</html>
