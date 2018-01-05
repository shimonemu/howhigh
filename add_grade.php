<?php include 'database2.php'; ?>
<?php include 'dbh.php';?>
<?php session_cache_limiter('private_no_expire');?>
<?php session_start(); ?>
<?php $mysqli2 = new mysqli('localhost', 'root','', 'howhigh');?>
<?php
if($mysqli2->connect_error){
    printf("Connect failed: %s\n", $mysqli2->connect_error);
    exit();
}
?>	
<?php
$id=$_POST['name'];
$_SESSION['name']= $id;
// echo $_SESSION['name']; 


$sql = "UPDATE students set grade=$_SESSION[score] where id=$_SESSION[name]";
$result=$mysqli2->query($sql) or die($mysqli2->error.__LINE__);
if($result){
$msg='grade has been added';}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
        <header>
            <div class="container">
            </div>
        </header>
        <main>
            <div class="container">
                <?php
                    if(isset($msg)){
                        echo'<p>'.$msg.'</p>';
                    }
                ?>
            </div>
        </main>      
          <footer>
        </footer>
    </body>
</html>