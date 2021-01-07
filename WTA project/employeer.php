<?php

session_start();
if(!isset($_SESSION['username'])){
  header('location:login.php');
}
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Job Portal: Employeers</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Font Awesome Stylesheet -->
    <link href="css/font-awesome.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">GetHired</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="employeer.php">Employers</a></li>
            <li><a href="companies.php">Companies</a></li>
            <li><a href="jobseeker.php">Job Seekers</a></li>
            <li><a href="contact.php">Contact Us</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

  <section class="intro">
    <div class="info">
      <h2>
        <span>
        Meet our Professional Team
        <span>
      </h2>
      <p>Our team draws on broad industry experience and networks to create the most powerful outcomes for our clients. We have a team of highly skilled, committed and motivated professionals specializing in respective core fields. 
      </p>
      <p>
      We have a team of qualified professionals to look after your customized needs and to advice and guide you from time to time at every step.
      </p>
        <a class="btn btn-primary" href="display.php" role="button">View</a>
    </div>

  </section>




    <section>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-body">
                  <h3>
                    New Employer? Register Here
                  </h3>
                  <form action="employeer-reg.php" method="post">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" class="form-control" placeholder="Enter name" name="empName">
                    </div>
                    <div class="form-group">
                      <label>Company Name</label>
                      <input type="text" class="form-control" placeholder="Enter Company Name" name="companyName">
                    </div>
                    <div class="form-group">
                      <label>Email address</label>
                      <input type="email" class="form-control" placeholder="Enter email" name="email">
                    <div class="form-group">
                      <label>Mobile No</label>
                      <input type="number" class="form-control" placeholder="Enter mobile no" name="mobile">
                    </div>
                    <div class="form-group">
                      <label>Address</label>
                      <textarea class="form-control" placeholder="Enter address" name="address"></textarea>
                      <div class="form-group">
                      <label>Area of Work</label>
                      <input type="text" class="form-control" placeholder="Enter area of work" name="work">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <footer>
      <div class="container">
        <p class="pull-right"><a href="#">Back to Top</a></p>
        <p>Job Portal &copy; 2015. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>

