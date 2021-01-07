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
    <title>Job Portal: Contact Us</title>
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
            <li><a href="employeer.php">Employers</a></li>
            <li><a href="companies.php">Companies</a></li>
            <li><a href="jobseeker.php">Job Seekers</a></li>
            <li class="active"><a href="contact.php">Contact Us</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <section class="bcg">
    	<div class="container">
    		<h2><i class="fa fa-home"></i> Contact Us Today</h2>
    		<p>Address: Global Academy of Technology, Ideal Homes Township, Mysore Rd, Aditya Layout, RR Nagar, Bengaluru, Karnataka 560098, India</p>
        <p>Office No: 080-26770011</p>
        <p>Phone No: +91-9969690011</p>
        <p>Email: jobportal@gmail.com</p>
        <p>Website: jobportal.com</p>
    	</div>
    </section>

   <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.700625650495!2d77.52439031482155!3d12.92695299088517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd78e8a1f2276d5bd!2sGlobal%20Academy%20of%20Technology!5e0!3m2!1sen!2sin!4v1604127786719!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> 
          </div>
        </div>
      </div>
    </section>

    <section>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-body">
                  <h3>
                    Any queries? Message us
                  </h3>
                  <form action="contactqueries.php" method="post">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" class="form-control" placeholder="Enter name" name="queryName">
                    </div>
                    <div class="form-group">
                      <label>Email address</label>
                      <input type="email" class="form-control" placeholder="Enter email" name="queryEmail">
                    </div>
                    <div class="form-group">
                      <label>Mobile No</label>
                      <input type="number" class="form-control" placeholder="Enter mobile no" name="queryMobile">
                    </div>
                    <div class="form-group">
                      <label>Message</label>
                      <textarea class="form-control" placeholder="Enter message" name="message"></textarea>
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

