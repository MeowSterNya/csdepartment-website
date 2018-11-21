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
        <li class="nav-item">
          <a class="nav-link" href="clubs">Clubs</a>
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
                //sessionExpire();
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
          <button class="btn btn-outline-success my-2 my-sm-0" name="nav-login" type="submit">Login</button>
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
      <img class="card-img-top staff-img mx-auto" src="../media/cslogo.svg" alt="alumni picture">
      <div class="card-body">
        <h5 class="card-title">insert name using php</h5>
        <p class="card-text">insert age using php</p>
      </div>
      <div class="card-footer">
        <a class="btn btn-primary" data-toggle="collapse" href="#readmore1" role="button">More...</a>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit-modal">Edit</button>
        <button type="button" class="btn btn-danger">Delete</button>
        <div class="collapse multi-collapse" id="readmore1">
          <br>
          <div class="card card-body">
            <p>research doc php goes here</p>
          </div>
        </div>
      </div>
    </div>
    <div class="card text-center">
      <img class="card-img-top staff-img mx-auto" src="../media/cslogo.svg" alt="alumni picture">
      <div class="card-body">
        <h5 class="card-title">insert name using php</h5>
        <p class="card-text">insert age using php</p>
      </div>
      <div class="card-footer">
        <a class="btn btn-primary" data-toggle="collapse" href="#readmore2" role="button">More...</a>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit-modal">Edit</button>
        <button type="button" class="btn btn-danger">Delete</button>
        <div class="collapse multi-collapse" id="readmore2">
          <br>
          <div class="card card-body">
            <p>research doc php goes here</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit Form -->
  <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Alumni</h5>
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post">
            <div class="form-group">
              <label for="firstname">First Name</label>
              <input type="text" class="form-control form-control-sm" name="firstname" value="<?php ?>">
            </div>
            <div class="form-group">
              <label for="lastname">Last Name</label>
              <input type="text" class="form-control form-control-sm" name="lastname" value="<?php ?>">
            </div>
            <div class="form-group">
              <label for="dob">Date of Birth</label>
              <input type="date" class="form-control form-control-sm" name="DOB" value="<?php ?>">
            </div>
            <div class="form-group">
              <label for="photo">Alumni Photo</label>
              <input type="file" class="form-control-file" name="photo" accept=".jpg, .jpeg, .png" value="<?php ?>">
            </div>
            <div class="form-group">
              <label for="research">Research Portfolio document</label>
              <input type="file" class="form-control-file" name="research" accept=".pdf" value="<?php ?>">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success" name="alumni-update">Save Changes</button>
        </div>
      </div>
    </div>
  </div>
      
  </div>

  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>
