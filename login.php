<?php
include('staticVar.php');
if($_SERVER['REQUEST_METHOD']=="POST"){
   $user_name_1=$_POST['user_name'];
   $password_1 = $_POST['password'];
   if(!empty($user_name_1) && !empty($password_1) && !is_numeric($user_name_1) ){
                header("location: index.php");
                die;
            }
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <!-- aos css link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <link rel="stylesheet" href="css/style-sheet.css">
        <title>
            Login
        </title>
        <style>
              .b {
                    width: 100%;
                    height: 100vh;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    background-size: 100% 100%;
                    background-image: linear-gradient(
                            -45deg, 
                    rgba(59,173,227,1) 0%, 
                    rgba(87,111,230,1) 25%, 
                    rgba(152,68,183,1) 51%, 
                    rgba(255,53,127,1) 100%
                    );  
                    animation: AnimateBG 20s ease infinite;
              }

            @keyframes AnimateBG { 
            0%{background-position:0% 50%}
            50%{background-position:100% 50%}
            100%{background-position:0% 50%}
            }
        </style>
    </head> 
    <body class="b">
        <div id="box">
            <form method="post" class="form">
                <div class="fo-ma">Login</div>
                <input id="text" type="text" placeholder="Enter your name" name="user_name"><br><br>
                <input id="text" type="password" placeholder="Enter your password" name="password"><br><br>
                <input id="button" type="submit" value="Login"><br><br>
                <a href="signin.php"style="font-size: 15px ;color:white;">you dont have acount? <span style="color: blue;">Signin</span></a>
            </form>       
        </div>
                
    </body>

</html>
