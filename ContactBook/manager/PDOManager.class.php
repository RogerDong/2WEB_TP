<?php
/**
 * Created by PhpStorm.
 * User: ศูึ
 * Date: 2015/6/26
 * Time: 14:36
 */

abstract class PDOManager {

    const DSN = "mysql:host=localhost;dbname=contact_book";
    const USERNAME ="root";
    const PASSWORD = "";
    protected $_pdo;
    function __construct()
    {

        try{
            $options = array(
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
            $this->_pdo = new PDO(self::DSN,self::USERNAME,self::PASSWORD,$options);
        }
        catch(Exception $e)
        {
            die("error".$e->getMessage());
        }
    }


}


?>