<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// include database and object files
include_once '../api/config/database.php';
include_once '../api/objects/club_obj.php';


// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare club object
$club = new Clubs($db);

if(isset($_GET['club-edit']))
    //if(isset($_GET['club-edit']))
{


// get id of club to be edited

    $get_id = $_GET['club-edit'];
    if(isset($_POST['club-update']))
    {
// set ID property of club to be edited
    $club->id = $get_id;
    $name = $_POST["club-name"];
    $description = $_POST["club-description"];
    $category_id = 2;


// set club property values
 $club->name = $name;
 $club->description = $description;
 $club->category_id = $category_id;

// update the club
if($club->update()){

    // set response code - 200 ok
    http_response_code(200);

    // tell the user
   // $js = json_encode(array("message" => "Product was updated."));
?><script>window.alert("Product was updated");</script><?php
    $_GET['club-edit'] = null;
    $_POST['club-update'] = null;
    header("Location:clubs");
}

// if unable to update the club, tell the user
else{

    // set response code - 503 service unavailable
    http_response_code(503);

    // tell the user
     //json_encode(array("message" => "."));
?><script>window.alert("Unable to update club");</script><?php
}
    }
}
?>
