<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="430706666870-efmm3p9t7dpvo69mn1grt5cl6q61lnlp.apps.googleusercontent.com">
    <title>sign up</title>
</head>
<?php include "../header.php" ?>
<body>
<div class="content">
<form action="/backend/register.php" method='Post'>
  <div class="containerx">
    <h1 style='text-align:center;'>Register</h1>
    <p style='text-align:center;'>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="pswrepeat" id="pswrepeat" required>
    <hr>

    <p class='x'>By creating an account you agree to our <a href="terms-conditions.php">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p class='x1'>Already have an account? <a href="/pages/login.php">Sign in</a>.</p>
  </div>
  
</form>
<div class="g-signin2" data-onsuccess="onSignIn"></div>
  <script>
    function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}
  </script>
</div>
</body>

<?php include "../footer.php" ?>
</html>