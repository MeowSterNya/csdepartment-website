<?php
  //Function to Create a session.{
  function createSession() {
    $_SESSION = $_POST;
    $_SESSION["sessionPass"] = 1;
      //echo "sessionmade";
      session_start();
  }//}End Function createSession.

//Function to end a session.{
  function killSession() {
    session_unset();
    session_destroy();
  } //}End function killSession.

function sessionExpire()
    {
        $expireAfter = 0.25;
        if(isset($_SESSION['last_action']))
        {
            $secondsInactive = time() - $_SESSION['last_action'];
            $expireAfterSeconds = $expireAfter * 60;
            
            if($secondsInactive >= $expireAfterSeconds)
            {
                killSession();
                header("Refresh:0; url=includes/login.php");  
                
            }
        
        }
        
        
    }

?>
