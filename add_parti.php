<html>
<head>
</head>
<body>

<?php
    $conn = mysqli_connect("localhost","root","","howhigh");#database details
    if($conn->connect_error){
        printf("connected failed");
        exit();
    }
    if(isset($_POST['submit'])){
        $first=$_POST['first_name'];
        $last=$_POST['last_name'];
        $id=(int)$_POST['id'];
        $age=(int)$_POST['age'];
        $city=$_POST['city'];


        $query="insert into students(first_name,last_name,id,city,age)
            VALUES('$first','$last','$id','$city','$age')";
        $insert_row=$conn->query($query) or die($conn->error.__LINE__);

        $msg='new participant has been added';
        
    }  

?>

</form>
</body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Quizz</title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
    </head>
    <style type="text/css">
    body{
    margin: 0;
    padding:0;
    background:url(cyber-10_0.jpg);
    background-size:cover;
    font-family:sans-serif;
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
                <h2>add new participant:</h2>
                <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
                <p>
                    <label>First Name:</label>
                    <input type="text" name="first_name" />
                    </p>
                <p>
                    <label>Last Name:</label>
                    <input type="text" name="last_name" />
                    </p>
                <p>
                    <label>City:</label>
                    <input type="text" name="city" />
                    </p>
                <p>
                    <label>Age:</label>
                    <input type="text" name="age" />
                    </p>
                <p>
                    <label>ID:</label>
                    <input type="text" name="id" />
                    </p>
                
                    <input type="submit" name="submit" value="submit"
                    </p>
                </form>
                <?php
                    if(isset($msg)){
                        echo'<p>'.$msg.'</p>';
                    }
                    ?>
            </div>
        </main>
      
        <button type="button" onclick="history.back();">Back</button>
        <form action="index.php" method="POST">
        <button type="submit">exit</button><br>
        </form>
          <footer>
            <div class="container">
                Copyright &copy; 2017, D.E.K.O.S
            </div>
        </footer>
    </body>
</html>