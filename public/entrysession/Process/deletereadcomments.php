<?php

      include('../../ctmls.io');
    $id = $_GET['id'];

    $query = "DELETE FROM `askaquestionofbuyers` WHERE `id` = '$id';";
        if(performQuery($query)){

          $url=$_SERVER['HTTP_REFERER'];
          header("location:$url");

        }else{
            echo "Unknown error occured. Please try again.";

        }

?>
