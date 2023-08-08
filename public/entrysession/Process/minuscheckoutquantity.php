<?php include('../../include/sessionfunction/sessionhead.php');?>
<?php    require_once '../../ctmls.io';
$id = $_GET['id'];
$sql_u = "SELECT * FROM cart WHERE id=$id and UsernameCart='".$_SESSION['username']."'";
$res_u = mysqli_query($conn, $sql_u);
if(mysqli_num_rows($res_u) > 0) {
//CHECKING
$query1 = "select * from cart where id='$id' and UsernameCart='".$_SESSION['username']."'";
 if(count(fetchAll($query1)) > 0){
    foreach(fetchAll($query1) as $rows){
      $count=$rows['quantity'];
        $new_count=$count-1;
if ($new_count<1) {
     $new_count=1;
    }
    }
    }
$sqls = "UPDATE cart set quantity=$new_count WHERE id='$id'";
if(mysqli_query($conn, $sqls)){
  $url=$_SERVER['HTTP_REFERER'];
  header("location:$url");
    }
    else{
        echo "ERROR.";
    }

}

?>
<br/><br/>
