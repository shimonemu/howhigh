    <?php session_start(); ?>   
<?php include 'database2.php'; ?>
<?php include 'dbh.php';?>

<?php $mysqli2 = new mysqli('localhost', 'root','', 'howhigh');
if($mysqli2->connect_error){
    printf("Connect failed: %s\n", $mysqli2->connect_error);
    exit();
}
if(isset($_POST['name'])){
$id=$_POST['name'];
$_SESSION['name']= $id;

$sql = "UPDATE students set grade=$_SESSION[score] where id=$_SESSION[name]";
$result=$mysqli2->query($sql) or die($mysqli2->error.__LINE__);
if($result){
$msg='grade has been added';}
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Quizz</title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
    </head>
        <style type="text/css">
    body{  
        background: url(cyber-10_0.jpg)no-repeat center fixed;
        background-size: cover;
    }
    </style>
    <body>
        <header>
            <div class="container">
                <h1>How High</h1>
            </div>
        </header>
        <main>
           
            <div class="container">
                <h2>Done!!</h2>
                <p>Congrutulations! you finished the test!!</p>
                <p>final score: <?php echo $_SESSION['score']; ?></p>
                <!--  <?php
                    $sql = "UPDATE students set grade=$_SESSION[score] where id='112233445'";
                    $result=$mysqli2->query($sql) or die($mysqli2->error.__LINE__);
                    echo $_SESSION['score'];
                    echo $_SESSION['iddd'];
                    ?> -->
                    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                    <input type="text" name="name" placeholder="Please enter ID number"> 
                    <button type="submit">confirm</button><br>
                   </form>
            </div>
              <div class="container">
                <?php
                    if(isset($msg)){
                        echo'<p>'.$msg.'</p>';
                    }
                ?>
            </div>
        </main>
        <footer>
            <div class="container">
                Copyright &copy; 2017, D.E.K.O.S
            </div>
        </footer>
    </body>
</html>