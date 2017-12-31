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
    </head>
    <body>
        <header>
            <div class="container">
                <h1>How High</h1>
            </div>
        </header>
        <main>
            <div class="container">
                <h2>בחן את הידע שלך</h2>
                <p>בחר את התשובה הנכונה </p>
                <u1>
                    <li><strong>מספר שאלות:</strong><?php echo $total; ?></li>
                    <li><strong>סוג: </strong>אמריקאי</li>
                    <li><strong>זמן כולל:</strong><?php echo $total * .5; ?>דקות</li>
                    
                </u1>
                <a href="question2.php?n=1" class="start">התחל שאלון</a>
            </div>
        </main>
        <footer>
            <div class="container">
                Copyright &copy; 2017, D.E.K.O.S
            </div>
        </footer>
    </body>
</html>