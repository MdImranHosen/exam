<?php include 'inc/header.php'; ?>
<?php
 Session::checkSession();
$total    = $exam->getTotalRows(); 
?>
<div class="main">
<h1>All Question & Answer <?php echo $total; ?></h1>
	<div class="viewanswer">
		<table>
		<?php
          $getQues = $exam->getqueData();
          if ($getQues) {
          	while ($question = $getQues->fetch_assoc()) {
		?> 
			<tr>
				<td colspan="2">
				 <h3>Que <?php echo $question['quesNo']." : ".$question['ques']; ?></h3>
				</td>
			</tr>
         <?php
              $quesnumber = $question['quesNo'];
              $answer = $exam->getAnswer($quesnumber);
              if ($answer) {
              	while ($result = $answer->fetch_assoc()) {
         ?>
			<tr>
				<td>
				 <input type="radio" /><?php 
                  if ($result['rightAns'] == '1') {
                  	echo "<span style='color:blue;'>".$result['ans']."</span>";
                  }else{
				   echo $result['ans'];
                    }
				  ?>
				</td>
			</tr>
			<?php } } ?>
			<?php } } ?>
		</table>
			<a href="starttest.php">Start Test</a>
</div>
 </div>
<?php include 'inc/footer.php'; ?>