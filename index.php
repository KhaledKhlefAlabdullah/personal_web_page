<?php
 session_start();
    include("connection.php");
    include("functions.php");
    $user_data=check_login($con);
    $user_name=$user_data['user_name'];
    $email=$user_data['email'];
    $phone_number=$user_data['phone_number'];
    $whats=$user_data['whatsapp_number'];
    $face=$user_data['facebook_link'];
    $insta=$user_data['instagram_link'];
    $github=$user_data['github_link'];
    $password = $user_data['password'];
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My personal web page</title>
     <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <!-- aos css link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style-sheet.css">

</head>
<body class="bg">
    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="#home" class="logo">Menuo</a>
        <nav class="navbar">
            <a href="#home" class="active">home</a>
            <a href="#about">about me</a>
            <a href="#services">services</a>
            <a href="#contact">contact</a>
        </nav>
        <div class="follow">
            <a href="#" class="fab fa-facebook-f color_wight"></a>
            <a href="#" class="fab fa-whatsapp color_wight"></a>
            <a href="#" class="fab fa-instagram color_wight"></a>
            <a href="#" class="fab fa-github color_wight"></a>
        </div>
        </header>
        <section class="home" id="home">
            <div class="image" data-aos="fade-right">
                <img src="images/myself.jpg" alt="">
                </div>

                <div class="content color_wight">
                <h3 data-aos="fade-up" class="color_wight">hi, i am <?=$user_name?></h3>
                <span data-aos="fade-up" class="color_wight">web designer & developer</span>
                <p data-aos="fade-up" class="color_wight">University student at the Faculty of Informatics Engineering at the International University of Science and Renaissance, enrolled in the program of 1,000 programmers launched by Madad.</p>
                <a data-aos="fade-up" href="#about" class="btn color_wight">about me</a>
            </div>

        </section>
        <!-- custom js file link  -->
        <script src="js/script.js"></script>

        <!-- aos js link  -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

        <script>

        AOS.init({
        duration:800,
        delay:300
        });

        </script>
</body>
</html>