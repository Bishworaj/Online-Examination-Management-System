<?php

include '../global.php';
include '../connection.php';
 
session_start();

	function insertIntoDb()
	{	
		$con=makeconnection();
		$sql="insert into csit (question,ans1,ans2,ans3,ans4,correct_answer) values('".$_POST['answer']."','".$_POST['ans1']."','".$_POST['ans2']."','".$_POST['ans3']."','".$_POST['ans3']."','".$_POST['correct_ans']."')";
		
		$result = $con->query($sql);
	}

 ?>