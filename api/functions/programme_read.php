<?php
    // required headers
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    // include database and object files
    include_once '~/../../config/database.php';
    include_once '~/../../objects/programme_obj.php';

    // instantiate database and programme object
    $database = new Database();
    $db = $database->getConnection();

    // initialize object
    $programme = new Programmes($db);

    // query programmes
    $stmt = $programme->read();
    $num = $stmt->rowCount();

    // check if more than 0 record found
    if($num>0){

        // programmes array
        $programmes_arr=array();
        $programmes_arr["records"]=array();

        // retrieve our table contents
        // fetch() is faster than fetchAll()
        // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            // extract row
            // this will make $row['name'] to
            // just $name only
            extract($row);

            $programme_item=array(
                "ID" => $id,
                "name" => $name,
                "duration" => $duration
            );

            array_push($programmes_arr["records"], $programme_item);
        }

        // set response code - 200 OK
        http_response_code(200);

        // show programmes data in json format
        $programme_arr_json = json_encode($programmes_arr);

    }

    else{

        // set response code - 404 Not found
        http_response_code(404);

        // tell the user no programmes found

    }
?>
