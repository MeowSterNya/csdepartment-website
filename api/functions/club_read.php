<?php
    // required headers
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    // include database and object files
    include_once '../api/config/database.php';
    include_once '../api/objects/club_obj.php';

    // instantiate database and club object
    $database = new Database();
    $db = $database->getConnection();

    // initialize object
    $club = new Clubs($db);


    // query clubs
    $stmt = $club->read();
    $num = $stmt->rowCount();

    // check if more than 0 record found
    if($num>0){

        // clubs array
        $clubs_arr=array();
        $clubs_arr["records"]=array();

        // retrieve our table contents
        // fetch() is faster than fetchAll()
        // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            // extract row
            // this will make $row['name'] to
            // just $name only
            extract($row);

            $club_item=array(
                "ID" => $id,
                "name" => $name,
                "description" => html_entity_decode($description)
            );

            array_push($clubs_arr["records"], $club_item);
        }

        // set response code - 200 OK
        http_response_code(200);

        // encode clubs data in json format
        $clubs_arr_json = json_encode($clubs_arr);

    }

    else{

        // set response code - 404 Not found
        http_response_code(404);

        // tell the user no clubs found
        echo json_encode(
            array("message" => "No clubs found.")
        );
    }
?>
