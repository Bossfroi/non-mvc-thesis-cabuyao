<!--===========================START PHP INCLUDE =================================================-->
<?php include('include/sessionfunction/sessionhead.php');?>
		<?php include('include/sessionfunction/sessionnav.php');?>
<?php    require_once("../ctmls.io"); ?>
		<!--End Include pogi -->
<!--===============================================================================================-->
<br><br><br><br><br>
          <h2><center>List Of Register</center></h2>
  <?php
      $query = "SELECT * FROM `user` ORDER BY `id` DESC";
      if(count(fetchAll($query))>0){
          foreach(fetchAll($query) as $row){
              ?>
<center>
          <h4 class="jumbotron-heading">Username:<?php echo base64_decode( $row['username']) ?></h4>
          <p class="lead text-muted">Email:<?php echo $row['email'] ?></p>
          <p class="lead text-muted">Location:<?php echo $row['address'] ?></p>
          <p class="lead text-muted">Phone#: <?php echo $row['Phone'] ?></p>
          <?php echo'<img src="data:image/jpeg;base64,' .($row['ValidID']); ?><?php echo'<img src="data:image/jpeg;base64,' .($row['Photo']); ?></p>
            <p>
              <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-primary my-2">Delete</a>
            </p></p></p></p></p>
          <small><i>Date Created  :<?php echo $row['date_created'] ?></i></small>
          <br>
          <br>
          <br>

        </center>
  <?php
          }
      }else{
          echo "<center><h2>No Register.</h2></center>";
      }
  ?>
</body>
<footer>
</footer>
</html>

		<?php include('include/sessionfunction/sessionscript.php');?>
    		<?php include('include/footer.php');?>
