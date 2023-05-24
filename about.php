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
    <script defer src="./js/about.js"></script>
    <link rel="stylesheet" href="./css/about.css">

    <!-- Swiper -->
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- link icon soccer ball -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />   
    <title>final Profile</title>
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
                <li><a href="./index.php">Home</a></li>
                        <li><a href="./portfolio.php">Porfolio</a></li>
                        <li id="active"><a class="active">About</a></li>
                        <li><a href="./contact.php">Contact</a></li>
                        <li><a href="logout.php">Logout</a></li>
                </div>
            </nav> <!--end of navigation bar-->
        </div>
    </header>
    <section class="top-section">
        <div class="container">
            <div class="about-box">
                <div class="about-letter">ABOUT</div> 
            </div>
        </div>
    </section>
    <section class="owner-section">
        <div class="container">
            <h3 align="center" id="tagname">About <span class="tagnameColor">Myself</span></h3>
            <div class="owner">
                <div class="slide-container swiper">
                    <div class="slide-content">
                        <div class="card-wrapper swiper-wrapper">
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <span class="material-symbols-outlined">sports_soccer</span>
                                </div>
                                <div class="card-content">
                                    <h2 class="name">My Sport</h2>
                                    <div class="collapse" id="sport">
                                        <p class="description">My favorite sports are basketball and soccer because they help me grow physically, mentally, and emotionally through collaboration, communication, and understanding the situation to meet the specific goal..</p>
                                    </div>
                                    <button class="button" data-bs-toggle="collapse" data-bs-target="#sport">Read More</button> 
                                </div>
                            </div>
                            <div class="card swiper-slide">
                                <div class="image-content">
                                <span class="material-symbols-outlined">school</span>
                                </div>
                                <div class="card-content">
                                    <h2 class="name">Dream Course</h2>
                                    <div class="collapse" id="course">
                                        <p class="description">One of my dream courses is this BSIT because I want to become a professional programmer and network security expert someday.</p>
                                    </div>
                                    <button class="button" data-bs-toggle="collapse" data-bs-target="#course">Read More</button> 
                                </div>
                            </div>
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <span class="material-symbols-outlined" id="music-stop">
                                        play_circle
                                        </span>
                                </div>
                                <div class="card-content">
                                    <h2 class="name">Music Lover</h2>
                                    <div class="collapse" id="description">
                                        <p class="description">I'm also a music lover, which helps me minimize stress and build some motivation through listening to songs.</p>
                                    </div>
                                    <button class="button" data-bs-toggle="collapse" data-bs-target="#description">Read More</button> 
                                </div>
                            </div> 
                        </div>
                    </div>         
                </div>
            </div>
        </div>
    </section>
    <section class="my-profile">
        <div class="container">
            <h3 align="center" id="tagname">About <span class="tagnameColor">Myself</span></h3>
            <div class="row">
                <div class="col-md-7 my-picture">
                    <div class="my-profile-pic">
                        <span class="overlay-picture"></span>
                        <img src="./assets/pic7.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-5 my-content">
                    <h3 id="tagname">THIS IS WHAT <span class="tagnameColor">I GOT!</span></h3>
                    <p>To me, I got everything in this life. I have a loving girlfriend, a supporting family and a joyful friend. With them, I'm satisfied and contented to my life</p>
                    <button type="button" class="">View More</button>
                </div>
            </div>

        </div>
    </section>
    <section class="my-gallery">
        <div class="container">
            <h3 id="tagname" align="center">My <span class="tagnameColor">Gallery</span</h3>
            <div class="container-container">
                <div class="container-box">
                    <div class="dream">
                        <img src="./assets/pic1.jpg" alt="">
                        <img src="./assets/pic7.jpg" alt="">
                        <img src="./assets/pic8.jpg" alt="">
                        <img src="./assets/pic12.jpg" alt="">
                        <img src="./assets/pic14.jpg" alt="">
                        
                    </div>
                    <div class="dream">
                        <img src="./assets/my1.jpg" alt="">
                        <img src="./assets/pic4.jpg" alt="">
                        <img src="./assets/my3.jpg" alt="">
                        <img src="./assets/my4.jpg" alt="">
                        <img src="./assets/my9.jpg" alt="">
                    </div>
                    <div class="dream">
                        <img src="./assets/pic5.jpg" alt="">
                        <img src="./assets/my2.jpg" alt="">
                        
                        <img src="./assets/pic3.jpg" alt="">
                        <img src="./assets/pic6.jpg" alt="">            
                        <img src="./assets/pic13.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="justify-content-center">
                <nav>
                    <ul class="pagination justify-content-center">
                      <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                      </li>
                      <li class="page-item"><a class="page-link active" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                </nav>
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
                    <p><a href="./index.php">Home</a></p>
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