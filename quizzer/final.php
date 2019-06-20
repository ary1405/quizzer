<?php 
session_start();
if (!isset($_SESSION['username'])){
    header('location:home.php');
}
?>
<?php include 'database.php';?>

<!doctype html>
<html>
    <head>
    <meta charset = "utf-8" />
    <title>quizzer</title>
    <link rel = "stylesheet" href = "css/style.css" type = "text/css" />
    <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
    </head>
<body>
<header>
    <div class="container">
        <h1>PHP quizzer</h1>
        <a href = logout.php >logout</a>
    Welcome <?php echo $_SESSION['username']; ?>
    </div>
</header>

<main>
    <div class="container">
        <h2>You are Done</h2>
        <p>congrats you have completed the test</p>
        <p>final score <?php echo $_SESSION['score'] ?></p>
        <a href  = "index.php" class = "start">Take Again</a>
        
    </div>
</main>
<?php
$score = $_SESSION['score'];

$username = $_SESSION['username'];


$statement = "insert into score (username,score) values ('$username','$score')";
 mysqli_query($mysqli,$statement);
?>

<?php
$sql = "SELECT username,score FROM score order by score DESC";
  $result = $mysqli->query($sql);
  $rows = mysqli_num_rows($result);
  $array=mysqli_fetch_assoc($result);
  sort($array);
 echo" <table border = '1'>";
 echo"<th>leaderboard</th><tr><td><h2>username</h2></td><td><h2>score</h2></td></tr>";
 while ($a =mysqli_fetch_assoc($result)) {
    echo"<tr><td>{$a['username']}</td><td>{$a['score']}</td></tr>";

 }

?>
<footer>
    <div class="container">
        copyright &copy; 2019
    </div>
</footer>



</body>
</html>