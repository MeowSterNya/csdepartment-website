<?php
require("../includes/authenticate.php");  
require("../api/functions/alumni_read.php");
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
        <li class="nav-item">
          <a class="nav-link" href="activity">Department Activities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="courses">Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="undergraduate">Undergraduate</a>
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
      <?php
      if(!empty($alumnis_arr_json))
      {
      $alumnis_arr_php = json_decode($alumnis_arr_json);
      if ($alumnis_arr_php != null )
      {
          $allRecords = $alumnis_arr_php->records;
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
        <a class="btn btn-primary" data-toggle="collapse" href="#readmore" role="button">More...</a>
        <form><button type="submit" name="alumni-edit" class="btn btn-success btn-sm" value="<?php echo $record->ID;?>">Edit</button></form>
        <form><button type="submit" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-sm" name="delete-alumni" value="<?php echo $record->ID;?>">Delete</button></form>
        <div class="collapse multi-collapse" id="readmore">
          <br>
          <div class="card card-body">
            <a href="<?php echo $record->document_path ?>"></a>
          </div>
        </div>
      </div>
    </div>
    <?php
        }
      }
      else{?>
          <h2 class="text-center">No Alumni Found</h2> <?php
      } ?>

  </div>

  <!-- Edit Form -->
      <?php
      if(isset($_GET["alumni-edit"]))
      {?>
  <div class="row justify-content-center align-items-center">
    <form method="post" class="col-5">
      <h5 class="modal-title">Edit Alumni</h5>
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
      <div class="form-group">
        <a name="edit-close" class="btn btn-danger" href="alumni" role="button">Close</a>
        <button type="button" class="btn btn-success" name="alumni-update">Save Changes</button>
      </div>
    </form>
  </div>
      <?php
      }
      ?>
  </div>

  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>
