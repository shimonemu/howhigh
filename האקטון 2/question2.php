<?php include 'database2.php'; ?>
<?php session_start(); ?>
<?php
//כיול מספר השאלה
$number = (int)$_GET['n'];
$query = "SELECT * FROM questions";
$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
$total = $results->num_rows;
$query = "SELECT * FROM questions";
$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
$total = $results->num_rows;

//איך לוקחים את השאלה ממסד הנתונים
$query = "SELECT * FROM questions
            WHERE q_number = $number";

//לקחית התוצאה
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
$question = $result->fetch_assoc();
//לקחית בחירה
$query = "SELECT * FROM choice
            WHERE q_number = $number";
$choices = $mysqli->query($query) or die($mysqli->error.__LINE__);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>שאלון</title>
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
                <div class="current">שאלה <?php echo $question['q_number']; ?> מתוך <?php echo $total; ?></div>
                <p class="question">
                <?php echo $question["text"]; ?>
                </p>
                <form method='post' action="proces2.php">
                <ul class="choices">
                    <?php while($row = $choices->fetch_assoc()): ?> 
                    <li><input name='choice' type="radio" value="<?php echo $row['id']; ?>" /><?php echo $row['text']; ?> </li>
                    <?php endwhile; ?>
                    </ul>
                    <input type='submit' value="אישור" />
                    <input type='hidden' name="number" value="<?php echo $number; ?>" />
                </from>

            </div>
        </main>
        <footer>
            <div class="container">
                Copyright &copy; 2017, D.E.K.O.S
            </div>
        </footer>
    </body>
</html>