<?php
class Staffs{

    // database connection and table name
    private $conn;
    private $table_name = "staff";

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
                c.name as category_name, sf.ID, sf.firstname, sf.lastname, sf.DOB, sf.photo_path, sf.document_path, sf.category_id
            FROM
                " . $this->table_name . " sf
                LEFT JOIN
                    categories c
                        ON sf.category_id = c.ID";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }
}
?>
