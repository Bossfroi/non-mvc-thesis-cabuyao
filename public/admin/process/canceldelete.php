<?php

    include('../../ctmls.io');
  $id = $_GET['id'];

  $query = "DELETE FROM `buyproduct` WHERE `buyproduct`.`id` = '$id';";
      if(performQuery($query)){

      }else{
          echo "Unknown error occured. Please try again.";
      }
      $url=$_SERVER['HTTP_REFERER'];
      header("location:$url");
