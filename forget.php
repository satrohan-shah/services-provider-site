<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forget</title>
</head>
<?php include "./header.php";?>
<style>
    * {box-sizing: border-box}

/* Add padding to containers */
.containerx {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.loginbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.loginbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
<body>
    <div class="content">
    <form action="/backend/forgotpsw.php" method='Post'>
  <div class="containerx">
    <h1 style='text-align:center;'>reset</h1>
    <p style='text-align:center;'>Please fill in this form to reset your account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>New Password</b></label>
    <input type="password" placeholder="Enter New Password" name="psw" id="psw" required>

    <hr>
    <button type="submit" class="loginbtn">reset</button>
  </div>

</form>
</div>
</body>
<?php include './footer.php';?>
</html>