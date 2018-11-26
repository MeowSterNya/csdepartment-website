<?php
class Alumnis{

    // database connection and table name
    private $conn;
    private $table_name = "alumni";

    // object properties
    public $id;
    public $firstname;
    public $lastname;
    public $DOB;
    public $photo;
    public $document;
    public $age;

    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read clubs
    function read(){

        // select all query
        $query = "SELECT al.ID, al.firstname, al.lastname, al.DOB, al.photo_path, al.document_path FROM " . $this->table_name . " al ";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }
}
?>
