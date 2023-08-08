<!--===========================START PHP INCLUDE =================================================-->
<?php include('include/sessionfunction/sessionhead.php');?>
		<?php include('include/sessionfunction/sessionnav.php');?>
<?php    require_once("../functions.php"); ?>
		<!--End Include pogi -->
<!--===============================================================================================-->
<h1><center>User Request</center></h1>
<br><br>
  <?php
      $query = "SELECT * FROM `requestuser` ORDER BY `id` DESC";
      if(count(fetchAll($query))>0){
          foreach(fetchAll($query) as $row){
              ?>
<center>
          <h1 class="jumbotron-heading"><?php echo $row['email'] ?></h1>
          <p class="lead text-muted">Username:<?php echo $row['username'] ?></p>
          <p class="lead text-muted">Location:<?php echo $row['address'] ?></p>
          <p class="lead text-muted">Phone#: <?php echo $row['Phone'] ?></p>
            <p class="lead text-muted"><?php echo $row['Message'] ?></p>
            <p class="lead text-muted"><?php echo'<img src="data:image/jpeg;base64,' .base64_encode($row['ValidID']).'" height="150" width="250"/>'; ?><?php echo'<img src="data:image/jpeg;base64,' .base64_encode($row['Photo']).'" height="150" width="200"/>'; ?></p>
            <p>
              <a href="accept.php?id=<?php echo $row['id'] ?>" class="btn btn-primary my-2">Accept</a>
              <a href="reject.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary my-2">Reject</a>
            </p></p></p></p></p>
          <small><i><?php echo $row['date'] ?></i></small>
          <br>
          <br>
          <br>

        </center>
  <?php
          }
      }else{
          echo "<center><h2>No Pending Requests.</h2></center>";
      }
  ?>
</body>
<footer>
</footer>
</html>
<?php include('include/sessionfunction/sessionscript.php');?>
    <?php include('include/footer.php');?>
