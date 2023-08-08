<?php
    include('../functions.php');
    $id = $_GET['id'];

    $query = "DELETE FROM `user` WHERE `user`.`id` = '$id';";
        if(performQuery($query)){
            echo "Account has been rejected.";

        }else{
            echo "Unknown error occured. Please try again.";
        }

?>
<br/><br/>
<a href="list of register.php">Back</a>
