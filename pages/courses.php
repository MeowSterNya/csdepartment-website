<?php
require("../includes/authenticate.php");
require("../api/functions/courses_read.php");
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
  <title>Courses Offered</title>
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
        <li class="nav-item">
          <a class="nav-link" href="alumni">Alumni</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="activity">Department Activities</a>
        </li>
        <li class="nav-item active">
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
      <?php }
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

  <h1 class="text-center">Courses Offered</h1>

  <br>

  <div class="table-responsive">
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Course Name</th>
          <th scope="col">Course Code</th>
          <th scope="col">Description</th>
          <th scope="col">Course Year</th>
          <th scope="col">Course Programme</th>
          <th scope="col" colspan="2">Functions</th>
        </tr>
      </thead>
      <tbody>

          <?php
          if(!empty($course_arr_json))
          {
          $course_arr_php = json_decode($course_arr_json);
          if ($course_arr_php != null )
          {
              $allRecords = $course_arr_php->records;
          }

          foreach ($allRecords as $record)
          {
          ?>
          <tr>
              <th scope="row"><?php echo $record->ID; ?></th>
              <td><?php echo $record->name; ?></td>
              <td><?php echo $record->course_code; ?></td>
              <td><?php echo $record->description; ?></td>
              <td><?php echo $record->course_year; ?></td>
              <td><?php echo $record->programme_name; ?></td>
              <td><form><button type="submit" name="courses-edit" class="btn btn-success btn-sm" value="<?php echo $record->ID;?>">Edit</button></form></td>
              <td><form><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')" name="delete-courses" value="<?php echo $record->ID;?>">Delete</button></form></td>
          </tr>

          <?php
          }
          }
          else{?>
          <th scope="col" colspan="7" class="text-center">No Courses Found</th><?php
          } ?>


      </tbody>
    </table>
  </div>

  <!-- Edit Form -->
      <?php
      if(isset($_GET["courses-edit-edit"]))
         {?>
  <div class="row justify-content-center align-items-center">
    <form method="post" class="col=5">
      <h5>Edit Course</h5>
      <div class="form-group">
          <label for="name">Course Name</label>
          <input type="text" class="form-control form-control-sm" name="course-name">
        </div>
        <div class="form-group">
          <label for="course-code">Course Code</label>
          <input type="text" class="form-control form-control-sm" name="course-code">
        </div>
        <div class="form-group">
          <label for="course-description">Description</label>
          <input type="text" class="form-control form-control-sm" name="course-description">
        </div>
        <div class="form-group">
          <label for="course-year">Select Course Year</label>
          <select class="form-control" name="course-year">
            <option value="First year">First year</option>
            <option value="Second year">Second year</option>
            <option value="Third year">Third year</option>
            <option value="Fourth year">Fourth year</option>
          </select>
        </div>
        <div class="form-group">
          <label for="programme">Select Programme</label>

          <select class="form-control" name="programme">
          <?php
            $programme_arr_php = json_decode($programme_arr_json);
            if ($programme_arr_php != null )
            {
                $allRecords = $programme_arr_php->records;
            }
            foreach ($allRecords as $record)
            {
          ?>
            <option value="<?php echo $record->ID; ?>"><?php echo $record->name; ?></option>
              <?php
            }
              ?>
          </select>
        </div>
      <div class="form-group">
        <a name="edit-close" class="btn btn-danger" href="courses" role="button">Close</a>
        <button type="button" class="btn btn-success" name="programme-update">Save Changes</button>
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
