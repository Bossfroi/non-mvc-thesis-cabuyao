<?php

    include('../../ctmls.io');
  $id = $_GET['id'];

  $query = "DELETE FROM `cart` WHERE `cart`.`id` = '$id';";
      if(performQuery($query)){

echo '<script> if(window.confirm("Successfully Delete")){window.location.href="cart.php"};</script>';

      }else{
          echo "Unknown error occured. Please try again.";
      }
      $url=$_SERVER['HTTP_REFERER'];
      header("location:$url");
