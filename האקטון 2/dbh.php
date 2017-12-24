<?php

$conn = mysqli_connect("localhost","root","","login_test");#database details

if(!$conn){
	die("Connection dailed: ".mysqli_connect_error()); 
}


?>