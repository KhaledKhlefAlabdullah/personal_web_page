<?php
 session_start();
 include("connection.php");
 include("functions.php");
 $masseg='';
 if($_SERVER['REQUEST_METHOD']=="POST"){
    $user_name=$_POST['user_name'];
    $email=$_POST['email'];
    $phone_number=$_POST['phone_number'];
    $whats=$_POST['whatsapp_number'];
    $face=$_POST['facebook_link'];
    $insta=$_POST['instagram_link'];
    $github=$_POST['github_link'];
    $password = $_POST['password'];
    $error_masseg="";
    if(!empty($user_name) && !empty($email) && !empty($phone_number) && !empty($whats) && !empty($face) && !empty($insta) && !empty($github) && !empty($password) && !is_numeric($user_name)){
       
        $masseg=check_user($user_name,$con);
        $user_id=random_num(20);
        $query="insert into users (user_id,user_name,password,email,phone_number,whatsapp_number,facebook_link,github_link,instagram_link) values('$user_id','$user_name','$password','$email','$phone_number','$whats','$face','$github','$insta')";
        mysqli_query($con,$query);
        header("location: login.php");
        die;
       }
    }else{
        $error_masseg="please enter valid information";
    }
    $size='0';
    $color='';
    $width='0';
    $heigth='0';
 if(strlen($error_masseg)>0){
    $size='30';
    $width='50';
    $heigth='50';
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
        <style>
            #error{
                width: <?=$width?>;
                height: <?=$heigth?>;
                background-color: gray;
            }
            #p-error{
                font-size: <?=$size?>;
                color: <?=$color?>;
            }
        </style>
    </head>
    <body>
        <div class="area" >
            <div id="box">
                    <form method="post">
                        <div class="fo-ma">Signin</div>
                        <input id="text" type="text" placeholder="Enter your full name" name="user_name"><br><br>
                        <input id="text" type="email" placeholder="Enter your email"  name="email"><br><br>
                        <input id="text" type="number" placeholder="Enter your phone number"  name="phone_number"><br><br>
                        <input id="text" type="number" placeholder="Enter your whatsapp link"  name="whatsapp_number"><br><br>
                        <input id="text" type="text" placeholder="Enter your facebook link" name="facebook_link"><br><br>
                        <input id="text" type="text" placeholder="Enter your github link" name="github_link"><br><br>
                        <input id="text" type="text" placeholder="Enter your instagram link" name="instagram_link"><br><br>
                        <input id="text" type="password" placeholder="Enter password" name="password"><br><br>
                        <input id="button" type="submit" value="Signin"><br><br>
                        <a href="login.php">you have acount login</a>
                    </form>
                </div>
                <div id="error">
                    <p id="p-error"><?=$masseg?></p>
                </div>
                    <ul class="circles">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                    </ul>
            </div >
            
    </body>

</html>