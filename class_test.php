<?php
	include 'login.php';
	include 'proces2.php';


 	function testScore(){
		$score=$_SESSION['score'];
		if ($score==$_SESSION['score']){
			return true;
		}
	}
	function testaccess(){
		$access=$_SESSION['access'];
		if ($access==$_SESSION['access']){
			return true;
		}
	}
	function testid(){
	 	$_SESSION['id']=203720172;
	 	$id=$_SESSION['id'];
		if ($id==$_SESSION['id']){
			return true; 
		}
	}

	function testdatabase(){
	$conn = mysqli_connect("localhost","root","","howhigh");#database details
    if($conn->connect_error){
        return false;
	}
	return true;
	}
	function testdatabase2(){
	$conn = mysqli_connect("localhost","root","","question");#database details
    if($conn->connect_error){
        return false;
	}
	return true;
	}
	function testdatabase3(){
	$conn = mysqli_connect("localhost","root","","login_test");#database details
    if($conn->connect_error){
        return false;
	}
	return true;
	}

	echo testScore();
	echo testaccess();
	echo testid();
	echo testdatabase();
	echo testdatabase2();
	echo testdatabase3()	

?>