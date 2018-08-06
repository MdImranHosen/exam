<?php include 'inc/header.php'; ?>
<?php
  Session::checkLogin();
?>
<div class="main">
<h1>Online Exam System - User Login</h1>
	<div class="segment" style="margin-right:30px;">
		<img src="img/test.png"/>
	</div>
	<div class="segment">
	<form action="index.php" method="post">
		<table class="tbl"> 
			 <tr>
			   <td>Email</td>
			   <td><input name="email" type="text" id="email"></td>
			 </tr>
			 <tr>
			   <td>Password </td>
			   <td><input type="password" name="password" id="password"></td>
			 </tr>
			 
			  <tr>
			  <td></td>
			   <td><input type="submit" id="loginsubm" value="Signup">
			   </td>
			 </tr>
       </table>
	   </form>
	   <p>New User ? <a href="register.php">Signup</a> Free</p>
	   <span class="empty" style="display: none;">Fields Must not be Empty!</span>
	   <span class="disable" style="display: none;">User ID Disable!</span>
	   <span class="error" style="display: none;">Email or Password not Matched!</span>
	</div>


	
</div>
<?php include 'inc/footer.php'; ?>