<?php
  //Function to create a session
  function createSession($username,$hashpw) {
    $_SESSION = $_POST;
    $_SESSION["sessionPass"] = $hashpw.md5($username);
    $_SESSION["sessionUsPas"] = $hashpw.md5($username);
    session_start();
  }

  //Function to end a session
  function killSession() {
    session_unset();
    session_destroy();
  }

  function sessionExpire() {
    $expireAfter = 5;
    if(isset($_SESSION['last_action']))
    {
      $secondsInactive = time() - $_SESSION['last_action'];
      $expireAfterSeconds = $expireAfter * 60;
      if($secondsInactive >= $expireAfterSeconds)
      {
        killSession();
        ?>
          <script>window.alert("You have been logged out due to inactivity, Please log in if you wish to continue your activities.");</script> 
        <?php   
      } 
    }  
  }
?>
