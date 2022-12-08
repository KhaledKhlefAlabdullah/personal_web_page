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
    $proc_1=95;
    $proc_2=60;
    $proc_3=40;
    $proc_4=50;
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
        <!-- header section ends -->

        <!-- home section starts  -->

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
        
        <!-- home section ends -->

        <!-- about section starts  -->

        <section class="about color_wigth" id="about">

        <h1 class="heading" data-aos="fade-up"> <span>information about me</span> </h1>

        <div class="information">

        <p data-aos="fade-up">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis tenetur amet ab optio minus est error libero adipisci numquam ratione.</p>

        <div class="info">
            <h3 data-aos="zoom-in"> <span>name : </span> <?=$user_name?></h3>
            <h3 data-aos="zoom-in"> <span>email : </span> <?=$email?> </h3>
            <h3 data-aos="zoom-in"> <span>address : </span> Azaz:Syria </h3>
            <h3 data-aos="zoom-in"> <span>phone : </span> <?=$phone_number?> </h3>
            <h3 data-aos="zoom-in"> <span>age : </span> 22 years </h3>
            <h3 data-aos="zoom-in"> <span>experience : </span> 2+ years </h3>
        </div>

        <a href="#" class="btn" data-aos="fade-up">download CV</a>

        </div>

        <div class="skills" data-aos="fade-up">

        <h1 class="heading "> <span class="color_wigth">skills</span> </h1>
        <div class="progress color_wigth">
            <div class="bar " style="color:green" data-aos="fade-left"> <h3><span class="color_wigth">HTML</span> <span class="color_wigth"><?=$proc_1?>%</span></h3> </div>
            <div class="bar " style="color:yello" data-aos="fade-right"> <h3><span class="color_wigth">CSS</span> <span class="color_wigth"><?=$proc_2?>%</span></h3> </div>
            <div class="bar " style="color:red" data-aos="fade-left"> <h3><span class="color_wigth">JavaScript</span> <span class="color_wigth"><?=$proc_3?>%</span></h3> </div>
            <div class="bar " style="color:yello" data-aos="fade-right"> <h3><span class="color_wigth">PHP</span> <span class="color_wigth"><?=$proc_4?>%</span></h3> </div>
        </div>

        </div>

        <div class="edu-exp">

        <h1 class="heading" data-aos="fade-up"> <span>education & experience</span> </h1>

        <div class="row">

            <div class="box-container">

                <h3 class="title" data-aos="fade-right">education</h3>

                <div class="box" data-aos="fade-right">
                    <span>( 2019 - 2020 )</span>
                    <h3>web designer</h3>
                   
                </div>

                <div class="box" data-aos="fade-right">
                    <span>( 2020 - 2021 )</span>
                    <h3>web developer</h3>
                  
                </div>

                <div class="box" data-aos="fade-right">
                    <span>( 2021 - 2022 )</span>
                    <h3>graphic designer</h3>
                    
                </div>

            </div>

            <div class="box-container">

                <h3 class="title" data-aos="fade-left">experience</h3>

                <div class="box" data-aos="fade-left">
                    <span>( 2019 - 2020 )</span>
                    <h3>front-end developer</h3>
                   
                </div>

                <div class="box" data-aos="fade-left">
                    <span>( 2020 - 2021 )</span>
                    <h3>back-end developer</h3>
                    
                </div>

                <div class="box" data-aos="fade-left">
                    <span>( 2021 - 2022 )</span>
                    <h3>full-stack developer</h3>
                  
                </div>

            </div>

        </div>

        </div>

        </section>

        <!-- about section ends -->


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