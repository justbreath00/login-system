<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

        <div class="form-box" id="login-form">
            <form action="system.php" autocomplete="off" method="post">
              <h1>LOGIN</h1>
              <input type="text" name="email" placeholder="Email" class="trans" required> <br>
              <input type="password" name="password" placeholder="Password" class="trans"> <br>
              <button type="submit" name="login" class="trans">Login</button> 
              <p class="par">don't have an accout? <a href="signup.php">signup here</a></p>
             </form>
         </div>
 
    
</body>
</html>