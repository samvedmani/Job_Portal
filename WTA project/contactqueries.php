<?php
	$queryName = $_POST['queryName'];
	$queryEmail = $_POST['queryEmail'];
	$queryMobile = $_POST['queryMobile'];
	$message = $_POST['message'];

	//Database Connection we are doing
	$conn = new mysqli('localhost','root','','test1');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into contactqueries(queryName,queryEmail,queryMobile,message)values (?,?,?,?)");
		
		$stmt->bind_param("ssis", $queryName, $queryEmail, $queryMobile, $message);
		$execval = $stmt->execute();
		echo $execval;
		echo "Query Submitted...";
		$stmt->close();
		$conn->close();

	}
?>