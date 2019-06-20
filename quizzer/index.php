<?php include 'database.php';?>
<?php
session_start();
if (!isset($_SESSION['username'])){
    
    header('location:home.php');
}
?>
<?php 

unset($_SESSION['score'] );
?>
<?php

$query = "SELECT * from questions";
$results = $mysqli->query($query) or die($mysqli->error.__LINE__);  
$total = $results->num_rows;   


?>

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
  align: center;
}

th, td {
  text-align: center;
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
    Welcome <strong> <?php echo $_SESSION['username']; ?></strong>
    </div>
</header>

<main>

    <div class="container">
        <h2>test your knowledge</h2>
  <ul class="responsive-table">
    <li class="table-header">
      <div class="col col-1"><strong>Number of questions:</strong></div>
      <div class="col col-2"><?php echo $total; ?></div>
    </li>
        <li class="table-header">
      <div class="col col-1"><strong>Type:</strong></div>
      <div class="col col-2">Multiple choice</div>
    </li>
        <li class="table-header">
      <div class="col col-1"><strong>Estimated Time:</strong> </div>
      <div class="col col-2"><?php echo $total * .5; ?> min </div>
    </li>
        <a href  = "question.php?n=1" class = "start">start quiz </a>
    </div>
</main>
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