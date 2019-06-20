<?php
session_start();
if (!isset($_SESSION['username'])){
    header('location:home.html');
}
?>
<html>
    <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
            <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="css/icon-font.css">
            <link rel="stylesheet" href="css/icon-font.css">
            <link rel="stylesheet" href="style.css">
            <link rel="shortcut icon" type="image/png" href="img/favicon.png">
            
            <title>KTJ | The techno-management fest</title>

    </head>
    <body>
            
    <a href = logout.php >logout</a>
    Welcome vadakam namaskkar <?php echo $_SESSION['username']; ?>


    </body>
</html>