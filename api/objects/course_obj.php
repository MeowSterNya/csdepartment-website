<?php
class Courses{

    // database connection and table name
    private $conn;
    private $table_name = "courses";

    // object properties
    public $id;
    public $name;
    public $course_code;
    public $description;
    public $course_year;
    public $programme_id;
    public $programme_name;


    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read courses
    function read(){

        // select all query
        $query = "SELECT pg.name as programme_name, c.id, c.name, c.course_code,c.description,c.course_year,c.programme_id FROM " . $this->table_name . " c LEFT JOIN programmes pg ON pg.ID = c.programme_id";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }
}
?>
