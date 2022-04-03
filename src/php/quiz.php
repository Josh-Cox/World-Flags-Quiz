<?php
    include_once 'navbar.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tetris</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/quiz.css">
    </head>
    <body>
        <div class="main">
            <div class="welcome">
                <h1>Tetris Game Screen</h1>
            </div>
            <button type="button" id="tetrisStart" onclick="gameStart()">Start the game</button> 
            <audio id="audio" src="../audio/tetris.wav" type="audio/wav" loop="true"></audio>
            <img src="../img/tetris-grid-bg.png" id="tetris-back">
            <div class="tetris-bg" id="tetris-grid">
                
            </div>
        </div>
    </body>
</html>