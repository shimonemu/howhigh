<?php include 'database2.php'; ?>
<?php session_start(); ?>
<?php
$query = "SELECT * FROM questions";
$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
$total = $results->num_rows;
?>


<!DOCTYPE html>
<html>  
    <head>
        <meta charset="utf-8"/>
        <title>Quizz</title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <p id="demo"></p>
    </head>
            <style type="text/css">
    body{
    margin: 0;
    padding:0;
    background:url(start2.jpg);
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
                <h2>test your knowledge</h2>
                <p>choose the right answer </p>
                <u1>
                    <li><strong>number of questions: </strong><?php echo $total; ?></li>
                    <li><strong>type of the quiz: </strong>american</li>
                    <li><strong>time: </strong><?php echo $total * .5; ?> minutes</li>
                    <br>
                </u1>
                <form action="question2.php?n=1" method="POST">
                <button type="submit">start quiz</button>
                </form>
                  <form action="question_kids.php?n=1" method="POST"><br>
                    if you are under 15 years old, please enter your age below: <br>
                    <input type="number" name="age" placeholder="age">
                    <button type="submit">confirm</button><br>
                   </form>
            </div>
        </main>
        <footer>   
            <div class="container">
                Copyright &copy; 2017, D.E.K.O.S
            </div>
        </footer>
    </body>
</html>
