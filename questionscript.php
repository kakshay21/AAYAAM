<?php
session_start();
include 'core/dbh.php';
$ans=$_POST['answer'];
$quesid=$_SESSION['quesid'];
$team=$_SESSION['team'];
$sql="SELECT * FROM question WHERE quesid='$quesid' AND ans='$ans'";
$result=$conn->query($sql);
if($row=$result->fetch_assoc()){
	$score=$_SESSION['score'];
	$score++;
	$quesid++;
	$check="SELECT * FROM score WHERE team='$team'";
	$result2=$conn->query($check);
	if($row1=$result2->fetch_assoc()){
		$update="UPDATE score SET score='$score' WHERE team='$team'";
		$result3=$conn->query($update);
		$_SESSION['quesid']=$quesid;
		$_SESSION['score']=$score;
		header("Location: question.php");
		
	}
	elseif(!($row1=$result2->fetch_assoc())){
			$insert="INSERT INTO score (team,score) 
VALUES ('$team','$score')";
		$result3=$conn->query($insert);
		header("Location: question.php");
		$_SESSION['quesid']=$quesid;
	}
}
else{
	$team=$_SESSION['team'];
	$score=$_SESSION['score'];
	$quesid++;
	$sql2="UPDATE score SET score='$score' WHERE team='$team'";
	$result2=$conn->query($sql2);
	header("Location: question.php");
	$_SESSION['quesid']=$quesid;
	}
?>