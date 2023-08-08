<!--===========================START PHP INCLUDE =================================================-->
<?php include('include/sessionfunction/sessionhead.php');?>
		<?php include('include/sessionfunction/sessionnav.php');?>
<?php    require_once("../ctmls.io"); ?>
		<!--End Include pogi -->
<!--===============================================================================================-->
<h1><center>Item User Request</center></h1>
<br><br>
  <?php
      $query = "SELECT * FROM `itemrequestform` ORDER BY `id` DESC";
      if(count(fetchAll($query))>0){
          foreach(fetchAll($query) as $row){
              ?>
<center>
          <h1 class="jumbotron-heading">USER:<?php echo $row['name'] ?></h1>
          <p class="lead text-muted">Phone:<?php echo ( $row['mobile']) ?></p>
          <p class="lead text-muted">Location:<?php echo $row['address'] ?></p>
          <p class="lead text-muted">Request For:<?php echo $row['request'] ?></p>
            <p class="lead text-muted">Reason :<?php echo $row['message'] ?></p>
            <p class="lead text-muted">Reason :<?php echo $row['others'] ?></p>

            <p>
              <a href="accept2.php?id=<?php echo $row['id'] ?>" class="btn btn-primary my-2">Accept</a>
              <a href="reject1.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary my-2">Reject</a>
            </p></p></p></p></p>
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
