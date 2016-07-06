
<h1>Login</h1>
<form action="index.php?page=login" method="post">
    <span>Username</span><input type="text" name="username"/><br/><br/>
    <span>Password</span><input type="password" name="password"/>
    <br/>
    <input type="submit" value="Login" name="login"  />
    <a href="?page=register">Register</a>
    <?php
    /**
     * Created by PhpStorm.
     * User: ÈÙˆÖ
     * Date: 2015/6/26
     * Time: 14:42
     */

    if(isset($_POST['login']))
    {
        $um = new UserManager();
        $u = $um->login($_POST['username'],$_POST['password']);
        if($u!=null)
        {
            $_SESSION['username']=$u->getUsername();
            header("Location: index.php?page=list");
        }
        else
        {
            echo "<p style='color: red;'>Login failed.</p>";
        }
    }

    ?>
</form>