<?php
/**
 * Created by PhpStorm.
 * User: ÈÙˆÖ
 * Date: 2015/6/26
 * Time: 14:53
 */

class UserManager extends PDOManager {





    function login($username,$password)
    {
        $sql = "select * from `user`";
        $loginSql = $this->_pdo->query($sql);

        $result = $loginSql ->fetchAll(PDO::FETCH_ASSOC);

        foreach($result as $row)
        {
            if($username == $row['username'])
            {
                if($password == $row['password'])
                {
                    return new User($username,$password);
                }
            }
        }
        return null;
    }




    function register($u)
    {
        $sql = "select * from user where username = :username";
        $checkSql = $this->_pdo->prepare($sql);
        $checkSql->bindValue(':username',$u->getUsername());
        if($checkSql->rowCount()>0)
        {
            return false;
        }


        $sql = "insert into user (username,password) values (:username,:password)";
        $registerSql = $this->_pdo->prepare($sql);
        $registerSql->bindValue(":username",$u->getUsername());
        $registerSql->bindValue(":password",$u->getPassword());
        $registerSql->execute();

    }
}