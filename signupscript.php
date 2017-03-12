<?php
session_start();
include 'core/dbh.php';
if (isset($_POST['team_name']) && isset($_POST['password'])){
			$team=$_POST['team_name'];
			$head=$_POST['head_name'];
			$email=$_POST['email'];
			$pwd=$_POST['password'];
	$sql="INSERT INTO register (team,email,pwd) 
VALUES ('$team','$email','$pwd')";
$result=$conn->query($sql);
header("Location: login.php");
}
else{
	header("Location: register.php");
}

?>