<?php include 'database2.php'; ?>
<?php session_cache_limiter('private_no_expire');?>
<?php session_start(); ?>
<?php

// $iddd=$_POST['name'];
// $_SESSION['iddd']= $iddd;
// echo $_SESSION['iddd'];  
$number = (int)$_GET['n']; 
// $query = "SELECT * FROM questions";
// $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
// $total = $results->num_rows;
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
        <title>Quiz</title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
    </head>
    <body>
                <script>
function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);
        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;
        display.textContent = minutes + ":" + seconds;
        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}
window.onload = function () {
    var fiveMinutes = 5,
        display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
};
</script>
        <header>
            <div class="container">
                <h1>How High</h1>
            </div>
        </header>
        <style type="text/css">
    body{  
        background: url(grey.jpg)no-repeat center fixed;
        background-size: cover;
    }
</style>
        <main>
            <div class="container">
                <div class="current">question <?php echo $question['q_number']; ?> out of <?php echo $total; ?></div>
                <p class="question">
                <?php echo $question["text"]; ?>
                </p>
                <form method='post' action="proces2.php">
                <ul class="choices">
                    <?php while($row = $choices->fetch_assoc()): ?> 
                    <li><input name='choice' type="radio" value="<?php echo $row['id']; ?>" /><?php echo $row['text']; ?> </li>
                    <?php endwhile; ?>
                    </ul>
                    <input type='submit' value="confirm" />
                    <input type='hidden' name="number" value="<?php echo $number; ?>" />
                    <br>
                    Time left: <span id="time">03:30</span> minutes!
                </from>
            </div>
<!--           <div>Time left: <span id="time">03:30</span> minutes!</div>
 -->
        </main>
        <footer>
            <div class="container">
                Copyright &copy; 2017, D.E.K.O.S
            </div>
        </footer>
    </body>
</html>