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
<?php include '../success.php'?>
    </div>
</body>
<?php include '../db_config.php' ?>
<?php

    {
    $email = $_POST['email'];
    $psw = $_POST['psw'];
    $pswrepeat = $_POST['pswrepeat'];
    }
// Insert data into the database


$sql = "SELECT * FROM user WHERE email='$email'";
$result = $conn->query($sql);

// Step 3: Display alert
if ($result->num_rows > 0) {
    // User already exists, display an alert
    echo "<script>alert('User already exists');</script>";
} else {
    $go = "INSERT INTO `user` (`email`, `psw`, `pswrepeat`) VALUES ('$email', '$psw', '$pswrepeat')";
$res= mysqli_query($conn,$go);
    
}
// Close the connection
$conn->close();

    
        

?>
<?php include '../footer.php' ?>
</html>


