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
        $query = "SELECT
                c.name as category_name, pg.id, pg.name, pg.duration, pg.category_id
            FROM
                " . $this->table_name . " pg
                LEFT JOIN
                    categories c
                        ON pg.category_id = c.ID";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }
}
?>
