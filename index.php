<?php
 session_start();
    include("connection.php");
    include("functions.php");
    $user_data=check_login($con);
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
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-whatsapp"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-github"></a>
        </div>
        </header>
        <section class="home" id="home">
            <div></div>
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