<?php
/**
 * Created by PhpStorm.
 * User: ÈÙˆÖ
 * Date: 2015/6/26
 * Time: 15:59
 */

class PersonManager extends PDOManager {


    function getOnePerson($id)
    {
        $sql = "select * from person where id = :id";
        $sth = $this->_pdo->prepare($sql);
        $sth->bindValue(':id',$id);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        $person = null;
        foreach($result as $row)
        {
            $person = $row;
        }
        return new Person($person['id'],$person['first_name'],$person['last_name'],$person['address']);
    }
    function getAllPerson($owner)
    {

        try
        {
            $sql = "select * from person";
            $sth = $this->_pdo->query($sql);
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        catch(Exception $e)
        {
            die("error".$e->getMessage());
        }
    }

    function addPerson($firstName,$lastName,$owner,$addNum)
    {
        $sql = "insert into person(first_name,last_name, address,owner) values (:firstname,:lastname,:address,:owner)";
        $sth = $this->_pdo->prepare($sql);
        $sth->bindValue(':firstname',$firstName);
        $sth->bindValue(':lastname',$lastName);
        $sth->bindValue(':owner',$owner);
        $sth->bindValue(':address',$addNum);
        $sth->execute();
    }
}
