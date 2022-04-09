<?php
    include_once 'navbar.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Flag Quiz</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/quiz.css">
        <script src="../js/quiz.js" type="text/javascript"></script>
    </head>
    <body onload="gameStart()">
        <div class="main">
            <h1>Flag Quiz</h1>
            <div class="gameBox">
                <img id="flag" src=""></img>
            </div>
            <div class="entryZone">
                <input type="text" name="answer" placeholder="Enter Country..." id="entryBox">
                <button class="float" type="submit" name="submit" id="entryButton" onclick="entrySubmit()">Submit</button>
            </div>  
        </div>
    </body>
</html>