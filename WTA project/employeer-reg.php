<?php
	$empName = $_POST['empName'];
	$companyName = $_POST['companyName'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$address = $_POST['address'];
	$work = $_POST['work'];

	//Database Connection we are doing
	$conn = new mysqli('localhost','root','','test1');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into employeereg(empName,companyName,email,mobile,address,work)values (?,?,?,?,?,?)");
		
		$stmt->bind_param("sssiss",	$empName, $companyName, $email, $mobile, $address, $work);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();

	}
?>