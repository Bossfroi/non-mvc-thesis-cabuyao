<!--===========================START PHP INCLUDE SESSION   ========================================-->
<?php include('../include/sessionfunction/sessionhead.php');?>
<?php include('../include/sessionfunction/sessionnav.php');?>
<?php    require_once("../ctmls.io"); ?>
<?php $id1 = $_GET['id']; ?>
<?php
    $query = "SELECT * FROM `posting`  where `id` = '$id1' ";
    if(count(fetchAll($query))>0){
        foreach(fetchAll($query) as $row){
            ?>
<!--End Include pogi -->
<!--===============================================================================================-->
<div class="hero-wrap " style="background-image: url('../assets/images/image_5.jpg');">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Forum</span></p>
        <h1 class="mb-0 bread">Forum</h1>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-8" style="padding: 30px; margin:0 auto;">
    <!--==Start of posting php==-->
                <div class="row pd-10 mt-3">
                  <div class="col-md-4 text-right">
                        <h class="row pd-10 mt-3"><?php echo'<img src="data:image/jpeg;base64,' .base64_encode($row['upload']).'" height="200" width="250"/>'; ?>
                  </div>
                  <div class="col-md-9">
                        <p class="mt-3"><?php echo $row['date'] ?><i class="ml-4 icon-chat text-muted"></i><small>3</small></p>
                        <h1	class="text-muted" style="font-size:14px; text-transform:capitalize">
                          Username:  <?php echo $row['username']?> </h1>
                        <p class="lead text-muted" style="font-size:14px;"><?php echo $row['post'] ?></p>
                      </div>
                    </div>
                    <?php
                            }
                        }else{
                            echo "";
                        }
                        ?>
    <!--end of php-->
    <h3>Comment section</h3>
      <label>Post</label>
        <form action="#" method="post" enctype="multipart/form-data">
        <div id="forums_content">
      <input type="text" name="username_replyed" class="input10" hidden  value="<?php echo $row['username']?>"/>
      <input type="text" name="usernameid" class="input10" hidden   value="<?php   echo $row['id']; ?>"/>
      <input type="text" name="username" class="input10"   hidden  value="<?php	echo $_SESSION["username"]?>"/>
      <textarea class="form-control" name="comments" id="txt_forum"  style="border:1px solid lightgray !important; resize: none; font-size: 14px; letter-spacing: 0.5px;"></textarea>
      <button type="submit" name="submit1" class="btn-info" id="btn_postForum" style="width:10%; float:right">SUBMIT</button>
      <!--start of comments php-->
      <?php
      if(isset($_POST['submit1']))
      {
      		if(empty($_POST["comments"]))
      		{
      				 echo '<script>swal.fire("Both Fields are required")</script>';
      		}
      		else
      		{
       }
               $username_replyed1 = ($_POST["username_replyed"]);
      				 $usernameid1 = ($_POST["usernameid"]);
               $username1 = ($_POST["username"]);
      				 $comments1 = ($_POST["comments"]);
               $lik = '0';
      				 $query1 = "insert into comments (username_replyed,  username_id, username, Comments,userLkes, date) values ('$username_replyed1', '$usernameid1', '$username1', '$comments1','$lik', CURRENT_TIMESTAMP)";

      				 if(performQuery($query1))
      				 {
                 echo '<script> if(alert("Successfully")){window.location.href="readmore.php"};</script>';
      				 }
      		}
      ?>
      <!--start of comments view php-->
      <?php
          $queryxx = "SELECT * FROM `comments` where username_id = $id1 order by id desc ;";
          if(count(fetchAll($queryxx++))>0){
              foreach(fetchAll($queryxx++) as $row ){
                  ?>
                  <br>
                    <br>
  									<div class="">
                    <h1 style="font-size:14px; text-transform:capitalize">Username: <?php echo $row['username']?> </h1>
  												<p class="" ><?php echo $row['Comments'] ?></i><small></small></p>
                          <p class="mt-3"><?php echo $row['date'] ?></i><small></small></p>
                        <?php
                        $_SESSION["username"];
                        if (($row['username']) && $_SESSION['username'] == $row['username']): ?>
                              <a href="" >Edit |</a>
                      <a href="Process/deletecomments.php?id=<?php echo $row['ID'] ?>" class="button">Delete</a>
                                        <?php else: ?>
                                          <?php
                                            $query1=mysqli_query($conn,"select * from `likecomments` where postid='".$row['ID']."' and userid='".$_SESSION['userid']."'");
                                            if (mysqli_num_rows($query1)>0){
                                              ?>
                                              <button value="<?php echo $row['ID']; ?>" class="unlike btn-info">Unlike</button>
                                              <?php
                                            }
                                            else{
                                              ?>
                                              <button value="<?php echo $row['ID']; ?>" class="like btn-info">Like</button>
                                              <?php
                                            }
                                          ?>
                                        <span id="show_like<?php echo $row['postid']; ?>">
                                          <?php
                                            $query3=mysqli_query($conn,"select * from `likecomments` where postid='".$row['ID']."'");
                                            echo mysqli_num_rows($query3);
                                          ?>
                                        </span>
                        <?php
                      endif;
                    }
  							      }else{
  							          echo "<center><h2>No Comments.</h2></center>";
  							      }
  							  ?>						<!--end of php -->
</div>
    </form>
</div>
  </div>
</div>
  <?php include('../include/footer.php'); ?>
  <?php include('../include/sessionfunction/sessionscript.php');?>
    <script src = "jquery-3.1.1.js"></script>
    <script type = "text/javascript">
    	$(document).ready(function(){

    		$(document).on('click', '.like', function(){
    			var id=$(this).val();
    			var $this = $(this);
    			$this.toggleClass('like');
    			if($this.hasClass('like')){
    				$this.text('Like');
    			} else {
    				$this.text('Unlike');
    				$this.addClass("unlike");
    			}
    				$.ajax({
    					type: "POST",
    					url: "Process/like.php",
    					data: {
    						id:id,
    						like: 1,
    					},
    					success: function(){
    						showLike(id);
    					}
    				});
    		});
    		$(document).on('click', '.unlike', function(){
    			var id=$(this).val();
    			var $this = $(this);
    			$this.toggleClass('unlike');
    			if($this.hasClass('unlike')){
    				$this.text('Unlike');
    			} else {
    				$this.text('Like');
    				$this.addClass("like");
    			}
    				$.ajax({
    					type: "POST",
    					url: "Process/like.php",
    					data: {
    						id: id,
    						like: 1,
    					},
    					success: function(){
    						showLike(id);
    					}
    				});
    		});

    	});

    	function showLike(id){
    		$.ajax({
    			url: 'Process/show_like.php',
    			type: 'POST',
    			async: false,
    			data:{
    				id: id,
    				showlike: 1
    			},
    			success: function(response){
    				$('#show_like'+id).html(response);
    			}
    		});
    	}
    </script>
  </body>
  </html>
