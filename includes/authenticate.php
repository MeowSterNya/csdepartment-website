<?php
  function login() {
    if(isset($_POST["login"])) {
      $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
      $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
      $hashpw = md5($password);
      $result = query("SELECT * FROM accounts WHERE username = '$username' AND password = '$hashpw' LIMIT 1");
      if (!empty($result)) {
        createSession();
        $user = $result[0];
        $_SESSION['name'] = $user['username'];
        header("Location: ../index.php"); 
        return 1;
      }
      else {
        echo "Error: Your username or password is incorrect. Please re-enter your credentials.";
        echo "<a href='login.php'>Try Again</a>";
        return 0;
      }
    }
  }
?>