
<?php include 'global.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php include 'include/lib.php'; ?>
	<style>

}
</style>
</head>
<!-- Sign up Modal-->
	<div id="signupModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content"  >
		<form method="post" action="log.php">
	      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Sign Up</h4>
	      </div>

	      <div class="modal-body">
		      	<div class="row">
		      		<div class="col-md-6">
		      			<div class="form-group">
						    <label for="user">First Name </label>
						    <input type="text" class="form-control"  id="firstName" name="firstName" required>
				    	</div>
		      		</div>
		      		<div class="col-md-6">
		      			<div class="form-group">
						    <label for="user">Last Name </label>
						    <input type="text" class="form-control"  id="lastName" name="lastName" required>
						</div>
		      		</div>
		      	</div>
	        	<div class="form-group">
					    <label for="user">User name: </label>
					    <input type="text" class="form-control"  name="userName" required>
				</div>

				<div class="form-group">
					    <label for="email">Email address:</label>
					    <input type="email" class="form-control" id="email" name="email" required>
				 </div>

				<div class="form-group">
					    <label for="pwd">Password:</label>
					    <input type="password" class="form-control" id="password" name="password" required>
			 	</div>
				  <button id="sign" type="submit" name="btnSignUp" class="btn btn-default btn-block" style="background-color: grey"  >Create My Account</button>
					</script> -->
				  <p>Already have a account?
				  <a href="<?=$base_url?>/login.php">Login</a>

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	      </form>
	    </div>

	  </div>
	</div>

<!--Login Modal-->

	<div id="loginModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content"  >
		<form method="POST" action="log.php">
	      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Login</h4>
	      </div>

	      <div class="modal-body">

	        	<div class="form-group">
					    <label for="name">Username or Email: </label>
					    <input type="text" class="form-control" id="userName" name="userName" placeholder="Username or Email" required autofocus>
				</div>

				<div class="form-group">
					    <label for="password">Password:</label>
					    <input type="password" name="password" class="form-control" id="logInPass" required>
			 	</div>
				  <button name="btnLogin" type="submit" class="btn btn-default btn-block" style="background-color: grey">Login</button>


	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	      </form>
	    </div>

	  </div>
	</div>

<body style="background-color: #e6e3ee; margin-top: 0" >

<!--Home Starts-->	
<div id="home">
	<?php include 'include/menu.php' ?>	
</div>
<!-- For login Error -->
<div class="row">
	<div class="col-md-12">
	<!-- For Error value -->
		<?php 
		if(!isset($_SESSION['loginError'])==null):?>
			<div class="alert alert-danger alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span>
			</button>
				<div align="center"><?=$_SESSION['loginError'];?></div>
			</div>
		<?php endif; $_SESSION['loginError']=null;?>
	<!-- For Success value -->
		<?php 
		if(!isset($_SESSION['loginOk'])==null):?>
			<div class="alert alert-success alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span>
			</button>
				<div align="center"><?=$_SESSION['loginOk'];?></div>
			</div>
		<?php endif; $_SESSION['loginOk']=null;?>
	</div>
</div>
	<div class="container-fluid text-center"  style="background-color: black">
		<div class="row">
		
		<button class="kc_fab_main_btn">
			<a href="#home" class="noColor">
				<i class="fa fa-home " aria-hidden="true"></i>
			</a>
		</button>
				
				<!-- Carsoul Starts -->

				<div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators" style="margin-bottom: 120px;">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  </ol>

				  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
					    <div class="item active">
					    	<img src="lib/img/2.jpg" class="img-responsive">
					      <div class="carousel-caption"> 
							<h1 class="fadeInDown">Exam Preparation Simplified</h1>
					        <p>PRACTICE ANALYZE AND IMPROVE</p>
					        <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#signupModal">Getting Started</button>
					      </div>
					    </div>
					    <div class="item" >
					      <img src="lib/img/3.jpg" class="img-responsive" >
					      <div class="carousel-caption">
							<h1 class="fadeInDown" >Exam Preparation Simplified</h1>
					        <p>PRACTICE ANALYZE AND IMPROVE</p>
					        <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#signupModal">Getting Started</button>
					      </div>
					    </div>
					    <div class="item">
					      <img src="lib/img/4.jpg" class="img-responsive" >
					      <div class="carousel-caption">
					      	<h1 class="fadeInDown" >Exam Preparation Simplified</h1>
					        <p>PRACTICE ANALYZE AND IMPROVE</p>
					        <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#signupModal">Getting Started</button>
					      </div>
					    </div>
					  </div>

				<!-- Controls -->

				<!--Get Started starts-->
				

				<!--Get Started Ends-->

				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>


				<!-- carsoul ends -->

				
					
				
			

				<h1 style="color: white">Best Exam Preparation for You. Start Now!</h1>
                <p style="color: white">Boost your exam preparation with Testbook to crack the most popular competitive exams in Nepal.</p> 
                <p style="color: white">Select your course and get started.</p>

			</div>
		</div>
	</div>

