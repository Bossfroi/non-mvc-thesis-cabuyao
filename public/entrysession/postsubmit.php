<?php
  require_once '../ctmls.io';
if(isset($_SESSION["username"]))
{
}
if(isset($_POST['submit']))
{
		if(empty($_POST["content"]))
		{
				 echo '<script>alert("Both Fields are required")</script>';

		}
		else
		{
 }
         $username1 = ($_POST["created"]);
				 $content = ($_POST["content"]);
				 $upload = addslashes(file_get_contents($_FILES["picture"]['tmp_name']));
				 $query = "insert into posting (username, post, upload, date)values ('$username1', '$content', '$upload',CURRENT_TIMESTAMP)";

				 if(performQuery($query))
				 {
           echo '<script> if(window.confirm("Successfully")){window.location.href="blog.php"};</script>';


				 }

		}
?>
