<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Contact Book</title>
</head>
<body>

    <?php
    /**
     * Created by PhpStorm.
     * User: ÈÙˆÖ
     * Date: 2015/6/26
     * Time: 14:23
     */
        require_once "required.php";

        if(isset($_GET['page']) && !empty($_GET['page']) ){
            if(file_exists("./Views/" . $_GET['page'] . ".php") )
                require "./Views/" . $_GET['page'] . ".php";
            else
                header("Location: ?page=login");
        }else{

            header("Location: ?page=login");
        }
    ?>

</body>
</html>


