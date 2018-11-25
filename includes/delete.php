<?php
    if(isset($_GET["delete-club"])) {
          $ID = $_GET["delete-club"];
            $result = query("DELETE FROM `clubs` WHERE ID=$ID");
            
               /* $reset_id = query("ALTER TABLE `clubs` DROP ID"); //deletes ID column in clubs table

                $restart_id = query("ALTER TABLE `clubs` ADD ID INT(3) NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (ID)"); //recreates ID column in clubs table
                */
            if($result>0)
            {
                ?><script>window.alert("Club deleted successfully");</script><?php
            }
            else
            {
                ?><script>window.alert("Failed to delete Club");</script><?php
            }




    }
?>
