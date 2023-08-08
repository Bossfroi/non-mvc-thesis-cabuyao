<?php
 //entry.php
session_start();
if(!isset($_SESSION["username"]))
{
  header("location:index.php?action=login");

}
?>
 <?php
 //logout.php
 session_destroy();
 header("location:../login.php?action=login");
 ?>
