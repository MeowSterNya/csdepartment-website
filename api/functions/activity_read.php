<?php
    // required headers
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    // include database and object files
    include_once '../api/config/database.php';
    include_once '../api/objects/activity_obj.php';

    // instantiate database and activity object
    $database = new Database();
    $db = $database->getConnection();

    // initialize object
    $activity = new Activities($db);


    // query activities
    $stmt = $activity->read();
    $num = $stmt->rowCount();

    // check if more than 0 record found
    if($num>0){

        // activities array
        $activities_arr=array();
        $activities_arr["records"]=array();

        // retrieve our table contents
        // fetch() is faster than fetchAll()
        // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            // extract row
            // this will make $row['name'] to
            // just $name only
            extract($row);

            $activity_item=array(
                "ID" => $id,
                "name" => $name,
                "description" => html_entity_decode($description)
            );

            array_push($activities_arr["records"], $activity_item);
        }

        // set response code - 200 OK
        http_response_code(200);

        // show activities data in json format
        $activities_arr_json = json_encode($activities_arr);

    }

    else{

        // set response code - 404 Not found
        http_response_code(404);

        // tell the user no activities found
        echo json_encode(
            array("message" => "No activities found.")
        );
    }
?>
