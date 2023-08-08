<?php
    include('../ctmls.io');
    $id = $_GET['id'];

    $query = "DELETE FROM `requestuser` WHERE `requestuser`.`id` = '$id';";
        if(performQuery($query)){
            echo "Account has been rejected.";

        }else{
            echo "Unknown error occured. Please try again.";
        }
        $url=$_SERVER['HTTP_REFERER'];
        header("location:$url");
?>

<br/><br/>
<a href="UserAuth.php">Back</a>
