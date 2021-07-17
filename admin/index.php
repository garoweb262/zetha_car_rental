<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login---Zetha cars rentals</title>
    <link href="css/login.css" rel="stylesheet">  
  <link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="center">
    <h1>login</h1>
    <form action="sigin.php" method="post">
        <div class="txt_field">
            <input type="text" required>
            <span></span>
            <label for="">Username</label>
        </div>
        <div class="txt_field">
            <input type="password" required>
            <span></span>
         <label for="">Password</label>
            </div>
            <div class="pass"><a href="forget.php">Forget Password?  </a></div>
            <input type="submit" name="" value="Login">
            <div class="signup_link">
                Not a member <a href="#">signup</a>
            </div>
        
    </form>

</div>
    
</body>
</html>