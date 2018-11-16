<?php

require("includes/authenticate.php");

if(isset($_SESSION["sessionPass"]))
    {
    if(($_SESSION["sessionPass"]) == ($_SESSION["sessionUsPas"]))
        { ?>


        <?php sessionExpire(); ?>

        
      <?php  if(isset($_POST["logout"]))
            {
            
            killSession();
            header("Location:includes/login");
        } ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/css.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="favicon.png">
  <title>Department of Computer Science</title>
</head>
<body>

  <?php
    include("includes/nav.php");
  ?>

  <div class="container">
      
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html> 
        
<?php }

  else {?>
    <script>window.alert("Hmmm Whats up doc?, Try Logging in.");</script> 
    <?php
    header("Location:includes/login");
  }

}

  else {?>
    <script>window.alert("Why are you here? Please Login.");</script> 
    <?php
    header("Location:includes/login");
  }

?>
