<?php

session_start();
if(!isset($_SESSION['username'])){
  header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Job Portal: Companies</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <!-- Font Awesome Stylesheet -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <style>
		body{
			color:#fff;
			font-size:16px;
		}
		
	
		section{
			margin:30px 0 30px 0;
		}
		.info{
			margin-top: 90px;
			text-align: center;
		}

		.info h2,h3{
			margin-bottom: 20px;
		}
		.info p{
			text-align: left;
			margin-left: 200px;
			margin-right: 200px;
		}
		  table#sort-table{
		     width:70%; 
		    margin-left:15%; 
		    margin-right:15%;
		}
		th {
			text-align: center;
			font-size: 20px;
		}
		td{
			text-align: center;
			font-size: 17px;
		}

		input[type=text]:focus {
		  background-color: #bf5a16;
		  color: #fff;
		}
	</style>
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
            <li class="active"><a href="companies.php">Companies</a></li>
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
          Meet our partnered Companies
          <span>
        </h2>
        <p>Our team draws on broad industry experience and networks to create the most powerful outcomes for our clients. We have a team of highly skilled, committed and motivated professionals specializing in respective core fields. 
        </p>
        <p>
        We have a team of qualified professionals to look after your customized needs and to advice and guide you from time to time at every step.
        </p>
      </div>
  </section>

  <form class="navbar-form navbar-left">
            <input type="text" class="form-control col-lg-8 search-form" placeholder="Search">
  </form>

<div class="ctable">
	<table id="sort-table" class="table table-striped tablesorter" border="3">
              <thead>
              <tr>
                <th>Company <i class="glyphicon glyphicon-chevron-down"></i></th>
                <th>Location <i class="glyphicon glyphicon-chevron-down"></i></th>
              </tr>
            </thead>
            <tbody>
              <tr>

                <td>Microsoft</a></td>
                <td>Hyderabad</td>
       
              </tr>
              <tr>

                <td>Infosys</a></td>
                <td>Bengaluru</td>
                
              </tr>
              <tr>
                <td>Tata Consultancy Services</a></td>
                <td>Mumbai</td>
                
              </tr>
              <tr>
                <td>Adobe</a></td>
                <td>Noida</td>
                
              </tr>
              <tr>
                <td>Tech Mahindra</a></td>
                <td>Pune</td>
                
              </tr>
              <tr>
                <td>Wipro</a></td>
                <td>Bengaluru</td>
                
              </tr>
              <tr>
                <td>Larsen & Toubro Infotech</a></td>
                <td>Mumbai</td>
                
              </tr>
              <tr>
                <td>Mphasis</a></td>
                <td>Bengaluru</td>
                
              </tr>
              <tr>
                <td>Mindtree</a></td>
                <td>Bengaluru</td>
                
              </tr>
              <tr>
                <td>HCL Technologies</a></td>
                <td>Noida</td>
                
              </tr>
              <tr>
                <td>Thirdware</a></td>
                <td>Mumbai</td>
                
              </tr>
              <tr>
                <td>Thoughtworks</a></td>
                <td>Bengaluru</td>
                
              </tr>
              <tr>
                <td>Zensar Technologies</a></td>
                <td>Pune</td>
                
              </tr>
              <tr>
                <td>Ramco Systems</a></td>
                <td>Chennai</td>
                
              </tr>
              <tr>
                <td>Samsung India Software Centre</a></td>
                <td>Noida</td>
                
              </tr>
              <tr>
                <td>Cyient</a></td>
                <td>Hyderabad</td>
                
              </tr>
            </tbody>
           </table>
 		</div>
          
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
    <script src="js/jquery.tablesorter.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
    $(function(){
      $('#sort-table').tablesorter({
        sortList:[[0,0], [1,0]]
      });
    });
    </script>

   <script>
      var $rows = $('table tr');
      $('.search-form').keyup(function() {
        var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
        $rows.show().filter(function() {
          var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
          return !~text.indexOf(val);
        }).hide();
      });
    </script>
  </body>
</html>

