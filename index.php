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

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index">
      <img src="media/cslogo.svg" width="30" height="30" class="d-inline-block align-top" alt="Department of Computer Science Logo">
      Department of Computer Science
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/programmes">Programmes Offered</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/staff">Staff</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Clubs
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="pages/clubs/cyber-security">Cyber Security</a>
            <a class="dropdown-item" href="pages/clubs/foss">Free and Open Source Software</a>
            <a class="dropdown-item" href="pages/clubs/girls-in-ict">Girls in Computing</a>
            <a class="dropdown-item" href="pages/clubs/robotics">Robotics</a>
            <a class="dropdown-item" href="pages/clubs/social-media">Social Media</a>
            <a class="dropdown-item" href="pages/clubs/tech-ed-revolution">Tech Ed Revolution</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/alumni">Alumni</a>
        </li>
      </ul>
      <form method="post" class="form-inline my-2 my-lg-0 mx-2">
        <button class="btn btn-outline-success my-2 my-sm-0" name="logout" type="submit">Login</button>
      </form>
      <form method="post" class="form-inline my-2 my-lg-0">
        <button class="btn btn-outline-danger my-2 my-sm-0" name="logout" type="submit">Logout</button>
      </form>
    </div>
  </nav>

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