<!--Home Ends-->




<!--About Starts-->

	<div class="container-fluid " id="feature" >
		<div class="row">
			<div class="col-md-8">
					<div class="panel panel-default">
					  <div class="panel-heading" style="background-color: grey"><h1>What our system provides</h1></div>
					  
					  <div class="panel-body">
					  	<p>The Online Examination Management System (OEMS) is a web    application. This system will help the examinees to practice the exam system in terms of users that are registered in the system. This Online Examination Management System enables the users to create their own login. Then users can login with their unique login id and undertake the test available for an individual. The user can practice the online examination and report the outcome in a couple of time. Then the system generates the results with the help of the right answers in database. Users can give the online exam in term of Multiple Choice Questions (MCQ) where random number of question are generated by the system. They can analyze their own performance level which helps them to improve in their academics. 
						Today Online Examination System has become a fast growing examination method because of its speed and accuracy. It is also needed less manpower to execute the examination. Almost all organizations now-a-days, are conducting their objective exams online. It saves students time in examinations. Organizations can also easily check the performance of the student that they give in an examination. As a result of this, organizations are releasing results in less time. Mass quantity of papers are used for the purpose of examination. Implementing this system for purpose of examination, it can save lots of trees. 
						</p>
					  </div>
					</div>
			</div>
			<div class="col-md-4" id="syllabus">
				<div class="panel panel-default">
					<div class="panel-heading" style="background-color: grey"><h1>Syllabus</h1></div>
						<div class="panel-body">
							<ul class="list-group" id="syllabus_list">
							  <li class="list-group-item"><a href="#">BSc. CSIT</a></li>
							  <li class="list-group-item"><a href="#">MBBS</a></li> 
							  <li class="list-group-item"><a href="#">Engineering</a></li> 
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><br>

<!-- feedback carousel -->

	<div style="background-color: grey">
		<h2 class="text-center"><br>What our users say</h2>
		<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->

		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		    <h4>"This platform is the best. I am so happy with the result!"<br><span style="font-style:normal;">Bishworaj Ghimire, Vice President, Bagmati States</span></h4>
		    </div>
		    <div class="item">
		      <h4>"One word... WOW!!"<br><span style="font-style:normal;">Shyam Bakhrel, CEO, Ghimiray Company</span></h4>
		    </div>
		    <div class="item">
		      <h4>"Could I... be any more happy with this system?"<br><span style="font-style:normal;">Sudip Maharjan, Actor, Loot 5</span></h4>
		    </div>
		  </div>

		  <!-- Left and right controls -->

		  <a class="left carousel-control" id="carsoul_control_left" href="#myCarousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" id="carsoul_control_right" href="#myCarousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>

<!--Feedback Carousel ends  -->

<!--About Ends-->



<!--footer -->
<div class="container-fluid" id="footer" style="background-color: black">
	<div class="row">
		<div class="col-md-12">
			<br>
			<p class="text-center v-center" style="color: white">All rights reserved. Copyright @OES team. Team Online Examination System 2017</p><br>
		</div>
	</div>
</div>

		
</body>
</html>