<?php
require_once '../ctmls.io';
if(isset($_POST['submit']))
{
  if(empty($_POST["requestss"]))
  {
    echo '<script>alert("Both Fields are required")</script>';

  }
  else
  {
$name = ($_POST["name"]);
$address = ($_POST["address"]);
$mobile = ($_POST["mobile"]);
$request = ($_POST["requestss"]);
$others = ($_POST["others"]);
$message = ($_POST["message"]);
}
//modify Total Kilo//
$query = "insert into itemrequestform (name ,address , mobile ,request ,others ,message) values ('$name','$address','$mobile', '$request','$others','$message')";

if(performQuery($query)>0)
{
  echo '<script> if(window.confirm("Successfully")){window.location.href="itemproductrequest.php"};</script>';

}else{

  echo "error";
}
}










?>
