<?php
      include('../../ctmls.io');
    $id = $_GET['id'];
      $canceled = 0;
    $query = "update buyproduct set Orderstatus=$canceled where `id` = '$id';";
        if(performQuery($query)){

               echo '<script> (alert("Successfully"));</script>';
        }else{
            echo "Unknown error occured. Please try again.";
        }
        $url=$_SERVER['HTTP_REFERER'];
        header("location:$url");
?>
