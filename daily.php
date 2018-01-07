
  <?php
include 'dbh.php';

$query="select * from students";
$result=$conn->query($query);

$conne = mysqli_connect("localhost","root","","HowHigh");
$sql = "SELECT first_name,last_name,age,grade FROM students ORDER BY Grade DESC;";
$result = mysqli_query($conne,$query) or die("bad query:$sql");

echo "<table border ='1'>";
echo"<tr><td>First Name</td><td>Last Name</td><td>ID Number</td><td>City</td><td>Age</td><td>Grade</td><tr>";
while($row=mysqli_fetch_assoc($result)){
	echo"<tr><td>{$row['first_name']}</td><td>{$row['last_name']}</td><td>{$row['id']}</td><td>{$row['city']}</td><td>{$row['age']}</td><td>{$row['grade']}</td><tr>";
} 
echo "</table>";

?> 
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	body{  
		background: url(cyber-10_0.jpg)no-repeat center fixed;
		background-size: cover;
	}
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
.box
{	
	display: block;
	margin: 70px auto;
	width: 180px;
	height: 200px;
	position: relative;
}	
	table,th,td{
		width:80%;
		margin:auto;
		border: :5px solid white;
		border-collapse: collapse;
		text-align: :center; 
		font-size: :30px;
		table-layout:fixed;
		background: blue;
		opacity:0.5;
		color:white;
		margin-top: 100px;
	}
	th,td{
		padding: 20px;
		opacity: 15;
	}

</style>
<body>
	<!-- <a href="#" class="button">
	<span class="content">Click Me</span>
	</a> -->
	 <div class="box">
		<button class="button button1" type="button" onclick="history.back();">Back</button>
		<form action="index.php" method="POST">
		<button class="button button1" type="submit">Exit</button><br>
		</form>
	</div> 
</body>
</html>