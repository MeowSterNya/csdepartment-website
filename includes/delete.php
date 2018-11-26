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

if(isset($_GET["delete-alumni"])) {
    $ID = $_GET["delete-alumni"];
    $result = query("DELETE FROM `alumni` WHERE ID=$ID");

    /* $reset_id = query("ALTER TABLE `clubs` DROP ID"); //deletes ID column in clubs table

                $restart_id = query("ALTER TABLE `clubs` ADD ID INT(3) NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (ID)"); //recreates ID column in clubs table
                */
    if($result>0)
    {
?><script>window.alert("Alumni deleted successfully");</script><?php
    }
    else
    {
?><script>window.alert("Failed to delete Alumni");</script><?php
    }
}

if(isset($_GET["delete-staff"])) {
    $ID = $_GET["delete-staff"];
    $result = query("DELETE FROM `staff` WHERE ID=$ID");

    /* $reset_id = query("ALTER TABLE `clubs` DROP ID"); //deletes ID column in clubs table

                $restart_id = query("ALTER TABLE `clubs` ADD ID INT(3) NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (ID)"); //recreates ID column in clubs table
                */
    if($result>0)
    {
        ?><script>window.alert("Staff deleted successfully");</script><?php
    }
    else
    {
        ?><script>window.alert("Failed to delete Staff");</script><?php
    }
}

if(isset($_GET["delete-activity"])) {
    $ID = $_GET["delete-activity"];
    $result = query("DELETE FROM `activities` WHERE ID=$ID");

    /* $reset_id = query("ALTER TABLE `clubs` DROP ID"); //deletes ID column in clubs table

                $restart_id = query("ALTER TABLE `clubs` ADD ID INT(3) NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (ID)"); //recreates ID column in clubs table
                */
    if($result>0)
    {
?><script>window.alert("Activity deleted successfully");</script><?php
    }
    else
    {
?><script>window.alert("Failed to delete Activity");</script><?php
    }
}

if(isset($_GET["delete-courses"])) {
    $ID = $_GET["delete-courses"];
    $result = query("DELETE FROM `courses` WHERE ID=$ID");

    /* $reset_id = query("ALTER TABLE `clubs` DROP ID"); //deletes ID column in clubs table

                $restart_id = query("ALTER TABLE `clubs` ADD ID INT(3) NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (ID)"); //recreates ID column in clubs table
                */
    if($result>0)
    {
?><script>window.alert("Courses deleted successfully");</script><?php
    }
    else
    {
?><script>window.alert("Failed to delete Courses");</script><?php
    }
}

if(isset($_GET["delete-programme"])) {
    $ID = $_GET["delete-programme"];
    $result = query("DELETE FROM `programmes` WHERE ID=$ID");

    /* $reset_id = query("ALTER TABLE `clubs` DROP ID"); //deletes ID column in clubs table

                $restart_id = query("ALTER TABLE `clubs` ADD ID INT(3) NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (ID)"); //recreates ID column in clubs table
                */
    if($result>0)
    {
?><script>window.alert("Programme deleted successfully");</script><?php
    }
    else
    {
?><script>window.alert("Failed to delete Programme");</script><?php
    }
}
?>
