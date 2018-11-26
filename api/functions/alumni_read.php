<?php
    // required headers
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    // include database and object files
    include_once '../api/config/database.php';
    include_once '../api/objects/alumni_obj.php';

    // instantiate database and alumni object
    $database = new Database();
    $db = $database->getConnection();

    // initialize object
    $alumni = new Alumnis($db);

    // query alumnis
    $stmt = $alumni->read();
    $num = $stmt->rowCount();

    // check if more than 0 record found
    if($num>0){

        // alumnis array
        $alumnis_arr=array();
        $alumnis_arr["records"]=array();

        // retrieve our table contents
        // fetch() is faster than fetchAll()
        // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            // extract row
            // this will make $row['name'] to
            // just $name only
            extract($row);

            $alumni_item=array(
                "ID" => $ID,
                "firstname" => $firstname,
                "lastname" => $lastname,
                "DOB" => $DOB,
                "photo_path" => $photo_path,
                "document_path" => $document_path
            );

            array_push($alumnis_arr["records"], $alumni_item);
        }

        // set response code - 200 OK
        http_response_code(200);

        // show alumnis data in json format
        $alumnis_arr_json = json_encode($alumnis_arr);

    }

    else{

        // set response code - 404 Not found
        http_response_code(404);

        // tell the user no alumnis found

    }
?>
