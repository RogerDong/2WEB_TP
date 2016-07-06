<?php
/**
 * Created by PhpStorm.
 * User: ÈÙˆÖ
 * Date: 2015/6/26
 * Time: 14:52
 */

class User {

    private $_username;
    private $_password;

    function __construct($_username, $_password)
    {
        $this->_username = $_username;
        $this->_password = $_password;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->_username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->_username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->_password = $password;
    }



}