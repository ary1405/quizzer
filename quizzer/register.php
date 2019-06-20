<html>
<head>

</head>
<body>
<?php

session_start();


$con = mysqli_connect("localhost","root","aryan2280");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
mysqli_select_db($con,'quizzer');


$username = $_POST["username"];
$password = $_POST["password"];

$check = "select * from user where username = '$username' ";
$result = mysqli_query($con, $check);
$num =  mysqli_num_rows( $result);

if($num==1){
  echo " username already taken";
}
else{
$statement = "insert into user (username,password) values ('$username','$password')";
 mysqli_query($con,$statement);
 echo "registered succesfully";
}
?>
</body>
</html>