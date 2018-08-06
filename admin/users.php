<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
	include_once ($filepath.'/../classes/User.php');
	$user = new User();
?>
<?php 
 if (isset($_GET['dis'])) {
 	$disid = (int)$_GET['dis'];
 	$disuser = $user->disableUser($disid);
 }

 if (isset($_GET['ena'])) {
 	$enaid = (int)$_GET['ena'];
 	$enauser = $user->enaUser($enaid);
 }
  if (isset($_GET['del'])) {
 	$delid = (int)$_GET['del'];
 	$deluser = $user->delUser($delid);
 }
?>
<div class="main">
	<h1 align="center">Admin Panel -- Manage User.</h1>
	<?php 
       if (isset($disuser)) {
       	echo $disuser;
       }
       if (isset($deluser)) {
       	echo $deluser;
       }
	?>
  <div class="manageuser">
  	 <table class="tblone">
  	 	<tr>
  	 		<th>NO</th>
  	 		<th>NAME</th>
  	 		<th>USERNAME</th>
  	 		<th>EMAIL</th>
  	 		<th>ACTION</th>
  	 	</tr>
  	 	<?php 
          $userData = $user->getUserData();
          if ($userData) {
          	$i = 0;
          	while ($result = $userData->fetch_assoc()) {
          	$i++;
          	
  	 	?>
  	 	<tr>
  	 		<td><?php
  	 		if ($result['status'] == '1') {
  	 			echo "<span class='error'>".$i."</span>";
  	 		}else{
  	 			echo $i;
  	 		}
  	 		 

  	 		  ?></td>
  	 		<td><?php echo $result['name']; ?></td>
  	 		<td><?php echo $result['userName']; ?></td>
  	 		<td><?php echo $result['email']; ?></td>
  	 		<td>
  	 			<?php if ($result['status'] == '0') { ?>
                   	<a onclick="return confirm('Are you sure to Disable.')" href="?dis=<?php echo $result['userId']; ?>">Disable</a>
                 <?php } else{ ?>
                      <a onclick="return confirm('Are you sure to Enable.')" href="?ena=<?php echo $result['userId']; ?>">Enable</a>
  	 			<?php } ?>
  	 		   	 		  
  	 		  || <a onclick="return confirm('Are you sure to Delete.')" href="?del=<?php echo $result['userId']; ?>">Remove</a>
  	 		</td>
  	 	</tr>
  	 	<?php } } ?>
  	 </table>
  </div>

	
</div>
<?php include 'inc/footer.php'; ?>