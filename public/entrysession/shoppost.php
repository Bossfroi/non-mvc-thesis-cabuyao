<!--===========================START PHP INCLUDE SESSION   ========================================-->
<?php include('../include/sessionfunction/sessionhead.php');?>
<?php include('../include/sessionfunction/sessionnav.php');?>
<?php    require_once("../ctmls.io"); ?>
<?php $id1 = $_GET['id']; ?>
<!--End Include pogi -->
<!--===============================================================================================-->
<?php
$query = "SELECT * FROM `sellaproduct`  where `id` = '$id1' ";
         if(count(fetchAll($query))>0){
           foreach(fetchAll($query) as $row){
                        ?>
            <div class="row pd-10 mt-2">
              <div class="col-md-4 text-right">
                    <h class="x"><?php echo'<img src="data:image/jpeg;base64,' .base64_encode($row['Photo']).'" height="360" width="360"/>'; ?>
              </div>
              <div class="col-md-4">
                    <p class="mt-9"><?php echo $row['date'] ?>
                      <i class="ml-4 icon-chat text-muted"></i><small></small></p>
                    <h1	class="text-muted" style="font-size:14px; text-transform:capitalize">
                      Seller: <?php echo $row['Usernameseller']?> </h1>
                    <p class="lead text-muted" style="font-size:14px;">Product: <?php echo $row['product_name'] ?></p>
                    <p class="lead text-muted" style="font-size:14px;">Description: <?php echo $row['post'] ?></p>
                    <p class="lead text-muted" style="font-size:14px;">Location: <?php echo $row['Location'] ?></p>
                    <p class="lead text-muted" style="font-size:14px;">Price: <?php echo $row['Price'] ?></p>
                    <p class="lead text-muted" style="font-size:14px;">Contact: <?php echo $row['Contact'] ?></p>
                    <p class="lead text-muted" style="font-size:14px;">KG/min: <?php echo $row['KG'] ?>kg</p>
                    <p class="lead text-muted" style="font-size:14px;">Date of post: <?php echo $row['date'] ?></p>
                    <?php
                    $_SESSION["username"];
                    if (($row['Usernameseller']) && $_SESSION['username'] == $row['Usernameseller']): ?>
                  <a href="Process/deletepost.php?id=<?php  echo $row['id'] ?>" class="btn btn-primary">Delete</a>
               <?php else: ?>

            <a href="Process/buycheck.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">buy-now</a>
            <a href="Process/cartid.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Add to Cart</a>

                     <?php endif; ?>


              </div>
            </div>
            <?php

                    }
                }else{
                    echo "<h1><center>ITEM DELETED</center></h1>";
                }

            ?>
            <h3>Ask a Question</h3>
              <label>Post</label>
                <form action="" method="post" enctype="multipart/form-data">
                <div id="forums_content">
                  <input type="text" name="productnames" class="input10" hidden  value="<?php echo $row['product_name']?>"/>
              <input type="text" name="username_replyed" class="input10" hidden  value="<?php echo $row['Usernameseller']?>"/>
              <input type="text" name="postid" class="input10" hidden   value="<?php   echo $row['id']; ?>"/>
              <input type="text" name="username" class="input10"   hidden  value="<?php	echo $_SESSION["username"]?>"/>
              <textarea class="form-control" name="comments" id="txt_forum" required  style="border:1px solid lightgray !important; resize: none; font-size: 12px; letter-spacing: 0.5px;"></textarea>
              <button type="submit" name="submit1" class="btn-info" id="btn_postForum" style="width:10%; float:right">SUBMIT</button>
              <!--start of comments php-->
              <?php
              if(isset($_POST['submit1']))
              {
              		if(empty($_POST["comments"]))
              		{
              				 echo '<script>swall.fire2("Both Fields are required")</script>';

              		}
              		else
              		{
               }       $nameproductcomments = ($_POST["productnames"]);
                       $usernameseller = ($_POST["username_replyed"]);
                       $postid = ($_POST["postid"]);
                       $usernamed = ($_POST["username"]);
              				 $post = ($_POST["comments"]);
              				 $query1 = "insert into askaquestionofbuyers (nameproductcomments ,Usernameseller ,postid ,Usernamed, post, date) values ('$nameproductcomments','$usernameseller', '$postid', '$usernamed', '$post', CURRENT_TIMESTAMP)";

              				 if(performQuery($query1))
              				 {
                         echo '<script> if(alert("Successfully")){window.location.href="shoppost.php"};</script>';
              				 }
              		}
              ?>
              <!--start of comments view/edit/delete php-->
              <!-- PROCESS  -->

              <?php

                  $query119283091823091820398123091823 = "SELECT * FROM `askaquestionofbuyers` where postid = $id1 order by id desc ;";
                  if(count(fetchAll($query119283091823091820398123091823++))>0){
                      foreach(fetchAll($query119283091823091820398123091823++) as $row ){
                          ?>
                          <br>
          									<div class="col-md-8">
                            <h1 style="font-size:14px; text-transform:capitalize">Username: <?php echo $row['Usernamed']?> </h1>
          												<p class="lead text-muted" ><?php echo $row['post'] ?></i><small></small></p>
                                  <p class="mt-3"><?php echo $row['date'] ?></i><small></small></p>

                                  <?php
                                  if (($row['Usernamed']) && $_SESSION['username'] == $row['Usernamed']): ?>
                                <a href="edit.php?id=<?php  echo $row['id'] ?>" class="slider-text">Edit |</a>
                             <?php else: ?>
                          <a href="Reply.php?id=<?php  echo $row['id'] ?>" class="slider-text">Reply|</a>
                                   <?php endif; ?>
                                  <?php
                                  if (($row['Usernamed']) && $_SESSION['username'] == $row['Usernamed']): ?>
                                <a href="Process/deletereadcomments.php?id=<?php  echo $row['id'] ?>" class="slider-text">Delete</a>
                             <?php else: ?>
                          <a href="LIKE.php?id=<?php  echo $row['id'] ?>" class="slider-text">Like</a>
                               <?php endif; ?>

          								</div>
          								<?php

          							          }
          							      }else{
          							          echo "<center><h2>No Comments.</h2></center>";
          							      }
          							  ?>



        </div>
            </form>

          </div>
        </div>

            <!--end of php -->

            <?php include('../include/footer.php'); ?>
              <?php include('../include/sessionfunction/sessionscript.php');?>
          </div>



        </body>
        </html>
