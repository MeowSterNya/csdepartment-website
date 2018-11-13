<?php
  function createSession() {
    $_SESSION = $_POST;
    $_SESSION["allowAccess"] = 1;
      session_start();
  }

  function killSession() {
    session_unset();
    session_destroy();
  }
?>
