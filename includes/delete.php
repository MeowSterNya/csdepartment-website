<?php

// NOT ACTUAL DELETE CODE. TEMP CODE TO BE MODIFIED LATER


  include 'config/dbConnection.php';

  $success =  '<html>'.
            '<script>'.
            'alert("Contact deleted successfully");'.
            '</script>'.
            '</html>';

  $failure = '<html>'.
            '<script>'.
            'alert("Contact was not deleted successfully");'.
            '</script>'.
            '</html>';

  if (isset($_GET['delete'])) {
  	$ID = $_GET['delete'];
    $sql = "DELETE FROM entries WHERE ID=$ID";
  	mysqli_query($conn, $sql);
    if (mysqli_query($conn, $sql)) {
      echo $success;
    }
    else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      echo $failure;
    }
  	$_SESSION['message'] = "Contact deleted!";
  	header('location: index.php');
    $reset_id = "ALTER TABLE entries DROP ID"; //deletes ID column in entries table
    mysqli_query($conn, $reset_id);
    $restart_id = "ALTER TABLE entries ADD ID INT(3) NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (ID)"; //recreates ID column in entries table
    mysqli_query($conn, $restart_id);
  }

?>
