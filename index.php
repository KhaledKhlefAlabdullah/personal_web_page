<?php
 session_start();
    include("connection.php");
    include("functions.php");
    $user_data=check_login($con);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            My Web Page
        </title>
    </head>
    <body>
        <a href="logout.php">Logout</a>

        <br>
        Helow, userNme.
    </body>
</html>