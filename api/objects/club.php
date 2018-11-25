<?php
class Clubs{

    // database connection and table name
    private $conn;
    private $table_name = "clubs";

    // object properties
    public $id;
    public $name;
    public $description;
    public $category_id;


    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read clubs
    function read() {
        $query = "SELECT id, name, description FROM " . $this->table_name . " ";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }
  }
?>
