<?php

class Questions
{
    // db stuff
    private $conn;
    private $table = 'questions';

    // questions properties
    public $idQuestions;
    public $titleQuestion;
    public $descriptionQuestion;
    public $countQuestion;
    public $userId;
    public $Idsubject;

    // constructor with db
    public function __construct($db)
    {
        $this->conn = $db;
    }


    // get questions informations 
    public function readQuestionsBySubject()
    {
        // $query = 'SELECT * FROM' . $this->table;
        //SELECT * FROM `questions` q INNER join subjects s ON (q.Idsubject=s.idSubjects) INNER join users u ON (q.userId = u.userId) WHERE q.userId=2 and q.Idsubject=1
        $query = "SELECT * FROM ' . $this->table . ' q INNER join subjects s ON (q.Idsubject=s.idSubjects) INNER join users u ON (q.userId = u.userId) WHERE q.userId=:userId and q.Idsubject=:Idsubject";
        // prepare statement
        $stmt = $this->conn->prepare($query);
        // execute statement
        $stmt->execute();
        return $stmt;
    }

    // get questions informations by subject
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
        $query = 'SELECT * FROM questions where idQuestions=:idQuestions ';
        // prepare statement
        $stmt = $this->conn->prepare($query);
        // bind user id
        $stmt->bindParam(':idQuestions', $this->idQuestions);
        // execute statement
        $stmt->execute();
        return $stmt;
    }
}
