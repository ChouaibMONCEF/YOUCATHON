<?php

class Users
{
    // db stuff
    private $conn;
    private $table = 'users';

    // users properties
    public $userId;
    public $userCIN;
    public $userEmail;
    public $userFirstName;
    public $userLastName;
    public $userPassword;

    // constructor with db
    public function __construct($db)
    {
        $this->conn = $db;
    }


    // get users informations 
    public function read()
    {
        // $query = 'SELECT * FROM' . $this->table;
        $query = 'SELECT * FROM ' . $this->table . ';';
        // prepare statement
        $stmt = $this->conn->prepare($query);
        // execute statement
        $stmt->execute();
        return $stmt;
    }

    // get one user informations
    public function read_single()
    {
        $query = 'SELECT * FROM users where userId=:userId ';
        // prepare statement
        $stmt = $this->conn->prepare($query);
        // bind user id
        $stmt->bindParam(':userId', $this->userId);
        // execute statement
        $stmt->execute();
        return $stmt;
    }
}
