<?php
    require_once '../ctmls.io';
    $id = $_GET['id'];
    $query1 = "select * from requestuser where `id` = '$id' ";
    if(count(fetchAll($query1)) > 0){
        foreach(fetchAll($query1) as $rows){
            $id== $rows['id'];
          $username1 = $rows['username'];
          $password1 = $rows['password'];
          $email1 = $rows['email'];
          $address1 = $rows['address'];
          $Phone1 = $rows['Phone'];
          $ValidID1 = base64_encode($rows['ValidID']).'" height="150" width="300"/></td>"';
          $Photo1 = base64_encode($rows['Photo']).'" height="150" width="300"/></td>"';
          $date1 = ($rows['date']);
          $query1 = "INSERT INTO user (`id`,`username`, `password`, `email`, `address`, `Phone`, `ValidID`, `Photo`, `date_created`)  VALUES  (NULL,'$username1', '$password1', '$email1', 'address1', '$Phone1', '$ValidID1', '$Photo1',CURRENT_TIMESTAMP);";
        }
        $query1 .= "DELETE FROM `requestuser` WHERE `requestuser`.`id` = '$id';";

        if(performQuery($query1)){
            echo "Account has been accepted.";
        }else{
            echo "Error insert query or problem sql. Please try again.";
        }
    }else{
        echo "ERROR.";
    }

?>
<br/><br/>
<a href="UserAuth.php">Back</a>
