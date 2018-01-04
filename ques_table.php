  <?php
$conn = mysqli_connect("localhost","root","","question");#database details

$query="select * from questions ";
$result=$conn->query($query);
	
$conne = mysqli_connect("localhost","root","","question");

#$sql = "SELECT * FROM questions";
$result = mysqli_query($conne,$query) or die("bad query:$sql");

echo "<table border ='1'>";
echo"<tr><td>questions number</td><td>question</td><tr>";
while($row=mysqli_fetch_assoc($result)){
	
	echo "<tr><td>{$row['q_number']}</td><td>{$row['text']}</td><tr>";
}
echo "</table>";

?> 


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>

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
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
<body>
		<form action="index.php" method="POST">
		<button type="submit">exit</button><br>
		</form>
		<button type="button" onclick="history.back();">Back</button>	
</body>
</html>