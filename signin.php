<?php
 session_start();
 include("connection.php");
 include("functions.php");
 if($_SERVER['REQUEST_METHOD']=="POST"){
    $user_name=$_POST['user_name'];
    $password = $_POST['password'];
    if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
       
        check_user($user_name,$con);
       
       }else{
        $user_id=random_num(20);
        $query="insert into users (user_id,user_name,password) values('$user_id','$user_name','$password')";
        mysqli_query($con,$query);
        header("location: login.php");
        die;
        }
    }else{
        echo "please enter valid information";
    }
 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Signin
        </title>
        <link rel="stylesheet" href="css/style-sheet.css">
        
    </head>
    <body>
            <div id="box">
                <form method="post">
                    <div class="fo-ma">Signin</div>
                    <input id="text" type="text" name="user_name"><br><br>
                    <input id="text" type="password" name="password"><br><br>
                    <input id="button" type="submit" value="Signin"><br><br>
                    <a href="login.php">you have acount login</a>
                </form>
            </div>
    </body>

</html>