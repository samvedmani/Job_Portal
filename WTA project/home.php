<?php

session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
}
?>


<html>
<head>
	<title>Home Page</title>
</head>
<body>
	
	<h1>Welcome <?php echo $_SESSION['username']; ?></h1>
	<a href="logout.php">LOGOUT</a>
</body>
</html>