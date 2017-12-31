<html>
<head>
</head>
<body>

<?php
    #include 'database';
    $conn = mysqli_connect("localhost","root","","question");#database details
    if($conn->connect_error){
        printf("connected failed");
        exit();
    }
    if(isset($_POST['submit'])){
        $question_number=(int)$_POST['question_number'];
        $question_text=$_POST['question_text'];
        $correct_choice=$_POST['correct_choice'];


        $choices=array();
        $choices[1]=$_POST['choice1'];
        $choices[2]=$_POST['choice2'];
        $choices[3]=$_POST['choice3'];
        $choices[4]=$_POST['choice4'];
            

        $query="insert into questions(q_number,text)
            VALUES('$question_number','$question_text')";

        $insert_row=$conn->query($query) or die($conn->error.__LINE__);

        if($insert_row){
            foreach($choices as $choice=>$value){
                if($value!=''){
                    if($correct_choice==$choice){
                        $is_correct=1;
                    }
                    else{
                        $is_correct=0;
                    }   
                    $query="insert into choice(q_number,is_correct,text) VALUES('$question_number','$is_correct','$value')";

                    $insert_row=$conn->query($query) or die($conn->error.__LINE__);

                    if($insert_row){

                        continue;

                    }
                    else{
                        die('ERROR');
                    }
                }
            }
            $msg='question has been added';
        }
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
    background:url(background.jpg);
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
                <h2>add question:</h2>
                <?php
                    if(isset($msg)){
                        echo'<p>'.$msg.'</p>';
                    }
                ?>
                
                <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
                <p>
                    <label>question number:</label>
                    <input type="number" value="<?php $next; ?>" name="question_number" />
                    </p>
                <p>
                    <label>content of question:</label>
                    <input type="text" name="question_text" />
                    </p>
                <p>
                    <label>answer 1:</label>
                    <input type="text" name="choice1" />
                    </p>
                <p>
                    <label>answer 2:</label>
                    <input type="text" name="choice2" />
                    </p>
                <p>
                    <label>answer 3:</label>
                    <input type="text" name="choice3" />
                    </p>
                <p>
                    <label>answer 4:</label>
                    <input type="text" name="choice4" />
                    </p>
                <p>
                    <label>the right answer number:</label>
                    <input type="number" name="correct_choice" />
                    </p>
                <p>
                    <input type="submit" name="submit" value="submit"
                    </p>
                </form>
            </div>
        </main>
        <footer>
            <div class="container">
                Copyright &copy; 2017, D.E.K.O.S
            </div>
        </footer>

        <form action="index.php" method="POST">
        <button type="submit">exit</button><br>
        </form>
    </body>
</html>