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
  <title>Clubs</title>
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
          <a class="nav-link active" href="clubs">Clubs</a>
        </li>
        <li class="nav-item">
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

  <h1 class="text-center">Clubs</h1>

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
        <tr>
          <th scope="row"></th>
          <td>stuff</td>
          <td>php stuff</td>
          <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit-modal">Edit</button></td>
          <td><a class="btn btn-danger btn-sm" name="delete" href="">Delete</a></td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Edit Form -->
  <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Club</h5>
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="club-name" value="<?php ?>">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
                <input type="text" class="form-control" name="club-description" value="<?php ?>">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success" name="club-update">Save Changes</button>
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
