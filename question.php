<?php
	function makeconnection(){
		$connection=mysqli_connect("localhost", "root","","Online_Exam");
		if (mysqli_connect_errno()){
			echo "failed to connect to mysqli:".mysqli_connect_error();
		}
		else{
			return $connection;
		}
	}
?>

<html>
    <body>
    <form method="post">
	    <?php
			$q = intval($_GET['q']);
			if(empty($q))
			{
				echo "Error";
			}
			else
			{
				$connection=makeconnection();
			  	$subject="mbbs";								
				$sql="SELECT qid,question,ans1,ans2,ans3,ans4,correct_ans FROM $subject ORDER BY RAND() LIMIT 1";
				$result = $connection->query($sql);
				if ($result->num_rows > 0) 
				{
			        while($row = $result->fetch_assoc()) 
			        {
			       		$question=$row["question"];
					    $answer1=$row["ans1"];
					    $answer2=$row["ans2"];
					    $answer3=$row["ans3"];
					    $answer4=$row["ans4"];
					    $correct_answer=$row["correct_ans"];
					    echo"<h2>"; echo $question;
					    echo "</h2><br>";
			?>
						<h4>
							<input type="radio" name="answer" id="option1" required><?php echo$answer1; ?>
							<input type="radio" name="answer" id="option2"><?php echo$answer2; ?>
						    <input type="radio" name="answer" id="option3"><?php echo$answer3; ?>
							<input type="radio" name="answer" id="option4"><?php echo$answer4; ?>
						</h4>

						

			<?php
			        }
			    }
			}
			          
			   
			?>
	</form>
</body>
</html>