<?php
    include('staticVar.php');
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
            <a href="logout.php" class="fa fa-long-arrow-left">Logout</a>
        </nav>
        <div class="follow">
            <a href="https://www.facebook.com/profile.php?id=100081540255659&mibextid=ZbWKwL" class="fab fa-facebook-f color_wight"></a>
            <a href="https://chat.whatsapp.com/C60d37ib8UZInVTc0TUfX1" class="fab fa-whatsapp color_wight"></a>
            <a href="https://www.instagram.com/p/CjzKsPXo_zu/?igshid=YmMyMTA2M2Y=" class="fab fa-instagram color_wight"></a>
            <a href="https://github.com/KhaledKhlefAlabdullah" class="fab fa-github color_wight"></a>
        </div>
        </header>
        <!-- header section ends -->

        <!-- home section starts  -->

        <section class="home" id="home">
                <div class="image" data-aos="fade-right">
                     <img src="images/myself.jpg" alt="">
                </div>

                <div class="content color_wight">
                <h3 data-aos="fade-up" class="color_wight">hi, i am  <?=$user_name?></h3>
                <span data-aos="fade-up" class="color_wight">web designer & developer</span>
                <p data-aos="fade-up" class="color_wight">University student at the Faculty of Informatics Engineering at the International University of Science and Renaissance, enrolled in the program of 1,000 programmers launched by Madad.</p>
                <a data-aos="fade-up" href="#about" class="btn color_wight">about me</a>
            </div>
        </section>
        
        <!-- home section ends -->

        <!-- about section starts  -->

        <section class="about color_wigth" id="about">

        <h1 class="heading" data-aos="fade-up"> <span style="color:white; border-color:white;">information about me</span> </h1>

        <div class="information">


        <div class="info">
            <h3 data-aos="zoom-in"> <span>name : </span> <?=$user_name?></h3>
            <h3 data-aos="zoom-in"> <span>email : </span> <?=$email?> </h3>
            <h3 data-aos="zoom-in"> <span>address : </span> Azaz:Syria </h3>
            <h3 data-aos="zoom-in"> <span>phone : </span> <?=$phone_number?> </h3>
            <h3 data-aos="zoom-in"> <span>age : </span> 22 years </h3>
            <h3 data-aos="zoom-in"> <span>experience : </span> 2+ years </h3>
        </div>

        <a href="#" class="btn" data-aos="fade-up" style="color:white; border-color:white;">download CV</a>

        </div>

        <div class="skills" data-aos="fade-up">

        <h1 class="heading"> <span style="color:white; border-color:white;">skills</span> </h1>
        <div class="progress color_wigth">
            <div class="bar " style="color:green" data-aos="fade-left"> <h3><span style="color:white; border-color:white;">HTML</span> <span style="color:white; border-color:white;"><?=$proc_1?>%</span></h3> </div>
            <div class="bar " style="color:yello" data-aos="fade-right"> <h3><span style="color:white; border-color:white;"">CSS</span> <span style="color:white; border-color:white;"><?=$proc_2?>%</span></h3> </div>
            <div class="bar " style="color:red" data-aos="fade-left"> <h3><span style="color:white; border-color:white;">JavaScript</span> <span style="color:white; border-color:white;"><?=$proc_3?>%</span></h3> </div>
            <div class="bar " style="color:yello" data-aos="fade-right"> <h3><span style="color:white; border-color:white;">PHP</span> <span style="color:white; border-color:white;"><?=$proc_4?>%</span></h3> </div>
        </div>

        </div>

        <div class="edu-exp">

        <h1 class="heading" data-aos="fade-up"> <span style="color:white; border-color:white;">education & experience</span> </h1>

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
        <!-- services section starts  -->

        <section class="services" id="services" >

        <h1 class="heading" data-aos="fade-up"> <span style="color:white; border-color:white;">services</span> </h1>

        <div class="box-container">

        <div class="box" data-aos="zoom-in">
            <i class="fas fa-code"></i>
            <h3>web development</h3>
            
        </div>

        <div class="box" data-aos="zoom-in">
            <i class="fas fa-paint-brush"></i>
            <h3>graphic design</h3>
           
        </div>

        <div class="box" data-aos="zoom-in">
            <i class="fab fa-bootstrap"></i>
            <h3>bootstrap</h3>
           
        </div>

        <div class="box" data-aos="zoom-in">
            <i class="fas fa-chart-line"></i>
            <h3>seo marketing</h3>
           
        </div>

        <div class="box" data-aos="zoom-in">
            <i class="fas fa-bullhorn"></i>
            <h3>digital marketing</h3>
           
        </div>

        <div class="box" data-aos="zoom-in">
            <i class="fab fa-wordpress"></i>
            <h3>wordpress</h3>
            
        </div>

        </div>

        </section>

        <!-- services section ends -->

        <!-- contact section starts  -->

        <section class="contact" id="contact">

        <h1 class="heading" data-aos="fade-up"> <span  style="color:white; border-color: white;">contact me</span> </h1>

        <form action="" method="post" >
        <div class="flex">
            <input style="border: none;" data-aos="fade-right" type="text" name="name" placeholder="Enter your name" class="box" required>
            <input style="border: none;" data-aos="fade-left" type="email" name="email" placeholder="Enter your email" class="box" required>
        </div>
        <input style="border: none;" data-aos="fade-up" type="number" min="0" name="number" placeholder="Enter your number" class="box" required>
        <textarea style="border: none;" data-aos="fade-up" name="message" class="box" required placeholder="Enter your message" cols="30" rows="10"></textarea>
        <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn" style="background-color: white; border: none;">
        </form>

        <div class="box-container">

        <div  style="color:white; border-color: white;"  class="box" data-aos="zoom-in">
            <i style="color:white;"  class="fas fa-phone"></i>
            <h3 style="color:white;" >phone</h3>
            <p style="color:white;" ><?=$phone_number?></p>
        </div>

        <div  class="box"  data-aos="zoom-in"  style="color:white; border-color: white;">
            <i style="color:white;"  class="fas fa-envelope"></i>
            <h3 style="color:white;" >email</h3>
            <p style="color:white;" ><?=$email?></p>
        </div>

        <div class="box" data-aos="zoom-in" style="color:white; border-color: white;">
            <i  style="color:white;" class="fas fa-map-marker-alt"></i>
            <h3 style="color:white;" >address</h3>
            <p style="color:white;" >Azaz, Syria</p>
        </div>

        </div>

        </section>

        <!-- contact section ends -->
        <section class="portfolio" id="portfolio">

    <h1 class="heading" data-aos="fade-up"> <span>portfolio</span> </h1>

    <div class="box-container">

    <div class="box" data-aos="zoom-in">
        <img src="images/me_1.jpg" alt="">
        <h3>web development</h3>
        <span>( 2020 - 2022 )</span>
    </div>

    <div class="box" data-aos="zoom-in">
        <img src="images/me_2.jpg" alt="">
        <h3>web development</h3>
        <span>( 2020 - 2022 )</span>
    </div>

    <div class="box" data-aos="zoom-in">
        <img src="images/me_3.jpg" alt="">
        <h3>web development</h3>
        <span>( 2020 - 2022 )</span>
    </div>

    <div class="box" data-aos="zoom-in">
        <img src="images/me_4.jpg" alt="">
        <h3>web development</h3>
        <span>( 2020 - 2022 )</span>
    </div>

    <div class="box" data-aos="zoom-in">
        <img src="images/me_5.jpg" alt="">
        <h3>web development</h3>
        <span>( 2020 - 2022 )</span>
    </div>

    <div class="box" data-aos="zoom-in">
        <img src="images/myself.jpg" alt="">
        <h3>web development</h3>
        <span>( 2020 - 2022 )</span>
    </div>

    <div class="box" data-aos="zoom-in">
        <img src="images/sleep.jpg" alt="">
        <h3>my friends sleeping</h3>
        <span>( 2020 - 2022 )</span>
    </div>

    <div class="box" data-aos="zoom-in">
        <img src="images/footbale.jpg" alt="">
        <h3>after winning</h3>
        <span>( 2020 - 2022 )</span>
    </div>

    <div class="box" data-aos="zoom-in">
        <img src="images/eat_konafa.jpg" alt="">
        <h3>eat_konafa</h3>
        <span>( 2020 - 2022 )</span>
    </div>

    <div class="box" data-aos="zoom-in">
        <img src="images/make_lanch.jpg" alt="">
        <h3>make_lanch</h3>
        <span>( 2020 - 2022 )</span>
    </div>

    <div class="box" data-aos="zoom-in">
        <img src="images/study_1.jpg" alt="">
        <h3>study 1</h3>
        <span>( 2020 - 2022 )</span>
    </div>

    <div class="box" data-aos="zoom-in">
        <img src="images/study_2.jpg" alt="">
        <h3>study 2</h3>
        <span>( 2020 - 2022 )</span>
    </div>
    </div>

    </section>



<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>web designer:KHALED ALABDULLAH</span> </div>
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