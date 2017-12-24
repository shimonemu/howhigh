<?php include 'database2.php'; ?>
<?php session_start(); ?>
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
                <h2>סיימת!!</h2>
                <p>ברכות סיימת את המבחן!!</p>
                <p>תוצאה סופית: <?php echo $_SESSION['score']; ?></p>
                <a href="question2.php?n=1" class="start">הבחן שוב </a>

            </div>
        </main>
        <footer>
            <div class="container">
                Copyright &copy; 2017, D.E.K.O.S
            </div>
        </footer>
    </body>
</html>