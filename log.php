<?php 
session_start();
include('connection.php');
	//for Login
	if (isset($_POST['btnLogin'])) 
	{

		$con=makeconnection();
		
		$sql="SELECT * FROM user WHERE password='".$_POST['password']."' AND (email='".$_POST['userName']."' OR user_name='".$_POST['userName']."')";
		$query=mysqli_query($con,$sql);
		$row=mysqli_num_rows($query);
		$data=mysqli_fetch_array($query);
		mysqli_close($con);
		echo $sql."<br>";
		if ($row>0)
		{
			$_SESSION['userId']= $data[0];
			$_SESSION['fullName']= ucwords($data[1])." ".ucwords($data[2]);
			$_SESSION['userName']= $data[3];
			$_SESSION['userEmail']= $data[4];
			$_SESSION['rollNo']= $data[6];
			header('Location:subject.php');
		}
		else
		{
			$_SESSION['loginError']="Username/Email or password not found";
			header('Location:login.php');
		}
	}

	//for SignUp
	if(isset($_POST['btnSignUp']))
	{
		$fname=$_POST['firstName'];
		$lname=$_POST['lastName'];
		$uname=$_POST['userName'];
		$email=$_POST['email'];
		$pass=$_POST['password'];
		$con=makeconnection();
		$sql="INSERT INTO user SET fname='".$fname."', lname='".$lname."', user_name='".$uname."', email='".$email."', password='".$pass."'";
		$query=mysqli_query($con,$sql);
		echo $sql."<br>";
		if(!$query)
		{
			$_SESSION['loginError']="Something went wrong, Please try a moment later with unique email address and username !";
			header("Location:index.php");
		}
		else
		{
			$_SESSION['loginOK']="User created sucessfully! Please log in with your credentials.";
			header("Location:index.php");
		}

	}
 ?>

