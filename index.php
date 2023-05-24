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
    <script defer src="./js/index.js"></script>
    <link rel="stylesheet" href="./css/index.css">

    <!-- Swiper -->
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- icon js -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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
                        <li id="active"><a class="active">Home</a></li>
                        <li><a href="./portfolio.php">Porfolio</a></li>
                        <li><a href="./about.php">About</a></li>
                        <li><a href="./contact.php">Contact</a></li>
                        <li><a href="logout.php">Logout</a></li>
                </div>
            </nav> <!--end of navigation bar-->
        </div>
    </header>
    <section class="background1">
        <div class="container grid">
            <div class="left-description">
                <div class="animation-name">
                <h3>I'm Ronnie <span class="tagnameColor">Estillero</span></h3>
                </div>
                <p>BSIT 2B || Student</p>
                <p>A College & Full Stack Developer Student</p>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="icon-grid">
                            <a href="https://www.facebook.com/ronnie.estillero.79"><i class="bi bi-facebook"></i></a>
                            <a href="https://github.com/Roo0nnie"><i class="bi bi-github"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="wave">
                    <a href="#quick"><button type="button" class="viewMore" id="viewmore">View More</button></a> 
                </div>
            </div>
            <div class="right-image">
                <div class="carousel">
                    <img src="./assets/mine.jpg" alt="">
                </div>
            </div>
        </div>
    </section> <!--end of grid-->
    <section class="quick-background" id="quick">
        <div class="container">
            <div class="quick-info">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 align="center"  id="tagname">Quick <span class="tagnameColor">Information</span></h3>
                        <div class="slide-container swiper">
                            <div class="slide-content">
                                <div class="card-wrapper swiper-wrapper">
                                    <div class="card swiper-slide">
                                        <div class="image-content">
                                            <span class="overlay"></span>
                                            <div class="card-image">
                                            <img src="./assets/index9.png" alt="" class="card-img">
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <h2 class="name">Description</h2>
                                            <div class="collapse" id="description">
                                                <p class="description">This website is all about myself and for school purposes. The neccessary informations must keep private and keep it confidential.</p>
                                            </div>
                                            <button class="button" data-bs-toggle="collapse" data-bs-target="#description" id="viewmore">View More</button> 
                                        </div>
                                    </div>
                                    <div class="card swiper-slide">
                                        <div class="image-content">
                                            <span class="overlay"></span>
                                            <div class="card-image">
                                                <img src="./assets/index10.png" alt="" class="card-img">
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <h2 class="name">Certificate</h2>
                                            <div class="collapse" id="certificate">
                                                <p class="description">Some of my achievements as of 2023:</p>
                                            </div>
                                            <button class="button" data-bs-toggle="collapse" data-bs-target="#certificate">View More</button> 
                                        </div>
                                    </div>
                                    <div class="card swiper-slide">
                                        <div class="image-content">
                                            <span class="overlay"></span>
                                            <div class="card-image">
                                                <img src="./assets/index8.png" alt="" class="card-img">
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <h2 class="name">Skill</h2>
                                            <div class="collapse" id="skill">
                                                <p class="description">Im good at making content for website development and also have knowledge how Ui/Ux was. As of now, I'm focusing for the frond-end development.</p>
                                            </div>
                                            <button class="button" data-bs-toggle="collapse" data-bs-target="#skill">View More</button> 
                                        </div>
                                    </div>
                                    <div class="card swiper-slide">
                                        <div class="image-content">
                                            <span class="overlay"></span>
                                            <div class="card-image">
                                                <img src="./assets/index11.png" alt="" class="card-img">
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <h2 class="name">Service</h2>
                                            <div class="collapse" id="service">
                                                <p class="description">As of now, i'm doing website daevelopment commission limited to front-end only.</p>
                                            </div>
                                            <button class="button" data-bs-toggle="collapse" data-bs-target="#service">View More</button> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="whyhireme">
                <div class="row d-flex justify-content-evenly">
                    <div class="col-sm-5">
                        <div class="whyhireme-box">
                            <div class="whyhireme-medium-box-1st"></div>
                            <div class="whyhireme-small-box"></div>
                        </div>
                        <div class="whyhireme-box">
                            <div class="whyhireme-medium-box right"></div>
                            <div class="whyhireme-small-box left-small"></div>
                        </div>
                        <div class="whyhireme-box">
                            <div class="whyhireme-medium-box-1st"></div>
                            <div class="whyhireme-small-box"></div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <h3 id="tagname">Why Hire Me <span class="tagnameColor">For Your Project?</span></h3>
                        <div class="whyhireme-message">
                            <p>You should hire me because I'am a fast learner, problem solver, critical thinker student and can easily adopt the different environment in every position you assigned to me. I'am also very approachable and friendly and can to the job flexible.</p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="animation-section recent-background">
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
    <section class="animation-section customer-background">
        <div class="container">
            <div class="row">
                <h3 align="center" id="tagname">Customer's <span class="tagnameColor">Review</span></h3>
            </div>
            <div class="slide-container-review swiper">
                <div class="slide-content">
                    <div class="card-wrapper-review swiper-wrapper">
                        <div class="card-review swiper-slide">
                            <div class="image-content">
                                <span class="overlay-review"></span>
                                <div class="card-image">
                                    <img src="./assets/index1.png" alt="" class="card-img">
                                </div>
                            </div>
                            <div class="card-content-review d-flex justify-content-center flex-column">
                                <h2 class="name-review d-flex justify-content-center">Hinata Hyuga</h2>
                                <div class="collapse" id="description">
                                    <p class="description-review">"Your website portfolio showcases an impressive range of skills and talents. It's evident that you're a versatile and creative professional!"</p>
                                    <div class="icon-review d-flex justify-content-center">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </div>
                                    <div class="link-review mb-2 d-flex justify-content-center">
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-github"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                    </div>
                                </div>
                                <button class="button-review" data-bs-toggle="collapse" data-bs-target="#description">Message</button> 
                            </div>
                        </div>
                        <div class="card-review swiper-slide">
                            <div class="image-content">
                                <span class="overlay-review"></span>
                                <div class="card-image">
                                    <img src="./assets/index2.png" alt="" class="card-img">
                                </div>
                            </div>
                            <div class="card-content-review d-flex justify-content-center flex-column">
                                <h2 class="name-review d-flex justify-content-center">Orihime Inoue</h2>
                                <div class="collapse" id="review6">
                                    <p class="description-review">"I love how your website portfolio captures your unique style and personality. It's refreshing and engaging!"</p>
                                    <div class="icon-review d-flex justify-content-center">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </div>
                                    <div class="link-review mb-2 d-flex justify-content-center">
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-github"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                    </div>
                                </div>
                                <button class="button-review" data-bs-toggle="collapse" data-bs-target="#review6">Message</button> 
                            </div>
                        </div>
                        <div class="card-review swiper-slide">
                            <div class="image-content">
                                <span class="overlay-review"></span>
                                <div class="card-image">
                                    <img src="./assets/index3.png" alt="" class="card-img">
                                </div>
                            </div>
                            <div class="card-content-review d-flex justify-content-center flex-column">
                                <h2 class="name-review d-flex justify-content-center"> Milim Nava</h2>
                                <div class="collapse" id="review5">
                                    <p class="description-review">"The user experience of your website portfolio is top-notch. It's easy to navigate and beautifully organized."</p>
                                    <div class="icon-review d-flex justify-content-center">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </div>
                                    <div class="link-review mb-2 d-flex justify-content-center">
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-github"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                    </div>
                                </div>
                                <button class="button-review" data-bs-toggle="collapse" data-bs-target="#review5">Message</button> 
                            </div>
                        </div>
                        <div class="card-review swiper-slide">
                            <div class="image-content">
                                <span class="overlay-review"></span>
                                <div class="card-image">
                                    <img src="./assets/index4.png" alt="" class="card-img">
                                </div>
                            </div>
                            <div class="card-content-review d-flex justify-content-center flex-column">
                                <h2 class="name-review d-flex justify-content-center">SHIGURE SOHMA</h2>
                                <div class="collapse" id="review4">
                                    <p class="description-review">"Your website portfolio is a visual delight! The design choices and attention to detail truly make your work stand out."</p>
                                    <div class="icon-review d-flex justify-content-center">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </div>
                                    <div class="link-review mb-2 d-flex justify-content-center">
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-github"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                    </div>
                                </div>
                                <button class="button-review" data-bs-toggle="collapse" data-bs-target="#review4">Message</button> 
                            </div>
                        </div>
                        <div class="card-review swiper-slide">
                            <div class="image-content">
                                <span class="overlay-review"></span>
                                <div class="card-image">
                                    <img src="./assets/index5.png" alt="" class="card-img">
                                </div>
                            </div>
                            <div class="card-content-review d-flex justify-content-center flex-column">
                                <h2 class="name-review d-flex justify-content-center">TANJIRO KAMADO</h2>
                                <div class="collapse" id="review3">
                                    <p class="description-review">"Your website portfolio effectively showcases your expertise and accomplishments. It's inspiring to see your body of work!"</p>
                                    <div class="icon-review d-flex justify-content-center">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </div>
                                    <div class="link-review mb-2 d-flex justify-content-center">
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-github"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                    </div>
                                </div>
                                <button class="button-review" data-bs-toggle="collapse" data-bs-target="#review3">Message</button> 
                            </div>
                        </div>
                        <div class="card-review swiper-slide">
                            <div class="image-content">
                                <span class="overlay-review"></span>
                                <div class="card-image">
                                    <img src="./assets/index6.png" alt="" class="card-img">
                                </div>
                            </div>
                            <div class="card-content-review d-flex justify-content-center flex-column">
                                <h2 class="name-review d-flex justify-content-center">SHOYO HINATA</h2>
                                <div class="collapse" id="review2">
                                    <p class="description-review">"I'm impressed by the variety and depth of projects in your website portfolio. It's evident that you're constantly pushing your boundaries."</p>
                                    <div class="icon-review d-flex justify-content-center">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </div>
                                    <div class="link-review mb-2 d-flex justify-content-center">
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-github"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                    </div>
                                </div>
                                <button class="button-review" data-bs-toggle="collapse" data-bs-target="#review2">Message</button> 
                            </div>
                        </div>
                        <div class="card-review swiper-slide">
                            <div class="image-content">
                                <span class="overlay-review"></span>
                                <div class="card-image">
                                    <img src="./assets/index7.png" alt="" class="card-img">
                                </div>
                            </div>
                            <div class="card-content-review d-flex justify-content-center flex-column">
                                <h2 class="name-review d-flex justify-content-center">JKILLUA ZOLDYCK</h2>
                                <div class="collapse" id="review1">
                                    <p class="description-review">"Your website portfolio is a testament to your professionalism and dedication. It's clear that you go above and beyond for your clients."</p>
                                    <div class="icon-review d-flex justify-content-center">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </div>
                                    <div class="link-review mb-2 d-flex justify-content-center">
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-github"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                    </div>
                                </div>
                                <button class="button-review" data-bs-toggle="collapse" data-bs-target="#review1">Message</button> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="get-update">
                <form action="index.html" method="POST">
                    <div class="get-update-input d-flex justify-content-center">
                        <input type="text" placeholder="Email.." required/>
                    </div>
                    <div class="get-update-btn d-flex justify-content-center">
                        <button type="submit">Subscribe</button>
                    </div>
                </form>
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