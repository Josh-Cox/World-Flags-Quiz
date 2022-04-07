<?php
    session_start();
    include_once 'navbar.php';

    if (isset($_POST["submit"])) {
        
        
        $firstName = $_POST["fName"];
        $lastName = $_POST["lName"];
        $userName = $_POST["uName"];
        $pwd = $_POST["pwd"];
        $confirmPwd = $_POST["cPwd"];
        $displayString = $_POST["display"];
        
        $data = ['Username ' =>$userName];
        echo json_encode($data);

        if ($displayString == "yes") {
            $display = 1;
        }
        else if ($displayString == "no") {
            $display = 0;
        }
        else {
            header("location: register.php?error=displayNotSet");
            exit();
        }
        require_once 'includes/dbh.inc.php';
        require_once 'includes/functions.inc.php';
        
        if (emptyInputRegister($firstName, $lastName, $userName, $pwd, $confirmPwd) !== false) {
            header("location: register.php?error=emptyInput");
            exit();
        }
        
        if (pwdMatch($pwd, $confirmPwd) !== false) {
            header("location: register.php?error=invalidMatch");
            exit();
        }
        
        if (userNameTaken($conn, $userName) !== false) {
            header("location: register.php?error=userNameTaken");
            exit();
        }
        
        createUser($conn, $firstName, $lastName, $userName, $pwd, $display);
    }
?>

<!DOCTYPE html>
<html>

    <head>
        <title>Landing Page</title>
        <link rel="stylesheet" href="../css/index.css">
    </head>

    <body>
        <div class="main">
            <?php
                if (isset($_SESSION["userName"])) { $Username = $_SESSION["userName"]?>
                    <div class="welcome">
                        <h1>Flag Quiz</h1>
                        <button onclick="location.href='../php/quiz.php';" type="button" id="play">Play</button><br>
                        <button onclick="location.href='includes/logout.inc.php';" type="button" id="logout">Logout</button>
                    </div>
                    <?php
                }
                else { ?>
                    <h1>Sign In</h1>
                    <form action="includes/login.inc.php" method="post">
                        <input type="text" name="uName" placeholder="Username">
                        <input type="password" name="pwd" placeholder="Password">
                        <button class="float" type="submit" name="submit">Login</button>
                        <p><a href="register.php">No account? Register now</a></p>
                        <i class="fa fa-user" id="user-icon"></i>
                        <i class="fa fa-lock" id="pwd-icon"></i>
                    </form>
                    <?php
                        if (isset($_GET["error"])) {

                            switch ($_GET["error"]) {

                                case "emptyInput":
                                    echo '<p id="error">Please fill in all fields</p>';
                                    break;
                                
                                case "invalidLogin":
                                    echo "<p id='error'>Incorrect login information</p?";
                                    break;
                            }
                        }
                    ?>
                <?php
                } ?>
        </div>
    </body>
</html>