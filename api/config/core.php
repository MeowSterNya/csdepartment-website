<?php
// show error reporting
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

// home page path & url
$home_server = "localhost";
$home_path = "/csdepartment-website/";
$home_url = "http://" . $home_server . $home_path;

// authenticated user cookie
$auth_user_id__cookie_name = "MY_UOG_CS_AUTH_USER_ID";
$auth_user_id__cookie_domain = $home_server;
$auth_user_id__cookie_domain_path =  $home_path . "site_maint";

// page given in URL parameter, default page is one
$page = isset( $_GET[ 'page' ] ) ? $_GET[ 'page' ] : 1;

// set number of records per page
$records_per_page = 5;

// calculate for the query LIMIT clause
$from_record_num = ( $records_per_page * $page ) - $records_per_page;
?>