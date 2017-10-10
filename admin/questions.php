<?php 
  include 'admin_sql.php'

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Admin Area | Questions  </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/admin_style.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.7.0/standard/ckeditor.js"></script>


  </head>



  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Admin Panel</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Dashboard</a></li>
<!--             <li class="active"><a href="questions.php">Questions</a></li>
            <li><a href="users.php">Users</a></li> -->
          </ul>

           <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome Nischal</a></li>
            <li><a href="../login.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Questions <small>Manage Questions </small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"   aria-haspopup="true" aria-expanded="true">
                Create Content
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a type="button" data-toggle="modal" data-target="#addQuestions">Add Questions</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
        <li><a href="index.html">Dashboard</a></li>
          <li class="active">Questions</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
           
            <div class="list-group">
              <a href="index.php" class="list-group-item" style="background-color: grey">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="questions.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Questions <!-- <span class="badge">101</span> --></a>
              <a href="users.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users <!-- <span class="badge">5</span> --></a>
            </div>
    

          </div>
          <div class="col-md-9">
    
            <!--Website Overview-->

            <div class="panel panel-default">
              <div class="panel-heading" style="background-color: grey">
                <h3 class="panel-title">Questions</h3>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-hover">
                <tr>
                  <th>Id</th>
                  <th style="width: 30%">Question</th>
                  <th>Option 1</th>
                  <th>Option 2</th>
                  <th>Option 3</th>
                  <th>Option 4</th>
                  <th>Right Answer</th>
                  <th></th>
                </tr>

                <tr>
                  <td>1</td>
                  <td>df</td>
                  <td>dsad</td>
                  <td>sds</td>
                  <td>jdsba</td>
                  <td>jdsba</td>
                  <td>jdsba</td>
                    <td><button type="button" class="btn btn-xs" data-toggle="modal" data-target="edit.phps">Edit</button>
                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#signupModal">Delete</button></td>
                </tr>

              </table>
              </div>
            </div>

          <!--Latest Users -->

  

          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright OES, &copy; 2017</p>
    </footer>

<!--Modals-->

<!--Add Question Modal-->
    <div class="modal fade" id="addQuestions" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
        
        <form method="POST">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Add Questions</h4>
          </div>
         
          <div class="modal-body">

            <div class="form-group">
              <label>Add Questions</label>
              <input type="text" class="form-control" name="question" placeholder="Type here" required>
            </div>

            <div class="form-group">
              <label>Option 1</label>
              <input type="text" class="form-control" name="ans1" placeholder="Add Option 1"  required>
            </div>

            <div class="form-group">
              <label>Option 2</label>
              <input type="text" class="form-control" name="ans2" placeholder="Add Option 2"  required>
            </div>

            <div class="form-group">
              <label>Option 3</label>
              <input type="text" class="form-control" name="ans3" placeholder="Add Option 3"  required>
            </div>

            <div class="form-group">
              <label>Option 4</label>
              <input type="text" class="form-control" name="ans4" placeholder="Add Option 4"  required>
            </div>

            <div class="form-group">
              <label>Right Answer</label>
              <input type="text" class="form-control" name="correct_ans" placeholder="Add correct answer"  required>
            </div>

            <div class="checkbox-inline myCheck" >
              <label><input type="checkbox" value="csit" required>BSc CSIT</label>
            </div>
            <div class="checkbox-inline myCheck">
              <label><input type="checkbox" value="mbbs">MBBS</label>
            </div>
            <div class="checkbox-inline myCheck">
              <label><input type="checkbox" value="engineering">Engineering</label>
            </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success" onclick="validateForm()">Save changes</button>
          </div>
            <script type="text/javascript">
                      function validateForm() {
                         var x=document.getElementById("myCheck").checked;
                          if (x == true && ($_POST['ans1']==$_POST['correct_ans'] || $_POST['ans2']==$_POST['correct_ans'] || $_POST['ans3']==$_POST['correct_ans'] || $_POST['ans4']==$_POST['correct_ans']))
                          {
                              insertIntoDb();
                          }
                          else{
                              alert("Please select the prefered subject");
                              return false;
                          }
                      }
            </script>
        </form>
        </div>
      </div>
    </div>

  

    <script>
         CKEDITOR.replace( 'editor1' );
    </script>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
   
  </body>
</html>
