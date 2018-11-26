<?php
require("../includes/authenticate.php");
//require("../api/functions/undergraduate_read.php");
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
  <title>Undergraduate Research</title>
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
        <li class="nav-item">
          <a class="nav-link" href="courses">Courses</a>
        </li>
        <li class="nav-item active">
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

  <h1 class="text-center">Programmes Offered</h1>

  <br>

  <div class="table-responsive">
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Researchers</th>
          <th scope="col">Abstract</th>
          <th scope="col">Research Document</th>
          <th scope="col" colspan="2">Functions</th>
        </tr>
      </thead>
      <tbody>

          <?php
          if(!empty($undergraduates_arr_json))
          {
          $undergraduates_arr_php = json_decode($undergraduates_arr_json);
          if ($undergraduates_arr_php != null )
          {
              $allRecords = $undergraduates_arr_php->records;
          }

          foreach ($allRecords as $record)
          {
          ?>
          <tr>
              <th scope="row"><?php echo $record->ID; ?></th>
              <td><?php echo $record->researchers; ?></td>
              <td><?php echo $record->abstract; ?></td>
              <td><?php echo $record->document; ?></td>
              <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit-modal">Edit</button></td>
              <td><form><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')" name="delete-undergraduate" value="<?php echo $record->ID;?>">Delete</button></form></td>
          </tr>

          <?php
          }
          }
          else
          {?>
          <th scope="col" colspan="5" class="text-center">No Undergraduates Found</th><?php
          }?>


      </tbody>
    </table>
  </div>

  <!-- Edit Form -->
  <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Undergraduate</h5>
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form method="post" class="col-5">
          <div class="form-group">
            <label for="researcher">Researcher/Researchers</label>
            <input type="text" class="form-control form-control-sm" name="researcher">
          </div>
          <div class="form-group">
            <label for="abstract">Research Abstract</label>
            <input type="text" class="form-control form-control-sm" name="abstract">
          </div>
          <div class="form-group">
            <label for="research">Research document</label>
            <input type="file" class="form-control-file" name="research">
          </div>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success" name="undergraduate-update">Save Changes</button>
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
