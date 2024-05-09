<?php include '../db_config.php' ?>

<?php

{
    $email = $_POST['email'];
    $psw = $_POST['psw'];
    $sql = "UPDATE user SET psw = ? WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $psw, $email);

    if ($stmt->execute()){
        echo "<script>alert('updated');</script>";
        header("Location: ../pages/login.php");
    }else{
        echo "<script>alert('invalid user');</script>";
        header("location: ../404.php");
    }
}

?>
