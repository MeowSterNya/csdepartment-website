<?php
    // required headers
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    // include database and object files
    include_once '../api/config/database.php';
    include_once '../api/objects/undergraduate_obj.php';

    // instantiate database and undergraduate object
    $database = new Database();
    $db = $database->getConnection();

    // initialize object
    $undergraduate = new Undergraduates($db);

    // query undergraduates
    $stmt = $undergraduate->read();
    $num = $stmt->rowCount();

    // check if more than 0 record found
    if($num>0){

        // undergraduates array
        $undergraduates_arr=array();
        $undergraduates_arr["records"]=array();

        // retrieve our table contents
        // fetch() is faster than fetchAll()
        // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            // extract row
            // this will make $row['name'] to
            // just $name only
            extract($row);

            $undergraduate_item=array(
                "ID" => $ID,
                "researchers" => $researchers,
                "abstract" => $abstract,
                "document_path" => $document_path
            );

            array_push($undergraduates_arr["records"], $undergraduate_item);
        }

        // set response code - 200 OK
        http_response_code(200);

        // show undergraduates data in json format
        $undergraduates_arr_json = json_encode($undergraduates_arr);

    }

    else{

        // set response code - 404 Not found
        http_response_code(404);

        // tell the user no undergraduates found

    }
?>
