<?php
    require_once '../ctmls.io';
    $id = $_GET['id'];
    $query1 = "select * from itemrequestform where `id` = '$id' ";
    if(count(fetchAll($query1)) > 0){
        foreach(fetchAll($query1) as $rows){

          $others = 1;
          $query1 = "UPDATE itemrequestform set stat=$others WHERE id='$id'";
        }
        if(performQuery($query1)){
            echo "Request has been accepted.";
        }else{
            echo "Error insert query or problem sql. Please try again.";
        }
    }else{
        echo "ERROR.";
    }

?>
<br/><br/>
<a href="itemaceptprocess.php">Back</a>
