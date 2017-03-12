<?php 
session_start();
include'overall/uptonav.php'; 
include 'core/dbh.php';
$quesid=$_SESSION['quesid'];
$result = mysqli_query($conn,"SELECT * FROM question WHERE quesid=$quesid");
	$row=$result->fetch_assoc();
	$_SESSION['quesid']=$quesid;
	echo "<br><form class='col s12' action='questionscript.php' method='POST'>
		<div class='container'>
			<div class='card-panel #e8eaf6 indigo lighten-5'>
      			<h4 class='header center orange-text'><br>".$row['ques']."</h4><br><br>
      			<div class='input-field col s12 m4'>
          		<input name='answer' type='text' class='validate'>
          			<label for='answer'>Answer</label>
          			<button class='btn waves-effect waves-light orange' type='submit' name='action'>Submit
          			</button><br><br>
          		</div>
          	</div>
        </div>
        <br><br>
        </form>";
include'overall/footer.php';
 ?>