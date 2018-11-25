<?php
  require_once("session.php");
  require_once("create.php");
  require_once("delete.php");
  require_once("update.php");
  session_start(); 
  login();
  logout();

  function login() 
  {
    if(isset($_POST["login"])) {
      $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
      $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
      $hashpw = md5($password);
      $result = query("SELECT * FROM accounts WHERE username = '$username' AND password = '$hashpw' LIMIT 1");
      if (!empty($result)) {
        createSession($username,$hashpw);
        $user = $result[0];
        $_SESSION['name'] = $user['username'];
        $_SESSION['last_action'] = time();
        header("Location:../index"); 
      }
      else {
        echo "<p>Error: Your username or password is incorrect. Please re-enter your credentials.</p>";
        echo "<p><a href='../index'>Try Again</a></p>";
      }
    }
  }

  function query($query) 
  {
    require_once("dbconfig.php");
    $st = $db->query($query);
    $success = $st->fetchAll(PDO::FETCH_ASSOC);
    require_once("close_db.php");
    return $success;
  }
    
  function logout()
  {
    if(isset($_POST["logout"]))
    {
      killSession();
      //header("Location:index");
    }
  }
?>
