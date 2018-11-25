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
function read(){

    // select all query
    $query = "SELECT
                c.name as category_name, cb.id, cb.name, cb.description, cb.category_id
            FROM
                " . $this->table_name . " cb
                LEFT JOIN
                    categories c
                        ON cb.category_id = c.ID";

    // prepare query statement
    $stmt = $this->conn->prepare($query);

    // execute query
    $stmt->execute();

    return $stmt;
}
}
?>
