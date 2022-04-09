<?php
    include_once 'navbar.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Flag Quiz</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/quiz.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="../js/quiz.js" type="text/javascript"></script>
    </head>
    <body onload="gameStart()">
        <div class="main">
            <h1>Flag Quiz</h1>
            <img id="flag" src=""></img>
            <div class="entryZone">
                <input type="text" name="answer" placeholder="Enter Country..." id="entryBox">
                <button class="float" id="entryButton" onclick="entrySubmit()">Submit</button>
                <button class="float" id="skipButton" onclick="skipFlag()">Skip</button>
                <button class="float" type="submit" name="submit" id="gameOver" onclick="gameOver()">Give Up</button>
            </div>  
        </div>
    </body>
</html>