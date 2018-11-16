<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="../css/css.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="../favicon.png">
  <title>Login</title>
</head>
<body>
  <div class="container">
  
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

  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>