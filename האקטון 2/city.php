  <?php

include 'dbh.php';

$query="select * from students";
$result=$conn->query($query);

$conne = mysqli_connect("localhost","root","","HowHigh");

$sql = "SELECT * FROM students";
$result = mysqli_query($conne,$query) or die("bad query:$sql");

echo "<table border ='1'>";
echo"<tr><td>City</td><td>Grade</td><tr>";
while($row=mysqli_fetch_assoc($result)){
	echo"<tr><td>{$row['city']}</td><td>{$row['grade']}</td><tr>";
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
	margin: 0;
	padding:0;
	background:url(background.jpg);
	background-size:cover;
	font-family:sans-serif;
}
</style>
<body>
<form action="index.php" method="POST">
		<button type="submit">exit</button><br>
		</form>
</body>
</html>