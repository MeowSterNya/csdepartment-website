<?php
  define("DB_SERVER", "localhost");
  define("DB_USER", "root");
  define("DB_PASSWORD","");
  define("DB_NAME", "csdepartment-website");

  try {
    $db = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME , DB_USER, DB_PASSWORD);
  }
  catch(PDOException $e) {
    echo $e->getMessage();
  }
?>
