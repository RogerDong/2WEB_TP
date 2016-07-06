<?php
/**
 * Created by PhpStorm.
 * User: ÈÙˆÖ
 * Date: 2015/6/26
 * Time: 14:42
 */



?>
<h1>Register</h1>
<form action="index.php?page=register" method="post">
    <span>Username</span><input type="text" name="username"/><br/><br/>
    <span>Password</span><input type="password" name="password"/>
    <br/>
    <input type="submit" value="Register" name="register"  />
    <a href="index.php?page=login">Login</a>
    <?php
    if(isset($_POST['register']))
    {
        $u = new User($_POST['username'],$_POST['password']);
        $um = new UserManager();
        if($um->register($u)==false)
        {
            echo "<p style='color: red;'>The username has been used.</p>";
        }

    }

    ?>
</form>