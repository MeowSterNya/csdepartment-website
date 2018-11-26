<?php
    // required headers
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
    // include database and object files
    include_once '../api/config/database.php';
    include_once '../api/objects/club_obj.php';
        
    // get database connection
    $database = new Database();
    $db = $database->getConnection();
    
    // prepare club object
    $club = new Clubs($db);
    
    // set ID property of record to read
   // $club->id = isset($_GET['ID']) ? $_GET['ID'] : die();
    if(isset($_GET['club-edit']))
    //if(isset($_GET['club-edit']))
    {
        $get_id = $_GET['club-edit'];
        $club->id = $get_id;
    // read the details of club to be edited
    $club->readOne();
    
        $clubs_arr_one=array();
        $clubs_arr_one["records"]=array();

    if($club->id!=null){
        // create array
        $club_item = array(
            "id" => $club->id,
            "name" => $club->name,
            "description" => html_entity_decode($club->description),
            "category_id" => $club->category_id
        );
        array_push($clubs_arr_one["records"], $club_item);
        // set response code - 200 OK
        http_response_code(200);

        // make it json format
        $clubs_arr_one_json = json_encode($clubs_arr_one);
    }
    
    else{
        // set response code - 404 Not found
        http_response_code(404);
    
        // tell the user club does not exist
        echo json_encode(array("message" => "Club does not exist."));
    }
    }
?>
