<?php
class Activities{

    // database connection and table name
    private $conn;
    private $table_name = "activities";

    // object properties
    public $id;
    public $name;
    public $description;
    public $category_id;


    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read activities
    function read(){

        // select all query
        $query = "SELECT act.id, act.name, act.description FROM " . $this->table_name . " act ";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }
}
?>
