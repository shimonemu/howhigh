  <?php

include 'dbh.php';

$query="select * from students";
$result=$conn->query($query);

$conne = mysqli_connect("localhost","root","","HowHigh");

$sql = "SELECT * FROM students";
$result = mysqli_query($conne,$query) or die("bad query:$sql");

echo "<table border ='1'>";
echo"<tr><th>City</th><th>Grade</th><tr>";
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
h1 {
	text-align: center;
}
.button{
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



	 }
	/* body{
	margin: 0;
	padding:0;
	background:url(cyber-10_0.jpg);
	background-size:cover;
	font-family:sans-serif;
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 40%;
}

td, th {
    border: 6px solid #99FFFF;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}*/
</style>
<body>
<!-- <form action="index.php" method="POST">
		<button type="submit">exit</button><br>
		</form> -->
	<h1>
		<button class="button button1" type="button" onclick="history.back();">Back</button>
		<form action="index.php" method="POST">
        <button class="button button1" type="submit">Exit</button><br>
        </form>
    </h1>

</body>
</html>