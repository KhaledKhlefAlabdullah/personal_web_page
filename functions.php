<?php

function check_login($con){
    if(isset($_SESSION['user_id'])){
        $id=$_SESSION['user_id'];
        $query="select * from users where user_id= '$id' limit 1";
        $result=mysqli_query($con,$query);
        if($result && mysqli_num_rows($result)>0){
            $user_data=mysqli_fetch_assoc($result);
            return $user_data;
        }


    }
    header("Location: login.php");
    die;
}
function check_user($user_name,$con){
    $query="select * from users where user_name='$user_name' limit 1";
    $result=mysqli_query($con,$query);
    if($result){
     if($result && mysqli_num_rows($result)>0){
         $user_data=mysqli_fetch_assoc($result);
         if($user_data['user_name']===$user_name){
             $_SESSION['user_id']=$user_data['user_id'];
             echo "the user name $user_name is alrady exist";
         }
     }
}
}
function random_num($length){
    $text="";
    if($length<5){
        $length=5;

    }
    $len=rand(4,$length);
    for($i=0; $i <$len;$i++){
        $text .= rand(0,9);
    }
    return $text;
}