<?php

include('staticVar.php');
 $masseg='Signin';
 $color='';
 if($_SERVER['REQUEST_METHOD']=="POST"){
    $user_name=$_POST['user_name'];
    $email=$_POST['email'];
    $phone_number=$_POST['phone_number'];
    $whats=$_POST['whatsapp_number'];
    $face=$_POST['facebook_link'];
    $insta=$_POST['instagram_link'];
    $github=$_POST['github_link'];
    $password = $_POST['password'];
   
    if(!empty($user_name) && !empty($email) && !empty($phone_number) && !empty($whats) && !empty($face) && !empty($insta) && !empty($github) && !empty($password) && !is_numeric($user_name)){
       
    
        header("location: login.php");
        die;
       }
    }else{
        $masseg="please enter valid information"; 
        $color='red';
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
        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

        <!-- aos css link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

        <style>
            #p-error{
                font-size: <?=$size?>;
                color: <?=$color?>;
            }
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
    <body class="b" >
        <div id="box">
            <form method="post">
                <div class="fo-ma"><p id="p-error"><?=$masseg?></p></div>
                <input id="text" type="text" placeholder="Enter your full name" name="user_name"><br><br>
                <input id="text" type="email" placeholder="Enter your email"  name="email"><br><br>
                <input id="text" type="text" placeholder="Enter your phone number"  name="phone_number"><br><br>
                <input id="text" type="text" placeholder="Enter your whatsapp number"  name="whatsapp_number"><br><br>
                <input id="text" type="text" placeholder="Enter your facebook link" name="facebook_link"><br><br>
                <input id="text" type="text" placeholder="Enter your github link" name="github_link"><br><br>
                <input id="text" type="text" placeholder="Enter your instagram link" name="instagram_link"><br><br>
                <input id="text" type="password" placeholder="Enter password" name="password"><br><br>
                <input id="button" type="submit" value="Signin"><br><br>
                <a href="login.php" style="font-size: 15px ;color:white;">you have acount? <span style="color: blue;">Login</span></a>
            </form>
        </div>
            
    </body>

</html>