<?php   
    include_once 'navbar.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Registration Page</title>
        <link rel="stylesheet" href="../css/register.css">
    </head>

    <body>
        <div class="main">
            <div class="welcome">
                <h1>Sign Up Page</h1>
            </div>
                <form action="index.php" method="post">
                    <input type="text" name="fName" placeholder="First Name">
                    <input type="text" name="lName" placeholder="Last Name">
                    <input type="text" name="uName" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="cPwd" placeholder="Confirm Password">
                    <p>Display Scores</p>
                    <button type="submit" name="submit" id="signup">Sign Up</button>
                    <input type="radio" id="radioYes" name="display" value="yes" checked>
                    <label for="radioYes" chec>Yes</label>
                    <input type="radio" id="radioNo" name="display" value="no">
                    <label for="radioNo" chec>No</label>
                    <i class="fa fa-user" id="fName-icon"></i>
                    <i class="fa fa-user" id="lName-icon"></i>
                    <i class="fa fa-user" id="userName-icon"></i>
                    <i class="fa fa-lock" id="pwd-icon"></i>
                    <i class="fa fa-lock" id="cPwd-icon"></i>
                </form>

            <?php
                if (isset($_GET["error"])) {

                    switch ($_GET["error"]) {

                        case "emptyInput":
                            echo "<p id='error'>Please fill in all fields</p>";
                            break;
                        
                        case "invalidMatch":
                            echo "<p id='error'>Passwords do not match</p?";
                            break;

                        case "userNameTaken":
                            echo "<p id='error'>That username is already taken</p>";
                            break;

                        case "prepStatementFailed":
                            echo "<p id='error'>Something went wrong, try again later</p>";
                            break;

                        case "displayNotSet":
                            echo "<p id='error'>Toggle switch was not set</p>";
                            break;
                    }
                }

            ?>
        </div>      
    </body>
</html>