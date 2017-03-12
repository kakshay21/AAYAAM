<?php
session_start();
include 'core/dbh.php';
if(empty($_POST)===false){
	$team=$_POST['team_name'];
	$head=$_POST['head_name'];
	$pwd=$_POST['password'];
}
$sql="SELECT * FROM register WHERE team='$team' AND pwd='$pwd'";
$result=$conn->query($sql);
if($result->fetch_assoc()){
	$score=0;
	$quesid=1;
	$_SESSION['score']=$score;
	$_SESSION['team']=$team;
	$_SESSION['quesid']=$quesid;
	header("Location: question.php");
}	
else{
	header("Location: login.php");
}
?>