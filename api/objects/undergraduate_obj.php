<?php
class UndergradResearch{

    // database connection and table name
    private $conn;
    private $table_name = "undergraduate_research";

    // object properties
    public $id;
    public $researchers;
    public $abstract;
    public $document;

    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read clubs
    function read(){

        // select all query
        $query = "SELECT u.ID, u.researchers, u.abstract, u.document_path FROM " . $this->table_name . " u ";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }
}
?>
