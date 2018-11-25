<?php
class Alumnis{

    // database connection and table name
    private $conn;
    private $table_name = "alumni";

    // object properties
    public $id;
    public $name;
    public $lastname;
    public $DOB;
    public $photo;
    public $document;
    public $category_id;








    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read clubs
    function read(){

        // select all query
        $query = "SELECT
                c.name as category_name, al.ID, al.firstname, al.lastname, al.DOB, al.photo_path, al.document_path, al.category_id
            FROM
                " . $this->table_name . " al
                LEFT JOIN
                    categories c
                        ON al.category_id = c.ID";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }
}
?>
