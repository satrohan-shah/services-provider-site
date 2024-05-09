<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
</head>
<?php include "../header.php" ?>
<body>
    <div class="content"  >
    
       <form action="/backend/submit.php" method='Post' style=" display:flex;flex-direction: column; ">
          <h1 class="contact-info">Contact info</h1>
          <h1>Name : <input type="text" name="name" id="name" placeholder="Name" required></h1>
          <h1>Tel Numb : <input type="number" name="contact" id="contact" placeholder="Contact No" required></h1>
          <h1>Email : <input type="email" name="email" id="email" placeholder="Email" required></h1>
          <h1>Comment</h1>
          <textarea name="comment" id="comment" cols="30" rows="10" placeholder='comment'  required></textarea>
          
    <br/>
<button type="submit" class="btn btn-primary" name='submit'>Submit</button>
       </form> 
    </div>
    
</body>

<?php include "../footer.php" ?>
</html>
