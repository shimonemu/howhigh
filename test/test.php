<?php


class class_test{
	public function testScore(){
		$score=$_SESSION['score'];
		$this->assertEqual($score,$_SESSION['score']); 
	}
	public function testaccess(){
		$access=$_SESSION['access'];
		$this->assertEqual($access,$_SESSION['access']); 
	}
	public function testid(){
		$name=$_SESSION['name'];
		$this->assertEqual($name,$_SESSION['name']); 
	}
	public function testquery(){
		$query = "SELECT * FROM questions";
    	$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
    	$total = $results->num_rows;
		$this->assertEqual($total,$results->num_rows); 
	}
	public function testdatabase(){
	$conn = mysqli_connect("localhost","root","","howhigh");#database details
    if($conn->connect_error){
        return false;
		}
	return true;
	}
}
?>