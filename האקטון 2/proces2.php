<?php include 'database2.php'; ?>
<?php session_start(); ?>
<?php
//בדיקת תוצאה
if(!isset($_SESSION['score'])){
    $_SESSION['score'] = 0;
}

if($_POST){ 
    $number = $_POST['number'];
    $selected_choice = $_POST['choice'];
    $next = $number+1;
    
    $query = "SELECT * FROM questions";
    $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
    $total = $results->num_rows;
    
    //קבלת תשובה נכונה
    $query = "SELECT * FROM choice
                WHERE q_number = $number AND is_correct =1";
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
    $row = $result->fetch_assoc(); 
    $correct_choice = $row['id'];
    
    if($correct_choice == $selected_choice){
        $_SESSION['score']++;
    }
    
    if($number == $total){
        header("Location: final2.php");
        exit();
    }
    
    else{
        header("Location: question2.php?n=".$next);
    }
        
}