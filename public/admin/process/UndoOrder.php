<?php
      include('../../ctmls.io');
    $id = $_GET['id'];
      $accept = 1;
    $query = "update buyproduct set Orderstatus=$accept where `id` = '$id';";
        if(performQuery($query)){

               echo '<script> (alert("Successfully"));</script>';
        }else{
            echo "Unknown error occured. Please try again.";
        }
        $url=$_SERVER['HTTP_REFERER'];
        header("location:$url");
?>
