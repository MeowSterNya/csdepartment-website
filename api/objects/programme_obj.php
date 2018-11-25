<?php
class Programmes{

    // database connection and table name
    private $conn;
    private $table_name = "programmes";

    // object properties
    public $id;
    public $name;
    public $duration;
    public $category_id;


    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read programmes
    function read(){

        // select all query
        $query = "SELECT pg.id, pg.name, pg.duration FROM " . $this->table_name . " pg ";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }
}
?>
