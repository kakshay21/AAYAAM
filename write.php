<?php
session_start();
include 'core/dbh.php';
$quesid=$_POST['quesid'];echo $quesid;
$ques=$_POST['ques'];echo $q;
$ans=$_POST['ans'];echo $quesid;
$sql="INSERT INTO question (ques,ans,quesid) 
VALUES ('$ques','$ans','$quesid')";
$result=$conn->query($sql);
header("Location: questionwrite.php");
?>