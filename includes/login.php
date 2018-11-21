<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/css.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="favicon.png">
  <title>Login</title>
</head>
<body class="bg-image">

  <div class="container h-100">
    
    <div class="row h-100 justify-content-center align-items-center">
      <form action="includes/authenticate.php" method="post" class="col-5">
        <img class="logo mx-auto" src="media/cslogo.svg" alt="Department of Computer Science Logo">
        <h3 style="color:white" class="text-center">Department of Computer Science</h3>
        <h4 style="color:white" class="text-center">Admin Login</h4>
        <div class="form-group">
          <label style="color:white" for="username">Username</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
        </div>
        <div class="form-group">
          <label style="color:white" for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
        </div>
        <div class="text-center">
          <button type="submit" name="login" class="btn btn-block btn-success">Login</button>
          <a class="btn btn-block btn-danger" href="../" role="button">Cancel</a>
        </div>
      </form>
    </div>

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
