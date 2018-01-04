
<?php

include 'dbh.php';
session_cache_limiter('private_no_expire'); // works
session_start();
// if(!isset($_SESSION["access"])){
// 	echo 'please log in';
// 	header('index.php');
// 	exit;
// }
session_destroy();
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
		echo "hello employee";
		?>
		<form action="best.php" method="POST">
		<button type="submit">Best Components</button><br>
		</form>
		<form action="add_parti.php" method="POST">
		<button type="submit">add participent</button><br>
		</form>
		<?php
		}
	}
}

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
	background:url(cyber-10_0.jpg);
	background-size:cover;
	font-family:sans-serif;
}
</style>
<body>



</body>
</html>