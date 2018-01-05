  <?php
include 'dbh.php';
$query="select * from students where grade>=5 ";
$result=$conn->query($query);

$conne = mysqli_connect("localhost","root","","HowHigh");

#$sql = "SELECT * FROM students WHERE grade>=400";
$result = mysqli_query($conne,$query) or die("bad query:$sql");

echo "<table border ='1'>";
echo"<tr><td>First Name</td><td>Last Name</td><td>ID Number</td><td>City</td><td>Age</td><td>Grade</td><tr>";
while($row=mysqli_fetch_assoc($result)){
	
	echo "<tr><td>{$row['first_name']}</td><td>{$row['last_name']}</td><td>{$row['id']}</td><td>{$row['city']}</td><td>{$row['age']}</td><td>{$row['grade']}</td><tr>";
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
		<button type="button" onclick="history.back();">Back</button>
		<form action="index.php" method="POST">
        <button type="submit">exit</button>
        </form>

</body>
</html>