<?php

      include('../../ctmls.io');
    $id = $_GET['id'];

    $query = "DELETE FROM `comments` WHERE `comments`.`id` = '$id';";
        if(performQuery($query)){


               echo '<script> (alert("Successfully"));</script>';


        }else{
            echo "Unknown error occured. Please try again.";

        }
        $url=$_SERVER['HTTP_REFERER'];
        header("location:$url");
?>
