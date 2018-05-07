<?php

class User extends Table
{
    var $username;
    var $firstname;
    var $lastname;
    var $email;
    var $gender;
    var $dob;
    var $password;
    var $type;
    var $picture;
    var $newuser;

    public function __construct()
    {
        $this->tablename = "user";
    }

    public function checkusername($username)
    {
        $this->username = $username;
        $database = new Database;
        $query = "SELECT * FROM {$this->tablename} WHERE username = '{$this->username}'";
        $data = $database->getQuery($query);
        $this->bind($data);
    }

    public function newuser($username, $firstname, $lastname, $email, $gender, $dob, $password, $picture)
    {
        $this->bind(array("username" => $username, "firstname" => $firstname, "lastname" => $lastname,
            "email" => $email, "gender" => $gender, "dob" => $dob,
            "password" => $password, "picture" => $picture));
    }
}
