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
    $con = mysqli_connect("localhost","admin","admin4321","php_tuts_basic_login_form");

    if (isset($_POST['submit']))
    {
        $un=$_POST['username'];
        $pw=$_POST['password'];
        $sql=mysqli_query($con, "select password from users where username='$un'");

        if($row=mysqli_fetch_array($sql))
        {
            if ( $pw == $row['password'] )
            {
                header("location:home.html");
                exit();
            }
            else
            {
                echo "Invalid Password";
            }
        }
        else 
        {
            echo "Invalid Username";
        }        
    }
 ?>