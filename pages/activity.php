<?php
require("../includes/authenticate.php");
require("../api/functions/activity_read.php");
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
  <title>Department Activities</title>
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
          <a class="nav-link active" href="activity">Department Activities</a>
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

  <h1 class="text-center">Department Activities</h1>

  <br>

  <!-- Table -->
  <div class="table-responsive">
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Description</th>
          <th scope="col" colspan="2">Functions</th>
        </tr>
      </thead>
      <tbody>
       <?php
          $activities_arr_php = json_decode($activities_arr_json);
          if ($activities_arr_php != null )
              {
                  $allRecords = $activities_arr_php->records;
              }

            foreach ($allRecords as $record)
            {
          ?>
        <tr>
          <th scope="row"><?php echo $record->ID; ?></th>
            <td><?php echo $record->name; ?></td>
            <td><?php echo $record->description; ?></td>
            <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit-modal">Edit</button></td>
            <td><form><button type="submit" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-sm" name="delete-activity" value="<?php echo $record->ID;?>">Delete</button></form></td>
        </tr>

        <?php
            }
        ?>

      </tbody>
    </table>
  </div>

  <!-- Edit Form -->
  <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Activity</h5>
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" value="<?php ?>">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" class="form-control" name="description" value="<?php ?>">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success" name="activity-update">Save Changes</button>
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
