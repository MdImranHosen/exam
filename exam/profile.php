<?php include 'inc/header.php'; ?>
<?php
  Session::checkSession();
  $userId = Session::get("userId");
?>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$userProfile = $user->getUserPData($userId, $_POST);
}
?>
<div class="main">
<h1>Update Your Profile!</h1>
<?php
if (isset($userProfile)) {
	echo $userProfile;
}
?>
<div class="profile">
	<form action="" method="post">
<?php
  $getData = $user->getUserProfile($userId);
  if ($getData) {
  	while ($result = $getData->fetch_assoc()) {
?>
		<table class="tbl"> 
			 <tr>
			 	<td>Name</td>
			 	<td><input type="text" name="name" value="<?php echo $result['name']; ?>" id="name"></td>
			 </tr>
			 <tr>
			   <td>User Name </td>
			   <td><input type="text" name="userName" value="<?php echo $result['userName']; ?>" id="userName"></td>
			 </tr>
			 <tr>
			   <td>Email</td>
			   <td><input name="email" type="email" value="<?php echo $result['email']; ?>" id="email"></td>
			 </tr>
			 			 
			  <tr>
			  <td></td>
			   <td><input type="submit" id="profileUpdate" value="Update">
			   </td>
			 </tr>
       </table>
       <?php }  } ?>
	   </form>
	</div>
</div>
<?php include 'inc/footer.php'; ?>