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
	margin: 0;
	padding:0;
	background:url(background.jpg);
	background-size:cover;
	font-family:sans-serif;
}
</style>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>

<body>



	<form action="index.php" method="POST">
		<button type="submit">exit</button><br>
		</form>
<!-- <button onclick="goBack()">back</button>

<script>
function goBack() {
    window.history.go(-1);
}
</script> -->	

</body>
</html>