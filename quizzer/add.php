<!doctype html>
<html>
    <head>
    <meta charset = "utf-8" />
    <title>quizzer</title>
    <link rel = "stylesheet" href = "css/style.css" type = "text/css" />
    </head>
<body>
<header>
    <div class="container">
        <h1>PHP quizzer</h1>
    </div>
</header>

<main>
    <div class="container">
       <h2>Add a question</h2>
       <form action= "add.php" method = "post">
           <p>
           <label>Question number:</label>
           <input type = "number" name = "question_number">
           </p>
           <p>
           <label>Question text:</label>
           <input type = "text" name = "question_text">
           </p>
           <p>
           <label>choice #1:</label>
           <input type = "text" name = "choice1">
           </p>
           <p>
           <label>choice #2:</label>
           <input type = "text" name = "choice2">
           </p>
           <p>
           <label>choice #3:</label>
           <input type = "text" name = "choice3">
           </p>
           <p>
           <label>choice #4:</label>
           <input type = "text" name = "choice4">
           </p>
           <p>
           <label>choice #5:</label>
           <input type = "text" name = "choice5">
           </p>
           
           <p>
           <label>correct choice number</label>
           <input type = "number" name = ""> 
            </p>
           <p>
           <input type = "submit" value = " submit">
           </p>           
       </form>
    </div>
</main>

<footer>
    <div class="container">
        copyright &copy; 2019
    </div>
</footer>



</body>
</html>