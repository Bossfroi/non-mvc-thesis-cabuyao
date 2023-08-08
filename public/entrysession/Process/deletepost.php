<?php

  include('../../ctmls.io');
    $id = $_GET['id'];

    $query = "DELETE FROM `sellaproduct` WHERE `sellaproduct`.`id` = '$id';";
        if(performQuery($query)){

  echo '<script> if(window.confirm("Successfully Delete")){window.location.href="../shop.php"};</script>';

        }else{
            echo "Unknown error occured. Please try again.";

        }

?>
