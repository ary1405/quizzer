<?php include 'database.php';?>
<?php 
session_start();
?>
<?php
$query = "SELECT * from questions";
$results = $mysqli->query($query) or die($mysqli->error.__LINE__);  
$total = $results->num_rows;   
?>
<?php 
//check to see if score is set

if(!isset($_SESSION['score'])){
    $_SESSION['score'] = 0;
}  

if ($_POST) {
    $number = $_POST['number'];
    $selected_choice = $_POST['choice'];

    echo $number;
    echo $selected_choice;
    $next = $number + 1;

    $query = "SELECT * from`choices` WHERE question_number = $number AND is_correct = 1";
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
    $row = $result->fetch_assoc();
    $correct_choice = $row['id'];
    if($correct_choice == $selected_choice){
        $_SESSION['score']++;
        $statement = "UPDATE user SET score = $score where username = $username ";
        $updaate = $mysqli->query($statement);
    }

    if($number == $total) {
        header("Location: final.php");
        exit();
    }
    else{
        header("location:question.php?n=".$next);
    }



}

?>