<?php
require("../includes/authenticate.php");  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/css.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="../favicon.png">
  <title>Alumni</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="../">
      <img src="../media/cslogo.svg" width="30" height="30" class="d-inline-block align-top" alt="Department of Computer Science Logo">
      Department of Computer Science
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="../">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="programmes">Programmes Offered</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="staff">Staff</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Clubs
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="clubs/cyber-security">Cyber Security</a>
            <a class="dropdown-item" href="clubs/foss">Free and Open Source Software</a>
          </div>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="alumni">Alumni</a>
        </li>
      </ul>
        <?php
        if(isset($_SESSION["sessionPass"]))
        {
            if(($_SESSION["sessionPass"]) == ($_SESSION["sessionUsPas"]))
            {
                sessionExpire();
        ?>
        <form method="post" class="form-inline my-2 my-lg-0">
            <button class="btn btn-outline-danger my-2 my-sm-0" name="logout" type="submit">Logout</button>
        </form>
        <?php     }
        } 
        else 
        {
        ?>
        <form action="../index.php" method="post" class="form-inline my-2 my-lg-0">
            <button class="btn btn-outline-success my-2 my-sm-0" name="nav-login"    type="submit">Login</button>
        </form>

  <?php } ?>
    </div>
  </nav>

  <div class="container">

  <br>

  <h1 class="text-center">Alumni</h1>

  <br>

  <div class="card-deck">
    <div class="card text-center">
      <img class="card-img-top" src="" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">insert name using php</h5>
        <p class="card-text">insert age using php</p>
      </div>
      <div class="card-footer">
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#more">
          More...
        </button>
        <div class="collapse" id="more">
          <div class="card card-body">
            
          </div>
        </div>
      </div>
    </div>
    <div class="card text-center">
      <img class="card-img-top" src="" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">insert name using php</h5>
        <p class="card-text">insert age using php</p>
      </div>
      <div class="card-footer"><a href="#" class="btn btn-primary">View more</a></div>
    </div>
  </div>
      
  </div>

  <script src="../../js/jquery-3.3.1.min.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
</body>
</html> 