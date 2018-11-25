<?php
require("../includes/authenticate.php");
require("../api/functions/staff_read.php");
header( "Access-Control-Allow-Origin: *" );
header( "Content-Type: text/html; charset=UTF-8" );
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
  <title>Staff</title>
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
        <li class="nav-item active">
          <a class="nav-link" href="staff">Staff</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="clubs">Clubs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="alumni">Alumni</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="activity">Department Activities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="courses">Courses</a>
        </li>
      </ul>
    
    <?php
      if(isset($_SESSION["sessionPass"]))
        {
            if(($_SESSION["sessionPass"]) == ($_SESSION["sessionUsPas"]))
            {   //sessionExpire();
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
        <button class="btn btn-outline-success my-2 my-sm-0" name="nav-login"    type="submit">Login</button></form>
  <?php } ?>
    </div>
  </nav>
        
        
  <div class="container">

  <br>

  <h1 class="text-center">Our Staff</h1>

  <br>

      <?php
      $staffs_arr_php = json_decode($staffs_arr_json);
      if ($staffs_arr_php != null )
      {
          $allRecords = $staffs_arr_php->records;
      }

      foreach ($allRecords as $record)
      {
      ?>
      <div class="card-deck">
          <div class="card text-center">
              <img class="card-img-top staff-img mx-auto" src="<?php echo $record->photo_path;?>" alt="alumni picture">

              <div class="card-body">
                  <h5 class="card-title"><?php echo $record->firstname." ".$record->lastname?></h5>
                  <p class="card-text"><?php $age = (date("Y/m/d") - $record->DOB); echo $age; ?> </p>
              </div>
              <div class="card-footer">
                  <a class="btn btn-primary" data-toggle="collapse" href="#readmore1" role="button">More...</a>
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit-modal">Edit</button>
                  <a class="btn btn-danger" name="delete-staff" href="../includes/delete.php?del=<?php echo $record->ID; ?>">Delete</a>
                  <div class="collapse multi-collapse" id="readmore1">
                      <br>
                      <div class="card card-body">
                          <p><?php echo $record->document_path ?></p>
                      </div>
                  </div>
              </div>
          </div>
          <?php
      }
          ?>
    </div>

  <!-- Edit Form -->
  <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Staff</h5>
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
              <label for="photo">Staff Photo</label>
              <input type="file" class="form-control-file" name="photo" accept=".jpg, .jpeg, .png" value="<?php ?>">
            </div>
            <div class="form-group">
              <label for="research">Research document</label>
              <input type="file" class="form-control-file" name="research" accept=".pdf" value="<?php ?>">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success" name="staff-update">Save Changes</button>
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

