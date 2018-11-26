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
    public $edit_id;


    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read clubs
    function read(){

        // select all query
        $query = "SELECT cb.id, cb.name, cb.description FROM " . $this->table_name . " cb ";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }

    // used when filling up the update product form
    function readOne(){
        
          // query to read single record
          $query = "SELECT cb.id, cb.name, cb.description FROM " . $this->table_name . " cb WHERE cb.id = ? LIMIT 0,1";

          // prepare query statement
          $stmt = $this->conn->prepare( $query );

          // bind id of product to be updated
          $stmt->bindParam(1, $this->id);

          // execute query
          $stmt->execute();

          // get retrieved row
          $row = $stmt->fetch(PDO::FETCH_ASSOC);

          // set values to object properties
          $this->id = $row['id'];
          $this->name = $row['name'];
          $this->description = $row['description'];
        echo $row['id'];
    }
}
?>
