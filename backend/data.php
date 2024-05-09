<?php include '../db_config.php'?>
<?php
  
 {
    $email = $_POST['email'];
    $psw = $_POST['psw'];
    $sql = "SELECT * FROM user WHERE email = '$email' AND psw = '$psw'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['email'] = $email;
        $_SESSION['psw'] = $psw;
        header("Location: ../main.php");
    } else {
        header("location: ../404.php");
    }
}


?>