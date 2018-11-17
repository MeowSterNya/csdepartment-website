<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/css.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="favicon.png">
</head>
<body>

<?php
  
  require_once("session.php");
  session_start(); 
  login();
  function login() {
    if(isset($_POST["login"])) {
      $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
      $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
      $hashpw = md5($password);
      $result = query("SELECT * FROM accounts WHERE username = '$username' AND password = '$hashpw' LIMIT 1");
      if (!empty($result)) {
        createSession($username,$hashpw);
        $user = $result[0];
        $_SESSION['name'] = $user['username'];
        header("Location: ../index"); 
        return 1;
      }
      else {
        echo "<p>Error: Your username or password is incorrect. Please re-enter your credentials.</p>";
        echo "<p><a href='login'>Try Again</a></p>";
        return 0;
      }
    }
  }

  function query($query) {
    require_once("get_sel_db.php");
    $st = $db->query($query);
    $success = $st->fetchAll(PDO::FETCH_ASSOC);

    require_once("close_db.php");
    return $success;
  }
?>

  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html> 