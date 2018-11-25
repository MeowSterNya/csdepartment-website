
<?php
if(isset($_POST["club-edit"]))
{
    $ID = $_POST["club-edit"];
    if(isset($_POST["club-update"]))
    {
        $name = $_POST["club-name"];
        $description = $_POST["club-description"];

        $result = query("UPDATE clubs SET
        name = $name,
        description = $description,
        WHERE   id = $ID");

        if($result>0)
        {
?><script>window.alert("Club updated successfully");</script><?php
        }
        else
        {
?><script>window.alert("Failed to update Club");</script><?php
        }

    }
}




    ?>
