
<?php
//טיפוסים ליצירת אישור קישור
$db_host = 'localhost';
$db_name = 'question';
$db_user = 'root';
$db_pass ='';


//יצירת אובייקט בממסד נתונים
$mysqli = new mysqli("localhost","root","","question");


//עוזר למציאת שגיאות
if($mysqli->connect_error){
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
?>