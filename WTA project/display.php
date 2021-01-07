<?php

session_start();
if(!isset($_SESSION['username'])){
  header('location:login.php');
}
?>
<html>
<head>
	<title>Display records</title>

<style>
body{
	background: #1b222a ;
}
table {
  border-collapse: collapse;
  background-color: #fff;
  margin: auto;
  min-height: 200px;
  width: 800px;
}
th,td{
	border: 1px solid black;
	padding: 8px 30px;
	text-align: center;;
}
th{
  background-color: #bf5a16;
  text-transform: uppercase;
  font-size: 20px;
  color: white;
}
td{
	font-size: 17px; 
color: black;}


</style>
</head>
	
<body>
<table>

<tr>
<th>Company Name</th>
<th>Contact Person</th>
<th>Email</th>
<th>Area of Work</th>
</tr>


<?php

include("connection.php");

$selectquery ="select * from employeereg";

$query = mysqli_query($conn, $selectquery);

$num = mysqli_num_rows($query);

while($res = mysqli_fetch_array($query)){

	echo "
	<tr>
		<td>".$res['companyName']."</td>
		<td>".$res['empName']."</td>
		<td>".$res['email']."</td>
		<td>".$res['work']."</td>
	</tr>
	";
}

?>

</table>
<div id="center_button" style="text-align: center; margin-top: 15px">
    <button onclick="location.href='employeer.php'">Back</button>
</div>
</body>
</html>