<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
	include_once ($filepath.'/../classes/Exam.php');
	$exam = new Exam();
?>
<?php
  if (isset($_GET['delque'])) {
    $quesNo = (int)$_GET['delque'];
    $delresult = $exam->getdelresult($quesNo);
  }
?>
<div class="main">
	<h1 align="center">Admin Panel -- Question List.</h1>
  <?php
   if (isset($delresult)) {
     echo $delresult;
   }
  ?>
  <div class="questionlist">
  	 <table class="tblone">
  	 	<tr>
  	 		<th width="10%">NO</th>
  	 		<th width="70%">Question</th>
  	 		<th width="20%">ACTION</th>
  	 	</tr>
  	 	<?php  
          $questionData = $exam->getqueData();
          if ($questionData) {
          	$i = 0;
          	while ($result = $questionData->fetch_assoc()) {
          	$i++;
          	
  	 	?>
  	 	<tr>
  	 		<td><?php echo $i; ?></td>
  	 		<td><?php echo $result['ques']; ?></td>
  	 		<td><a onclick="return confirm('Are you sure to Delete.')" href="?delque=<?php echo $result['quesNo']; ?>">Remove</a>
  	 		</td>
  	 	</tr>
  	 	<?php } } ?>
  	 </table>
  </div>

	
</div>
<?php include 'inc/footer.php'; ?>