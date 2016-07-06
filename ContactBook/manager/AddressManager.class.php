<?php
/**
 * Created by PhpStorm.
 * User: ÈÙˆÖ
 * Date: 2015/6/26
 * Time: 16:30
 */

class AddressManager extends PDOManager {

    function getAddress($number)
    {
        $sql = "select * from address where `number` = :num";
        $sth = $sql = $this->_pdo->prepare($sql);
        $sth->bindValue(':num',$number);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function addAddress($street,$city)
    {
        $sql = "select max(id) from address";
        $sth = $this->_pdo->query($sql);
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        $addNum = 0;

        var_dump($result);
        foreach($result as $row)
        {
            $addNum = $row['max(id)']+1;
        }

        $sql = "insert into address(`number`,street,city) values(:num,:street,:city)";
        $sth = $sql = $this->_pdo->prepare($sql);
        $sth->bindValue(':num',$addNum);
        $sth->bindValue(':street',$street);
        $sth->bindValue(':city',$city);
        $sth->execute();
        return $addNum;
    }

}