  <?php
include 'dbh.php';
$query="select * from questions ";
$result=$conn->query($query);

$conne = mysqli_connect("localhost","root","","question");

#$sql = "SELECT * FROM students WHERE grade>=400";
$result = mysqli_query($conne,$query) or die("bad query:$sql");

echo "<table border ='1'>";
echo"<tr><td>question number</td><td>question</td><tr>";
while($row=mysqli_fetch_assoc($result)){
	
	echo "<tr><td>{$row['q_number']}</td><td>{$row['text']}</td><tr>";
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