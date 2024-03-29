<?php
include("connection.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
</head>
<body>
    <div id="nav">
        <h2>SHREE COMPUTERS ACADEMY</h2>
        <div class="topnav">
            <a class="active" href="#container"><i class="fa-solid fa-house"></i> Home </a>
            <a href="courses.php"><i class="fa-solid fa-book-open-reader"></i> Courses</a>
            <a href="#footer"> <i class="fa-solid fa-address-card"></i> Contact</a>
            <a href="aboutus.html"> <i class="fa-solid fa-user"></i> About</a>
          </div>
    </div>
    <section id="container">
     <div class="name">
        <h1>The best course you will find here..</h1>
        <div class="regitration"><a href="registration.php">Registration</a> </div>
    </div>
    <div id="sliderBox">
        <div id="slider">
            <img src="https://fossbytes.com/wp-content/uploads/2016/02/learn-to-code-what-is-programming.jpg" alt="" srcset="" class="slide active">
            
            <img src="https://uploads-ssl.webflow.com/5bb531417036481a8da0e956/5bb64b2d015c938493491354_image2.png" alt="" srcset="" class="slide">

            <img src="https://images.squarespace-cdn.com/content/v1/50b88908e4b012760ada1011/1570998237204-96JH8ROK5XR6GGCLQTLX/coding_games_for_kids.png" alt="" srcset=""class="slide">

            <img src="https://getinfolist.com/wp-content/uploads/2015/08/Learn-coding-online.jpeg" alt="" srcset="" class="slide">
            <img src="https://imageio.forbes.com/specials-images/imageserve/6139f3bb202fef9fdc415292/0x0.jpg?format=jpg&width=1200" alt="" srcset="" class="slide">

            <div id="back"><i class="fa-sharp fa-solid fa-backward"></i></div>
            <div id="next"><i class="fa-sharp fa-solid fa-forward"></i></div>
        </div>
    </div>
    
    </section>


    <script src="script.js"></script>

<Section id="features">
<h2>FEATURES</h2>
<div class="features-name">
    <div class="course-mode">
        <h4>ISO Standard<br> & <br>Government Recongnized Courses</h4>
    </div>
<div class="course-mode">
    <h3>Course Mode</h3>
    <p>Online Mode</p>
    <p>Offline Mode</p>
</div>
<div class="cerificate">
    <h3>Certification</h3>
    <p>MKCL / Klic Certificate</p>
    <p>AICPE Certificate</p>
</div>
</div>
</Section>
    <div id="courses">
       <h2> OUR POPULAR COURSES</h2>
       <div class="course-box">
        <div class="course-details">
            <img src="https://th.bing.com/th/id/OIP.GOmqbrLgQ5QcRtjdDyc6sAAAAA?rs=1&pid=ImgDetMain" alt="" srcset="">
            <h3>MSCIT</h3>
        </div>
        <div class="course-details">
            <img src="https://2.bp.blogspot.com/-KEJRaY6zdRs/Vy9TAAff0zI/AAAAAAAAAm0/RtW9S1lTjBQui3C8z3v1pgUplyBUp2SnACLcB/s1600/c%2Bprog.jpg" alt="" srcset="">
            <h3>C programming</h3>
        </div>
        <div class="course-details">
            <img src="https://th.bing.com/th/id/OIP.NewyO_1qyHYy3dpV5IuDXAAAAA?rs=1&pid=ImgDetMain" alt="" srcset="">
             <h3>C++ Programming</h3>
        </div>
        <div class="course-details">
            <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/Java_classes_and_objects.jpg" alt="" srcset="">
            <h3>java</h3>
        </div>
        <div class="course-details">
            <img src="https://cdn.analyticsvidhya.com/wp-content/uploads/2021/07/38787wallpaper.png" alt="" srcset="">
            <h3>Python</h3>
        </div>
        <div class="course-details">
            <img src="https://th.bing.com/th/id/OIP.BfiQ8pL4BHbNH994l3LtEgAAAA?rs=1&pid=ImgDetMain" alt="" srcset="">
            <h3>Tally Prime</h3>
        </div>
       </div>
    </div>

   

    <section id="btnpannel">
        <div class="all_login">
        <a href="registration.php" class="registration_btn">Registration</a>
        <a href="admission.php" class="admision_btn">Admision Form</a>
        <a href="login.php" class="login_btn">Login</a>        
        </div>
            

            <div class="image-box">
                <div class="img1">
                <img src="https://img.freepik.com/premium-photo/3d-rendering-humanoid-robot-work-with-digital-gadgets-social-network_493806-5764.jpg" alt="" srcset="" id="img1">
                 </div>
                 <div class="img2">
                <img src="https://th.bing.com/th/id/OIP.D4ryePuZ88v0IVSeEOoypwAAAA?rs=1&pid=ImgDetMain" alt="" srcset="" id="img2">
            </div>
        </div>
        </div>
    </section>

    <section id="footer">
        <div class="address-bar">
            <h4>SHREE COMPUTERS ACADEMY</h4>
            <div class="info">
             <h4>Dr.Shrikant Bhandari</h4>
             <p>Phd MBA</p>
             <p>Mob: 9970299902</p>
            </div>
            <p>Near jai shankar petrol pump,
                apposite ghate complex,Bhadgaon road
            </p>
            <p>Chalisgaon,Dist: Jalgaon 424101</p>
            <div class="icons">
            <img src="https://th.bing.com/th/id/R.3db05f40f9bfbfa4818e5f841359ac18?rik=i9uCGc2yoCWfNA&riu=http%3a%2f%2fspeedyclearance.uk%2fwp-content%2fuploads%2f2018%2f04%2fwhatsapp-icon.png&ehk=%2fGSNSk4y8vLd2qCiosXRI0WSYOth7SLdJewCXSxpcmY%3d&risl=&pid=ImgRaw&r=0" alt="" sizes="" srcset="">
            <img src="https://expertdigital.net/wp-content/uploads/2018/05/Curso-de-Instagram-2.0-Circle.png" alt="" srcset="">
            <img src="https://pngimg.com/uploads/linkedIn/linkedIn_PNG8.png" alt="" srcset="">
            <img src="https://binghamprospector.org/wp-content/uploads/2012/10/facebook-1024x1024.png" alt="" srcset="">
        </div>
        </div>
    </section>
</body>
</html>