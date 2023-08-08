		<!--===========================START PHP INCLUDE SESSION   ========================================-->
		<?php include('../include/sessionfunction/sessionhead.php');?>
		<?php include('../include/sessionfunction/sessionnav.php');?>
		<?php    require_once("../ctmls.io"); ?>

		<!--End Include pogi -->
		<!--===============================================================================================-->
		<html lang="en">
		<div class="hero-wrap hero-bread" style="background-image: url('../assets/images/landscape.jpg');">
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-center margin:0 auto">
					<div class="col-md-9 ftco-animate text-center">
						<p class="breadcrumbs"><span class="mr-2 margin:0 auto" ><a href="index.php">Home</a></span> <span>Forum</span></p>
						<h1 class="mb-0 bread margin:0 auto">Forum</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 ftco-animate" style=" margin:0 auto;">

				<h3>Create a Forum</h3>
				<label>Create a post</label>
				<form action="postsubmit.php" method="post" enctype="multipart/form-data" class="form justify-content-center container margin:0 auto">
					<div id="forums_content margin:0 auto">
						<textarea class="form-control margin:0 auto" name="content"id="txt_forum " ></textarea>
						<input type="file" required name="picture" id="picture" class="form-control margin:0 auto" accept="image/gif, image/jpeg, image/x-ms-bmp, image/x-png">
						<input type="text" name="created" class="input10 margin:0 auto" required  readonly="readonly" hidden  value="<?php	echo $_SESSION["username"]?>"/>
						<button type="submit" name="submit" class="btn-primary margin:0 auto" id="btn_postForum" >Post</button>
					</div>
				</form>

			</div>
		</div>
		<!-- php-->

		<?php
		$query = "SELECT * FROM `posting` ORDER BY `id` DESC;";
		if(count(fetchAll($query))>0){
			foreach(fetchAll($query) as $row){
				?>

				<div class="row pd-10 mt-3 justify-content-center">
					<div class="col-md-4">
						<?php echo'<img src="data:image/jpeg;base64,' .base64_encode($row['upload']).'" height="250" width="450 margin:0 auto"/>'; ?>
						
						<p class="mt-3 margin:0 auto"><?php echo $row['date'] ?>
						<i class="ml-4 icon-chat text-muted margin:0 auto"></i><small></small></p>
						<h1	class="text-muted" style="font-size:14px; text-transform:capitalize margin:0 auto">
							<?php echo $row['username']?> </h1>
							<p class="lead text-muted margin:0 auto" style="font-size:14px;"><?php echo $row['post'] ?></p>
							<a href="readmore.php?id=<?php echo $row['id'] ?>" class="btn btn-primary ">Write a Comment</a>
							<?php	$_SESSION["username"];
							if (($row['username']) && $_SESSION['username'] == $row['username']): ?>
								<a href="Process/deletesetforum.php?id=<?php  echo $row['id'] ?>" class="btn btn-primary margin:0 auto">Delete</a>
							<?php  endif ?>

							</div></div>
					
					<?php

				}
			}else{
				echo "<center><h2>No Post.</h2></center>";
			}

			?>

			<!--end of php -->
<hr>
<br>
			<?php include('../include/footer.php'); ?>
			<?php include('../include/sessionfunction/sessionscript.php');?>
		</div>


	</body>
	</html>
