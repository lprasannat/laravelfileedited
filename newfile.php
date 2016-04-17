<?php
$link=mysqli_connect('localhost','dbuser',123,"lakshmi");
if(isset($_POST['Email'],$_POST['Password'])){
    $Email=  mysqli_real_escape_string($link,$_POST['Email']);
    $Password=sha1($_POST['Password']);
    $query= "SELECT COUNT(Id) FROM uses WHERE email='$Email' AND password='$Password'";
    $result=  mysqli_query($link, $query);
    $total=mysqli_result($result,0);
    if($total==1)
    {
        setcookie('Email',$_POST['Email']);
        setcookie('Password',$Password);
    }
}
?>
<html>
    <head></head>
    <body>
        <p>
            <?php 
            if(isset($_COOKIE['logged-in']))
                echo "u are logged in";
                ?>
        </p>
        <form action="" method="post">
            <p>
                <label for="user">EMAIL</label>
                <input type="email" name="Email" id="email">
            </p>
             <p>
                <label for="pass">PASSWORD</label>
                <input type="password" name="Password" id="pass">
            </p>
             <p>
               
                <input type="submit" value="Login">
            </p>
        </form>
    </body>
</html>
