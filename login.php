
<?php

include 'dbh.php';
session_cache_limiter('private_no_expire'); // works

if(isset($_POST['employee'])){
$query="select * from employees";
$result=$conn->query($query);

$conne = mysqli_connect("localhost","root","","HowHigh");

$sql = "SELECT * FROM students";
$result = mysqli_query($conne,$query) or die("bad query:$sql");
}
if(isset($_POST['submit1'])){
	//$first = $_POST['first_name'];
	//$last = $_POST['last_name'];
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
		?>
		<h1>Hello CEO</h1>
		<h1><form action="employees.php" method="POST">
		<button class="button button1" name="employee" value="employee" type="submit">Employees Report</button><br>
		</form>
		<form action="city.php" method="POST">
		<button class="button button1" type="submit">City Report</button><br>
		</form>
		<form action="best.php" method="POST">
		<button class="button button1" type="submit">Best Components</button><br>
		</form>
		</h1>
		<?php
		}
		else if($_SESSION["access"]==2){
		?>
		<h1>Hello Manager</h1>
		<form action="daily.php" method="POST">
		<button type="submit">Daily Report</button><br>
		</form>
		<form action="best.php" method="POST">
		<button type="submit">Best Components</button><br>
		</form>
		<form action="add_ques.php" method="POST">
		<button type="submit">Add Question</button><br>
		</form>
		<form action="ques_table.php" method="POST">
		<button type="submit">Watch Question Table</button><br>
		</form>
		<?php
		}
		else if($_SESSION["access"]==3){
		?>
		<h1>Hello Employee</h1>
		<form action="best.php" method="POST">
		<button type="submit">Best Components</button><br>
		</form>
		<form action="add_parti.php" method="POST">
		<button type="submit">Add Participent</button><br>
		</form>
		<?php
		}
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
.button {
    background-color: white; /* Green */
    border: none;
    border-radius: 8px;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
}
.button1:hover {
    background-color: #008CBA;
    color: white;
}
h1 {
	text-align: center;
}

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