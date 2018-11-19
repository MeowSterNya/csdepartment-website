<?php

require("includes/authenticate.php");


if(isset($_SESSION["sessionPass"]))
    {
    if(($_SESSION["sessionPass"]) == ($_SESSION["sessionUsPas"]))
        { 
            sessionExpire();   
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/css.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="favicon.png">
  <title>Department of Computer Science</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="">
      <img src="media/cslogo.svg" width="30" height="30" class="d-inline-block align-top" alt="Department of Computer Science Logo">
      Department of Computer Science
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="">Home</a>
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
    include ("includes/login.php");
  }

}

  else { 
    
      if(isset($_POST["nav-login"]))
        {
          include ("includes/login.php");  
        } 
        else{
    ?> 
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
    <a class="navbar-brand" href="">
      <img src="media/cslogo.svg" width="30" height="30" class="d-inline-block align-top" alt="Department of Computer Science Logo">
      Department of Computer Science
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="">Home</a>
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
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/alumni">Alumni</a>
        </li>
      </ul>
      <form method="post" class="form-inline my-2 my-lg-0 mx-2">
        <button class="btn btn-outline-success my-2 my-sm-0" name="nav-login" type="submit">Login</button>
      </form>
    </div>
  </nav>

  <div id="carousel1" class="carousel slide carousel-fade">
    <ol class="carousel-indicators">
      <li data-target="#carousel1" data-slide-to="0" class="active"></li>
      <li data-target="#carousel1" data-slide-to="1"></li>
      <li data-target="#carousel1" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="media/img1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="media/img2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="media/img3.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">About Us</h1>
      <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
  </div>

  <div class="card-group">
    <div class="card">
      <img class="card-img-top" src=".../100px180/" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Programmes Offered</h5>
        <p class="card-text">View our academic programs</p>
        <a href="pages/programmes" class="btn btn-primary">Take me there!</a>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src=".../100px180/" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Our Staff</h5>
        <p class="card-text">Meet some of our staff</p>
        <a href="pages/staff" class="btn btn-primary">Sure, why not?</a>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src=".../100px180/" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Some of our Alumni</h5>
        <p class="card-text">Meet some of our past graduates from the Department of Computer Science</p>
        <a href="pages/alumni" class="btn btn-primary">Sounds interesting...</a>
      </div>
    </div>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
    $('.carousel').carousel({
      interval: 3000
    })
  </script>
</body>
</html> 
 
<?php
}
      
 
      
     
      
  }

?>
