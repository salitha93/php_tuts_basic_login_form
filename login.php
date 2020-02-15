<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
</head>
<body>
    <div id="main">
        <h1>Simple Login</h1>
        <form method="POST">
            Username <input type="text" name="username" class="text" autocomplete="off" required>
            Password <input type="password" name="password" class="text" required>
            <input type="Submit" name="submit" id="sub">
        </form>
    </div>
</body>
</html>

<?php 
    if (isset($_POST['submit']))
    {
        $un=$_POST['username'];
        $pw=$_POST['password'];

        if ( $un == 'username' && $pw == 'password' )
        {
            header("location:home.html");
            exit();
        }
        else
        {
            echo "Invalid Username/Password";
        }
    }
 ?>