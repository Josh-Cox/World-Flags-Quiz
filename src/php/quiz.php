<?php
    include_once 'navbar.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Flag Quiz</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/quiz.css">
    </head>
    <body>
        <div class="main">
            <h1>Flag Quiz</h1>
            <div class="gameBox"></div>
            <div class="entryZone">
                <input type="text" name="answer" placeholder="Enter Country..." id="entryBox">
                <button class="float" type="submit" name="submit" id="entryButton" onclick="javascript:alert('Hello World!')">Submit</button>
            </div>  
        </div>
        <script src="../js/quiz.js" type="text/javasript"></script>
    </body>
</html>