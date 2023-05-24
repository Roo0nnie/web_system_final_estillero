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

    <!-- bootsrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script defer src="./js/contact.js"></script>
    <link rel="stylesheet" href="./css/contact.css">

    <!-- Swiper -->
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- link icon soccer ball -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <title>Final Project</title>
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
                        <li><a href="./about.php">About</a></li>
                        <li id="active"><a class="active">Contact</a></li>
                        <li><a href="logout.php">Logout</a></li>
                </div>
            </nav> <!--end of navigation bar-->
        </div>
    </header>
    <section class="top-section">
        <div class="container">
            <div class="about-box">
                <div class="about-letter">CONTACT</div> 
            </div>
        </div>
    </section>
    <section class="owner-section">
        <div class="container">
            <h3 align="center" id="tagname">Contact <span class="tagnameColor">Me</span></h3>
            <div class="owner">
                <div class="slide-container swiper">
                    <div class="slide-content">
                        <div class="card-wrapper swiper-wrapper">
                            <div class="card swiper-slide"> 
                                <div class="flip-content">
                                    <div class="flip-card">
                                        <div class="flip-front">
                                            <div class="image-content">
                                                <i class="bi bi-chat-square-text-fill"></i>
                                            </div>
                                            <div class="card-content">
                                                <h2 class="flip-name">Mobile Number</h2>
                                                <button class="button">Swipe to Flip</button> 
                                            </div>
                                        </div>
                                        <div class="flip-back">
                                            <div class="card-content">
                                                <button type="button">CONTACT HERE</button>
                                                <div class="flip-description">
                                                    <p>+091 0351 0803</p>
                                                    <p>+096 7350 2679</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                  
                            </div>
                            <div class="card swiper-slide"> 
                                <div class="flip-content">
                                    <div class="flip-card">
                                        <div class="flip-front">
                                            <div class="image-content">
                                                <i class="bi bi-envelope-at-fill"></i>
                                            </div>
                                            <div class="card-content">
                                                <h2 class="flip-name">Email Address</h2>
                                                <button class="button">Swipe to Flip</button> 
                                            </div>
                                        </div>
                                        <div class="flip-back">
                                            <div class="card-content">
                                                <button type="button">CONTACT HERE</button>
                                                <div class="flip-description">
                                                    <p>ronniefigueras.estillero@bicol-u.edu.ph</p>
                                                    <p>ronniewarrior09@gmail.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                  
                            </div>
                            <div class="card swiper-slide"> 
                                <div class="flip-content">
                                    <div class="flip-card">
                                        <div class="flip-front">
                                            <div class="image-content">
                                                <i class="bi bi-globe"></i>
                                            </div>
                                            <div class="card-content">
                                                <h2 class="flip-name">Social Media</h2>
                                                <button class="button">Swipe to Flip</button> 
                                            </div>
                                        </div>
                                        <div class="flip-back">
                                            <div class="card-content">
                                                <button type="button">CONTACT HERE</button>
                                                <div class="flip-description">
                                                    <p><a href="#"><i class="bi bi-facebook my-2"></i> Facebook</a></p>
                                                    <p><a href="#"><i class="bi bi-instagram my-2"></i> Instagram</a></p>
                                                    <p><a href="#"><i class="bi bi-github my-2"></i> github</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                  
                            </div>
                            <div class="card swiper-slide"> 
                                <div class="flip-content">
                                    <div class="flip-card">
                                        <div class="flip-front">
                                            <div class="image-content">
                                                <i class="bi bi-share-fill"></i>
                                            </div>
                                            <div class="card-content">
                                                <h2 class="flip-name">Other Contact</h2>
                                                <button class="button">Swipe to Flip</button> 
                                            </div>
                                        </div>
                                        <div class="flip-back">
                                            <div class="card-content">
                                                <button type="button">CONTACT HERE</button>
                                                <div class="flip-description">
                                                    
                                                </div>
                                            </div>
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
    <section class="contact-page">
        <div class="container">
            <h3 align="center" id="tagname">Contact <span class="tagnameColor">Me</span></h3>
            <div class="map-contact">
                <div class="contact-form"><!--form start-->
                    <form class="need-validation">
                        <div class="row">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="name" id="name"placeholder="Name" required>
                                <label for="name" style="padding-left: 2rem;">Name</label>
                            </div>

                        </div>
                        <div class="row">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                <label for="email" style="padding-left: 2rem;">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                <label for="subject" style="padding-left: 2rem;">Subject</label>
                            </div>
                        </div>                           
                        <div class="row">
                            <div class="col-sm-12">
                                    
                            </div> 
                            <div class="form-floating mb-3">
                                <textarea name="message" id="message" class="form-control" placeholder="Message..."></textarea>
                                <label for="message" style="padding-left: 2rem;">Message...</label>
                            </div>
                        </div>                           
                        <div class="row">
                            
                            <div class="col-sm-12">
                                <div class="row  d-flex justify-content-center">
                                    <div class="col-sm-6"><input class="btn" type="submit" value="SUBMIT"></div>
                                </div>
                            </div>
                        </div>                             
                    </form>
                
                    <div class="contac-link"><!--icon start-->
                        <div class="contact-icon-link">
                            <i class="bi bi-facebook"></i>
                            <i class="bi bi-instagram"></i>
                            <i class="bi bi-linkedin"></i>
                        </div>
                    </div><!--icon end-->
                </div><!--form end-->
            </div>
        </div>
    </section>
    <section class="location">
        <h3 align="center" id="tagname">My <span class="tagnameColor">Location</span></h3>
        <div class="container">
            <div class="search-location d-flex">
                <input type="text" placeholder="Search.." required>
                <button type="button">search</button>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.773567418058!2d124.12245237425363!3d12.922269815959574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a0eb1eaec2d213%3A0xffbf904edb72d6c!2sGubat%2C%20Sorsogon!5e0!3m2!1sen!2sph!4v1684635416036!5m2!1sen!2sph" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                    <p><a href="./about.php">About</a></p>
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