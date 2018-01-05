
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
	.loginBox
	{
		position:absolute;
		top:50%;
		left:50%;
		transform:translate(-50%,-50%);
		width:350px;
		height:420px;
		padding: 80px 40px ;
		box-sizing:border-box;
		background:rgba(0,0,0,.5);
	}
.infoBox
{
	position:absolute;
	top:50%;
	left:80%;
	transform:translate(-50%,-50%);
	width:350px;
	height:420px;
	padding: 80px 40px ;
	box-sizing:border-box;
	background:rgba(0,0,0,.5);
	color:white;
}
.sqlbox
{
	position:absolute;
	top:50%;
	left:20%;
	transform:translate(-50%,-50%);
	width:350px;
	height:420px;
	padding: 80px 40px ;
	box-sizing:border-box;
	background:rgba(0,0,0,.5);
	color:white;
}
.user
{	
	width:100px;
	height: 100px;
	border-radius: 50%;
	overflow: hidden;
	position: absolute;
	top: calc(-100px/2);
	left:calc(50% - 50px);
}		
h1
{
	margin: 10;
	padding: 30 0 20px;
	color: #efed40;
	text-align: center;	
}
h2
{
	margin: 10;	
	padding: 30 0 20px;
	color: #efed40;
	text-align: center;	
}
h3
{
	margin: 10;
	padding: 30 0 20px;
	color: #efed40;
	text-align: center;	
}
.loginBox p
{
	margin:0;
	padding:0;
	font-weight:bold;
	color:#fff;
}

.loginBox input,
.loginBox button
{
	width:100%;
	margin-bottom:20px;
}
.loginBox input[type="text"],
.loginBox input[type="password"]
{
	border:none;
	border-bottom:1px solid #fff;
	background:transparent;
	outline:none;
	height:30px;
	color:#fff;
	font-size:16px;
}
::placeholder
{
	color:rgba(255,255,255,.5);
}

.loginBox button[type="submit"]
{
	border:none;
	outline: none;
	height:40px;
	color:#fff;
	font-size:16px;
	background: #191970;
	cursor:pointer;
	border-radius:50px;
}
.loginBox button[type="submit"]:hover
{
	background:#efed40;
	color:#262626;
}
		

</style>

<body>
<div class="loginBox">
	<img src="hadas.png" class="user">
	<h1>Log In Here</h1>
	<form action="login.php" method="POST">
		<p>First Name</p>
		<input type="text" name="first_name" placeholder="Enter First Name">
		<p>Last Name</p>
		<input type="text" name="last_name" placeholder="Enter Last Name">
		<p>ID number</p>
		<input type="text" name="id" placeholder="Enter ID Number">
		<p>Password</p>
		<input type="Password" name="pwd" placeholder="Enter Password"><br><br>
		<button name="submit1" type="submit" value="submit1">Sign in</button>
		</form>	
		
</div>
<div class="infoBox">
	     <h3>Hallo dear client:</h3>

	    cyber Security is important because without any understanding or consideration of the issue you are waiting to be attacked.<br> It may not happen now, or next week, but eventually you will be breached and you will have to deal with the fallout.<br>
	    The latest “Cost of data breach study: Australia”,concluded that in 2014 the likelihood of an Australian company organisations experiencing a data breach involving at least 10,000 records had increased to 18 per cent over a 24 month period.
</div>
<div class="sqlbox">
	     <h3>Today best scores:</h3>
	  <?php
include 'dbh.php';
#$query="SELECT MAX(age) FROM students";
$query="SELECT first_name,last_name,age,grade FROM students";
#$query= "SELECT COUNT(grade), city FROM students GROUP BY city";
$result=$conn->query($query);

$conne = mysqli_connect("localhost","root","","HowHigh");

#$sql = "SELECT * FROM students WHERE grade>=400";
$result = mysqli_query($conne,$query) or die("bad query:$query");

echo "<table border ='1'>";
echo"<tr><td>First Name</td><td>Last Name</td><td>Age</td><td>Grade</td><tr>";
while($row=mysqli_fetch_assoc($result)){
	// echo $row['city'];
	// echo $row['grade'];
	 echo "<tr><td>{$row['first_name']}</td><td>{$row['last_name']}</td><td>{$row['age']}</td><td>{$row['grade']}</td><tr>";
}
echo "</table>";

?> 

</div>


</body>
</html>

