<?php
require_once("../../ctmls.io");
	session_start();

	if (isset($_POST['like'])){

		$id = $_POST['id'];
		$query=mysqli_query($conn,"select * from `likecomments` where postid='$id' and userid='".$_SESSION['userid']."'") or die(mysqli_error());

		if(mysqli_num_rows($query)>0){
			mysqli_query($conn,"delete from `likecomments` where userid='".$_SESSION['userid']."' and postid='$id'");
		}
		else{
			mysqli_query($conn,"insert into `likecomments` (userid,postid) values ('".$_SESSION['userid']."', '$id')");
		}
	}
?>
