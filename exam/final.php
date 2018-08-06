<?php include 'inc/header.php'; ?>
<?php
  Session::checkSession();
?>
<div class="main">
<h1>You are Done!</h1>
	 <div class="startest">
 	 <p>Congrats ! You have just completed test.</p>
 	 <p><strong>Final Score: 
          <?php
             if (isset($_SESSION['score'])) {
             	echo $_SESSION['score'];
             	unset($_SESSION['score']);
             }
          ?>
 	  </strong></p>
 	 <a href="viewans.php">View Answer</a>
 	 <a href="starttest.php">Start Test</a>
 </div>	
  </div>
<?php include 'inc/footer.php'; ?>