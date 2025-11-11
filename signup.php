<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-box" id="login-form">
        <form action="user_signup.php" autocomplete="off" method="post">
            <h1>REGESTER</h1>
            <input type="text" name="email" placeholder="Email" class="trans" required> <br>
            <input type="text" name="usernam" placeholder="Username" class="trans" required> <br>
            <input type="password1" name="password1" placeholder="enter password" class="trans" required> <br>   
            <input type="password2" name="password2" placeholder="re-enter password" class="trans" required> <br>
            <button type="submit" name="signup" class="trans">Login</button> 
            <p>already have an accout? <a href="index.php">login here</a></p>
        </form>
</body>
</html>