<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <link href="style1.css" rel="stylesheet" type="text/css">
</head>

<body style="background-image:url('images/rose.jpg');background-repeat:no-repeat;background-repeat: no-repeat;min-height: 600px; background-size: cover;">
    <a><img src="images/wel.png"; id="Homeimage"></a>
    <div class="bgimgadmin">

    <?php

include "datacon.php";
$msg="";

if(isset($_POST['logbtn']))
{
    header("Location: details.php");
}
?>
            <h5 style="font-family:monospace;font-weight:bold;color:black;font-family:monospace;font-weight:bold;">ADMIN LOGIN</h5>
            <?=$msg?>
                <form class="containeradmin" method="POST">
                    <b>ADMIN NAME</b>
                    <input type="text" placeholder="Admin name Please" name="Admin name" required>

                    <b>PASSWORD</b>
                    <input type="password" placeholder="Enter Password" name="password" required>

                    <button type="submit" placeholder="login" name="logbtn" class="buttnadmin">Login</button>
                </form>
                <div style="margin-left:43%; color: blue">
                    <p style="font-size: 1.5em; margin-left: 2%">New user ? <br>
                    <a href="reg_admin.php">Register here</a> </p>
                </div>
    </div>

</body>

</html>