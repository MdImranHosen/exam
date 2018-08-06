<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
	include_once ($filepath.'/../classes/Exam.php');
	$exam = new Exam();
?>
<style type="text/css">
.adminpanel{width: 480px;margin: 20px auto 0;color:#999;border: 1px solid #ddd;padding:10px;}
input[type="number"]{border: 1px solid #ddd; margin-bottom: 10px; padding: 5px; width: 100px;}
</style>
<?php
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   	  $addQuestion = $exam->getAddQuestion($_POST);
   }
   // Get Total
   $total = $exam->getTotalRows();
   $next = $total+1;
?>
<div class="main">
<h1 align="center">Admin Panel -- Add Question.</h1>
<?php 
  if (isset($addQuestion)) {
  	echo $addQuestion;
  }
?>
<div class="adminpanel">
	<form action="" method="post" name="tbl_ans">
		<table>
			<tr>
				<td>Question No</td>
				<td> : </td>
				<td><input type="number" name="quesNo" value="<?php 
                   if(isset($next)){
                   	  echo $next;
                   }

				 ?>"></td>
			</tr>
			<tr>
				<td>Question</td>
				<td> : </td>
				<td><input type="text" name="ques" placeholder="Enter Question type.." required></td>
			</tr>
			<tr>
				<td>Choice One</td>
				<td> : </td>
				<td><input type="text" name="ans1" placeholder="Enter Answer the Question."></td>
			</tr>
			<tr>
				<td>Choice Two</td>
				<td> : </td>
				<td><input type="text" name="ans2" placeholder="Enter Answer the Question."></td>
			</tr>
			<tr>
				<td>Choice Three</td>
				<td> : </td>
				<td><input type="text" name="ans3" placeholder="Enter Answer the Question."></td>
			</tr>
			<tr>
				<td>Choice Four</td>
				<td> : </td>
				<td><input type="text" name="ans4" placeholder="Enter Answer the Question."></td>
			</tr>
			<tr>
				<td>Correct No</td>
				<td> : </td>
				<td><input type="number" name="rightAns" required="1"></td>
			</tr>
            <tr>
            	<td align="center" colspan="3"><input type="submit" value="Submit"></td>
            </tr>
		</table>
	</form>
</div>

	
</div>
<?php include 'inc/footer.php'; ?>