<?php
include 'connection.php'; 
include 'global.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php include 'include/lib.php'; 
	?>

</head>


<body style="background-color: #e6e3ee">



<!--nav bar starts-->

<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="" href="<?=$base_url?>">
        <img src="lib/img/logo1.png" class="img-responsive" alt="OES" width="100px">
      </a> -->
      <a class="navbar-brand" href="<?=$base_url?>">Online Examination</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav ">
         <li><a href="#home">Home</a></li>
        <li><a href="#feature">Features</a></li>
        <li><a href="#syllabus">Syllabus</a></li>
      </ul>

      <form class="navbar-form navbar-right">
       
          <a href="logout.php" class="btn btn-default">Logout</a>
          <button type="button" class="btn btn-success" onclick="location.reload();">
          		<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>Refresh
          </button>
      </form>
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<!-- container begins -->

<!-- container ends -->

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h2 style="text-align: center;">Welcome our valuable users</h2>
			<p style="text-align: center;">You can select the subject of your field from the subject list and practice</p>
			<h3 style="text-align: center;">Feel free to learn</h3>

			<div class="panel">
				  <!-- Default panel contents -->

				  <div class="panel-heading" style="background-color: grey">
			  		<h4 style="margin-left: 50px;">
				  		<p><b>Candiate Name: <?=$_SESSION['fullName']?></b></p> <br>
				  		<p><b>Roll No.: <?=$_SESSION['userId']?></b></p>
				  	</h4>
				  </div>

				  <div class="panel-body">

			<!-- Question 10 Begins-->

				<div class="quesDiv" id="d9" style="display: none;">
		   			<p><h3>result</h3></p>
		   			<hr>
				</div>
			</div>
		</div>
	</div>
</div>


<!--footer begins -->

<footer class="container-fluid" id="footer" style="background-color: black">
	<div class="row">
		<div class="col-md-12">
			<br>
			<p class="text-center v-center" style="color: white">All rights reserved. Copyright @OES team. Team Online Examination System 2017</p><br>
		</div>
		
	</div>
</footer>


</body>
</html>