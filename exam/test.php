<?php include 'inc/header.php'; ?>
<?php
 Session::checkSession();
 if (isset($_GET['q'])) {
 	$quesnumber = (int) $_GET['q'];
 }else{
 	header("Location:exam.php");
 }
 $total    = $exam->getTotalRows();
 $question = $exam->getQuestionNumber($quesnumber);

?>
<?php
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 	$process = $pro->getProcessData($_POST);
 }

 
?>
<div class="main">
<h1>Question <?php echo $question['quesNo']." of ". $total; ?></h1>
	<div class="test">
		<form method="post" action="">
		<table> 
			<tr>
				<td colspan="2">
				 <h3>Que <?php echo $question['quesNo']." : ".$question['ques']; ?></h3>
				</td>
			</tr>
         <?php
              $answer = $exam->getAnswer($quesnumber);
              if ($answer) {
              	while ($result = $answer->fetch_assoc()) {
         ?>
			<tr>
				<td>
				 <input type="radio" name="ans" value="<?php echo $result['id']; ?>" /><?php echo $result['ans']; ?>
				</td>
			</tr>
			<?php } } ?>
			<tr>
			  <td>
				<input type="submit" name="submit" value="Next Question"/>
				<input type="hidden" name="quesnumber"
				 value="<?php echo $quesnumber; ?>" />
			</td>
			</tr>
			
		</table>
	</form>
</div>
 </div>
<?php include 'inc/footer.php'; ?>