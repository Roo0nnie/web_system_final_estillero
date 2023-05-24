<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['name'])) {

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script defer src="./js/porfolio.js"></script>
    <link rel="stylesheet" href="./css/porfolio.css">

    <!-- Swiper -->
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <title>Porfolio</title>
</head>
<body>
<header>
        <div class="dropdown menu">
            <button class="" type="button" data-bs-toggle="dropdown">
            <i class="bi bi-list"></i>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./index.php">Home</a></li>
                <li><a class="dropdown-item" href="./portfolio.php">Profolio</a></li>
                <li><a class="dropdown-item" href="./about.php">About</a></li>
                <li><a class="dropdown-item" href="./contact.php">Contact</a></li>
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="container">
            <nav class="navigation"> <!--Start of navigation bar-->
                <div class="logo">
                <a href="./index.php"> <img src="./assets/logo.png" alt=""></a>
                </div>
                <div class="tab">
                        <li><a href="./portfolio.php">Home</a></li>
                        <li id="active"><a class="active">Portfolio</a></li>
                        <li><a href="./about.php">About</a></li>
                        <li><a href="./contact.php">Contact</a></li>
                        <li><a href="logout.php">Logout</a></li>
                </div>
            </nav> <!--end of navigation bar-->
        </div>
    </header>
    <section class="top-section">
        <div class="container">
            <div class="about-box">
                <div class="about-letter">PORTFOLIO</div>
                <div class="download-cv d-flex justify-content-center">
                    <a href="#"><button type="button" class="cv">Download CV</button> </a>
                </div>
            </div>
        </div>
    </section>
    <section class="portfolio-container">
        <div class="container">
            <h3 id="tagname" align="center">My <span class="tagnameColor">Porfolio</span></h3>
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center">
                    <p class="objective"><span class="tagnameColor">OBJECTIVE: </span>To work in an environment which encourage me to succeed and grow professionally and 
                    where I can utilize my skills and knowledge appropriately.</p>
                </div>
            </div>
                    <div class="row">
                        <div class="col-md-7 my-picture">
                            <div class="my-profile-pic">
                                <span class="overlay-picture"></span>
                                <img src="./assets/pic7.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-5 my-content">
                            <h3 id="sub-tagname">Personal <span class="tagnameColor">DETAILS</span></h3>
                            <div class="container">
                                <div class="personal-details">
                                    <div class="flip-card">
                                        <div class="flip-front">
                                            <div class="card-content">
                                                <p>Birthday</p>
                                            </div>
                                        </div>
                                        <div class="flip-back">
                                            <div class="card-content">
                                                <p>2001-09-08</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flip-card">
                                        <div class="flip-front">
                                            <div class="card-content">
                                                <p>Status</p>
                                            </div>
                                        </div>
                                        <div class="flip-back">
                                            <div class="card-content">
                                                <p>Single</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flip-card">
                                        <div class="flip-front">
                                            <div class="card-content">
                                                <p>Religion</p>
                                            </div>
                                        </div>
                                        <div class="flip-back">
                                            <div class="card-content">
                                                <p>Catholic</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flip-card">
                                        <div class="flip-front">
                                            <div class="card-content">
                                                <p>Nationality</p>
                                            </div>
                                        </div>
                                        <div class="flip-back">
                                            <div class="card-content">
                                                <p>Filipino</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flip-card">
                                        <div class="flip-front">
                                            <div class="card-content">
                                                <p>Gender</p>
                                            </div>
                                        </div>
                                        <div class="flip-back">
                                            <div class="card-content">
                                                <p>Male</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flip-card">
                                        <div class="flip-front">
                                            <div class="card-content">
                                                <p>Place</p>
                                            </div>
                                        </div>
                                        <div class="flip-back">
                                            <div class="card-content">
                                                <p>Gubat, Sorsogon</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flip-card">
                                        <div class="flip-front">
                                            <div class="card-content">
                                                <p>HS Graduate</p>
                                            </div>
                                        </div>
                                        <div class="flip-back">
                                            <div class="card-content">
                                                <p>Gubat NHS</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flip-card">
                                        <div class="flip-front">
                                            <div class="card-content">
                                                <p>SHS Graduate</p>
                                            </div>
                                        </div>
                                        <div class="flip-back">
                                            <div class="card-content">
                                                <p>Gubat NHS</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                           
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <section class="profolio-skill">
        <div class="container">
            <div class="quick-info">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 align="center" id="tagname">Programming <span class="tagnameColor">Skills</span></h3>
                        <div class="slide-container swiper">
                            <div class="slide-content">
                                <div class="card-wrapper swiper-wrapper">
                                    <div class="card swiper-slide">
                                        <div class="image-content">
                                            <span class="overlay"></span>
                                            <div class="card-image">
                                                <img src="./assets/about3.png" alt="" class="card-img">
                                            </div>
                                        </div>
                                        <div class="card-content-swiper">
                                            <h2 class="name">HTML/CSS</h2>
                                            <div class="collapse" id="description">
                                                <p class="description">The language for building web pages.</p>
                                            </div>
                                            <button class="button" data-bs-toggle="collapse" data-bs-target="#description">View More</button> 
                                        </div>
                                    </div>
                                    <div class="card swiper-slide">
                                        <div class="image-content">
                                            <span class="overlay"></span>
                                            <div class="card-image">
                                                <img src="./assets/about1.png" alt="" class="card-img">
                                            </div>
                                        </div>
                                        <div class="card-content-swiper">
                                            <h2 class="name">JavaScript</h2>
                                            <div class="collapse" id="certificate">
                                                <p class="description">The language for programming web pages.</p>
                                            </div>
                                            <button class="button" data-bs-toggle="collapse" data-bs-target="#certificate">View More</button> 
                                        </div>
                                    </div>
                                    <div class="card swiper-slide">
                                        <div class="image-content">
                                            <span class="overlay"></span>
                                            <div class="card-image">
                                                <img src="./assets/about5.png" alt="" class="card-img">
                                            </div>
                                        </div>
                                        <div class="card-content-swiper">
                                            <h2 class="name">Java</h2>
                                            <div class="collapse" id="skill">
                                                <p class="description">Java is used to develop mobile apps, web apps, desktop apps, games and much more.</p>
                                            </div>
                                            <button class="button" data-bs-toggle="collapse" data-bs-target="#skill">View More</button> 
                                        </div>
                                    </div>
                                    <div class="card swiper-slide">
                                        <div class="image-content">
                                            <span class="overlay"></span>
                                            <div class="card-image">
                                                <img src="./assets/about4.png" alt="" class="card-img">
                                            </div>
                                        </div>
                                        <div class="card-content-swiper">
                                            <h2 class="name">C/C++</h2>
                                            <div class="collapse" id="service">
                                                <p class="description">C++ is used to create computer programs, and is one of the most used language in game development.</p>
                                            </div>
                                            <button class="button" data-bs-toggle="collapse" data-bs-target="#service">View More</button> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 align="center" id="tagname">Encountered <span class="tagnameColor">Languages/Frameworks</span></h3>
                        <div class="slide-container swiper">
                            <div class="slide-content">
                                <div class="card-wrapper swiper-wrapper">
                                    <div class="card swiper-slide">
                                        <div class="image-content">
                                            <span class="overlay"></span>
                                            <div class="card-image">
                                                <img src="./assets/about6.png" alt="" class="card-img">
                                            </div>
                                        </div>
                                        <div class="card-content-swiper">
                                            <h2 class="name">Python</h2>
                                            <div class="collapse" id="python">
                                                <p class="description">Python is a popular programming language. Python can be used on a server to create web applications.</p>
                                            </div>
                                            <button class="button" data-bs-toggle="collapse" data-bs-target="#python">View More</button> 
                                        </div>
                                    </div>
                                    <div class="card swiper-slide">
                                        <div class="image-content">
                                            <span class="overlay"></span>
                                            <div class="card-image">
                                                <img src="./assets/about7.png" alt="" class="card-img">
                                            </div>
                                        </div>
                                        <div class="card-content-swiper">
                                            <h2 class="name">Php</h2>
                                            <div class="collapse" id="php">
                                                <p class="description">PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages. PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft's ASP.</p>
                                            </div>
                                            <button class="button" data-bs-toggle="collapse" data-bs-target="#php">View More</button> 
                                        </div>
                                    </div>
                                    <div class="card swiper-slide">
                                        <div class="image-content">
                                            <span class="overlay"></span>
                                            <div class="card-image">
                                                <img src="./assets/about5.png" alt="" class="card-img">
                                            </div>
                                        </div>
                                        <div class="card-content-swiper">
                                            <h2 class="name">Java</h2>
                                            <div class="collapse" id="java">
                                                <p class="description">Java is a popular programming language. Java is used to develop mobile apps, web apps, desktop apps, games and much more.</p>
                                            </div>
                                            <button class="button" data-bs-toggle="collapse" data-bs-target="#java">View More</button> 
                                        </div>
                                    </div>
                                    <div class="card swiper-slide">
                                        <div class="image-content">
                                            <span class="overlay"></span>
                                            <div class="card-image">
                                                <img src="./assets/about8.png" alt="" class="card-img">
                                            </div>
                                        </div>
                                        <div class="card-content-swiper">
                                            <h2 class="name">Mysql</h2>
                                            <div class="collapse" id="mysql">
                                                <p class="description">MySQL is a widely used relational database management system (RDBMS).</p>
                                            </div>
                                            <button class="button" data-bs-toggle="collapse" data-bs-target="#mysql">View More</button> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mt-3">
                        <div class="slide-container swiper">
                            <div class="slide-content">
                                <div class="card-wrapper swiper-wrapper">
                                    <div class="card swiper-slide">
                                        <div class="image-content">
                                            <span class="overlay"></span>
                                            <div class="card-image">
                                                <img src="./assets/about2.png" alt="" class="card-img">
                                            </div>
                                        </div>
                                        <div class="card-content-swiper">
                                            <h2 class="name">React</h2>
                                            <div class="collapse" id="react">
                                                <p class="description">React is a JavaScript library for building user interfaces. React is used to build single-page applications. React allows us to create reusable UI components.</p>
                                            </div>
                                            <button class="button" data-bs-toggle="collapse" data-bs-target="#react">View More</button> 
                                        </div>
                                    </div>
                                    <div class="card swiper-slide">
                                        <div class="image-content">
                                            <span class="overlay"></span>
                                            <div class="card-image">
                                                <img src="./assets/about9.png" alt="" class="card-img">
                                            </div>
                                        </div>
                                        <div class="card-content-swiper">
                                            <h2 class="name">jQuery</h2>
                                            <div class="collapse" id="jquery">
                                                <p class="description">A JS library for developing web pages.</p>
                                            </div>
                                            <button class="button" data-bs-toggle="collapse" data-bs-target="#jquery">View More</button> 
                                        </div>
                                    </div>
                                    <div class="card swiper-slide">
                                        <div class="image-content">
                                            <span class="overlay"></span>
                                            <div class="card-image">
                                                <img src="./assets/about10.png" alt="" class="card-img">
                                            </div>
                                        </div>
                                        <div class="card-content-swiper">
                                            <h2 class="name">Bootstrap</h2>
                                            <div class="collapse" id="bootstrap">
                                                <p class="description">A CSS framework for designing better web pages.</p>
                                            </div>
                                            <button class="button" data-bs-toggle="collapse" data-bs-target="#bootstrap">View More</button> 
                                        </div>
                                    </div>
                                    <div class="card swiper-slide">
                                        <div class="image-content">
                                            <span class="overlay"></span>
                                            <div class="card-image">
                                                <img src="./assets/about11.png" alt="" class="card-img">
                                            </div>
                                        </div>
                                        <div class="card-content-swiper">
                                            <h2 class="name">Nodejs</h2>
                                            <div class="collapse" id="nodejs">
                                                <p class="description">Node.js is an open source server environment. Node.js allows you to run JavaScript on the server.</p>
                                            </div>
                                            <button class="button" data-bs-toggle="collapse" data-bs-target="#nodejs">View More</button> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="recent-background">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 align="center" id="tagname">Recent <span class="tagnameColor">Projects</span></h3></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="recent-project-cover">
                        <div class="recent-project-box">
                            <div class="contact-foooter">
                                <iframe src="https://www.youtube.com/embed/bo5UngFtG-0?autoplay=1&controls=0&mute=1&loop=1"></iframe>
                                </div>
                            <h3 id="tagname">Mini Project 1</h3>
                             <!--  <div class="collapse" id="miniproject">
                                <p id="quick-info-box" class="mini-project-margin">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum eveniet ut magni hic maxime eius deleniti, repellat fuga porro dolorem nostrum fugiat, perferendis labore temporibus, quibusdam consequuntur saepe ab minima?</p>
                            </div>
                            <div class="button-recent-project">
                                <button type="button" data-bs-toggle="collapse" data-bs-target="#miniproject">Show Information</button>
                            </div> -->
                        </div>
                        <div class="recent-project-box">
                            <div class="contact-foooter">
                                <iframe src="https://www.youtube.com/embed/2Zpgwveh3FQ?playlist=2Zpgwveh3FQ&autoplay=1&fs=0&controls=0&disablekb=1&mute=1&loop1"></iframe>
                                    </div>
                                <h3 id="tagname">Calculator in Java</h3>
                                <!--  <div class="collapse" id="miniproject">
                                    <p id="quick-info-box" class="mini-project-margin">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum eveniet ut magni hic maxime eius deleniti, repellat fuga porro dolorem nostrum fugiat, perferendis labore temporibus, quibusdam consequuntur saepe ab minima?</p>
                                </div>
                                <div class="button-recent-project">
                                    <button type="button" data-bs-toggle="collapse" data-bs-target="#miniproject">Show Information</button>
                                </div> -->
                            </div>
                        <div class="recent-project-box">
                            <div class="contact-foooter">
                            <iframe src="https://www.youtube.com/embed/QqMe_6MSBsw?playlist=QqMe_6MSBsw&autoplay=1&controls=0&disablekb=1&mute=1&loop1"></iframe>
                            
                                </div>
                                <h3 id="tagname">Chat App</h3>
                                 <!-- <div class="collapse" id="miniproject">
                                    <p id="quick-info-box" class="mini-project-margin">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum eveniet ut magni hic maxime eius deleniti, repellat fuga porro dolorem nostrum fugiat, perferendis labore temporibus, quibusdam consequuntur saepe ab minima?</p>
                                </div>
                                <div class="button-recent-project">
                                    <button type="button" data-bs-toggle="collapse" data-bs-target="#miniproject">Show Information</button>
                                </div> -->
                            </div>
                        <div class="recent-project-box">
                            <div class="contact-foooter">
                                <iframe src="https://www.youtube.com/embed/O0_ZVcCdmmU?playlist=O0_ZVcCdmmU&autoplay=1&controls=0&disablekb=1&mute=1&loop=1"></iframe>
                            </div>
                            <h3 id="tagname">C Class Record</h3>
                             <!--  <div class="collapse" id="miniproject">
                                <p id="quick-info-box" class="mini-project-margin">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum eveniet ut magni hic maxime eius deleniti, repellat fuga porro dolorem nostrum fugiat, perferendis labore temporibus, quibusdam consequuntur saepe ab minima?</p>
                            </div>
                            <div class="button-recent-project">
                                <button type="button" data-bs-toggle="collapse" data-bs-target="#miniproject">Show Information</button>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="quick-background">
        <div class="container">
            <div class="row">
                <h3 align="center" id="tagname">Recent <span class="tagnameColor">Commission</span></h3>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="recent-project-cover">
                        <div class="recent-project-box">
                            <div class="contact-foooter">
                                <iframe src="https://www.youtube.com/embed/MpUtN27VK8A?playlist=MpUtN27VK8A&autoplay=1&controls=0&disablekb=1&mute=1&loop=1"></iframe>
                                </div>
                            <h3 id="tagname">E-commerce Website</h3>
                             
                        </div>
                        <div class="recent-project-box">
                            <div class="contact-foooter">
                             
                                <iframe src="https://www.youtube.com/embed/pv-us0gsLXs?playlist=pv-us0gsLXs&autoplay=1&controls=0&disablekb=1&mute=1&loop=1"></iframe>
                                </div>
                                <h3 id="tagname">Website Portfolio</h3>
                                
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="animation-section">
            <div class="footer-box">
                <div class="quick-navigation">
                    <h6>Find <span class="footer-link">US</span></h6>
                    <p><a href="#">Gubat, Sorsogon</a></p>
                </div>
                <div class="quick-navigation">
                    <h6>Quick <span class="footer-link">LINKS</span></h6>
                    <p><a href="./about.php">About</a></p>
                    <p><a href="./portfolio.php">Porfolio</a></p>
                    <p><a href="./contact.php">Contact</a></p>
                </div>
                <div class="quick-navigation">
                    <h6>Contact <span class="footer-link">US</span></h6>
                    <p>ronniefigueras.estillero@bicol-u.edu.ph</p>
                    <p>ronniewarrior09@gmail.com</p>
                    <p>+091 0351 0803</p>
                    <p>+096 7350 2679</p>
                </div>
                <div class="quick-navigation">
                    <h6>Follow <span class="footer-link">HERE</span></h6>
                    <p><a href="#"><i class="bi bi-facebook my-2"></i> Facebook</a></p>
                    <p><a href="#"><i class="bi bi-instagram my-2"></i> Instagram</a></p>
                    <p><a href="#"><i class="bi bi-github my-2"></i> github</a></p>
                </div>
            </div>
                <div class="copy-reserve">
                    <p>All Copyright Reserved @2023 by <span id="copyright">Ronnie F. Estillero </span>||<span id="copyright"> BSIT-2B</span></p>
                </div>
        </div>
    </footer>
</body>
</html>

<?php 
} else {
        header("Location: loginForm.php");
        exit();
   }
   
    
    ?>