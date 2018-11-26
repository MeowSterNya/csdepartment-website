<?php
    // required headers
    header("Access-Control-Allow-Headers: access");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Allow-Credentials: true");
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
    // include database and object files
    include_once '~/../../config/database.php';
    include_once '~/../../objects/club_obj.php';
        
    // get database connection
    $database = new Database();
    $db = $database->getConnection();
    
    // prepare club object
    $club = new Clubs($db);
    
    // set ID property of record to read
    $club->id = isset($_GET['ID']) ? $_GET['ID'] : die();
    
    // read the details of club to be edited
    $club->readOne();
    
    if($club->id!=null){
        // create array
        $club_arr_one = array(
            "ID" => $id,
            "name" => $name,
            "description" => html_entity_decode($description)
        );
    
        // set response code - 200 OK
        http_response_code(200);

        // make it json format
        echo json_encode($club_arr_one);
    }
    
    else{
        // set response code - 404 Not found
        http_response_code(404);
    
        // tell the user club does not exist
        echo json_encode(array("message" => "Club does not exist."));
    }
?>