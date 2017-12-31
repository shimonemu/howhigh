<?php

include 'dbh.php';

$first = $_POST['first_name'];
$last = $_POST['last_name'];
$id = $_POST['id'];
$pwd = $_POST['pwd'];	


$sql = "SELECT * FROM user WHERE id='$id' AND pwd='$pwd'";
$result=$conn->query($sql);

while($row=$result->fetch_assoc()){
	$db_access=$row["access"];
	$db_id=$row["id"];
	$db_first_name=$row["first_name"];
	$db_last_name=$row["last_name"];
	$db_pwd=$row["pwd"];

	if($id==$db_id && $pwd==$db_pwd){
		session_start();
		$_SESSION["access"]=$db_access;
		if($_SESSION["access"]==1){
		echo "Hello CEO";
		?>
		<form action="employees.php" method="POST">
		<button type="submit">employee Report</button><br>
		</form>
		<form action="city.php" method="POST">
		<button type="submit">City Report</button><br>
		</form>
		<form action="best.php" method="POST">
		<button type="submit">Best Components</button><br>
		</form>
		<?php
		}
		else if($_SESSION["access"]==2){
		echo "Hello manager";
		?>
		<form action="daily.php" method="POST">
		<button type="submit">Daily Report</button><br>
		</form>
		<!-- <form action="question.php" method="POST">
		<button type="submit">questions</button><br>
		</form> -->
		<form action="best.php" method="POST">
		<button type="submit">Best Components</button><br>
		</form>
		<form action="add_ques.php" method="POST">
		<button type="submit">Add question</button><br>
		</form>
		<form action="ques_table.php" method="POST">
		<button type="submit">Watch question Table</button><br>
		</form>
		<?php
		}
		else if($_SESSION["access"]==3){
		echo "hello employee manager";
		?>
		<form action="best.php" method="POST">
		<button type="submit">Best Components</button><br>
		</form>
		<?php
		}
	}
}
#if(!$row=$result->fetch_assoc()){
#	echo "login failed, your password or ID is incorrect!";
#}




#if(!$row = $result->fetch_assoc()){
#	echo "your id number or password is incorrect!";
#	echo "<br>";
#}
	
	#exit(header('Location: index.php'));
	
		
#} else{

#	echo "You are logged in";
	#echo "welcom" $first $last;
#	echo "<br>";
	
#}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style type="text/css">

body{
	margin: 0;
	padding:0;
	background:url(background.jpg);
	background-size:cover;
	font-family:sans-serif;
}
</style>
<body>


<!-- <form action="daily.php" method="POST">
<button type="submit">Daily Report</button><br>
</form>
<form action="city.php" method="POST">
<button type="submit">City Report</button><br>
</form>
<form action="best.php" method="POST">
<button type="submit">Best Components</button><br>
</form> -->



</body>
</html>