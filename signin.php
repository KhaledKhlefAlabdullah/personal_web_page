<?php
 session_start();
 include("connection.php");
 include("functions.php");
 if($_SERVER['REQUEST_METHOD']=="POST"){
    $user_name=$_POST['user_name'];
    $email=$_POST['email'];
    $phone_number=$_POST['phone number'];
    $whats=$_POST['whatsapp link'];
    $face=$_POST['facebook link'];
    $insta=$_POST['instagram link'];
    $github=$_POST['github link'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($email) && !empty($phone_number) && !empty($whats) && !empty($face) && !empty($insta) && !empty($github) && !empty($password) && !is_numeric($user_name)){
       
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
                    <input id="text" type="text" placeholder="Enter your full name" name="user_name"><br><br>
                    <input id="text" type="email" placeholder="Enter your email"  name="email"><br><br>
                    <input id="text" type="number" placeholder="Enter your phone number"  name="phone number"><br><br>
                    <input id="text" type="text" placeholder="Enter your whatsapp link"  name="whatsapp link"><br><br>
                    <input id="text" type="text" placeholder="Enter your facebook link" name="facebook link"><br><br>
                    <input id="text" type="text" placeholder="Enter your github link" name="github link"><br><br>
                    <input id="text" type="text" placeholder="Enter your instagram link" name="instagram link"><br><br>
                    <input id="text" type="password" placeholder="Enter password" name="password"><br><br>
                    <input id="button" type="submit" value="Signin"><br><br>
                    <a href="login.php">you have acount login</a>
                </form>
            </div>
    </body>

</html>