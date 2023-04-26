<?php
require "config/conf.php";
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AndyVerse</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <script src="https://kit.fontawesome.com/bbf130cd79.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>

<body>
<header class="header" id="header">

    <div class="container">
        <nav>
            <img src="img/logo.png" class="logo">
            <ul id="sidemenu">
                <li><a href="#header" >Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="CV/cv.html">CV</a></li>
                <li><a href="Projets/projet.html">Project</a></li>
                <li><a href="Game/game.html">Game</a></li>
                <li><a href="#contact">Contact</a></li>
                <i class="fas fa-times" onclick="closemenu()"></i>
            </ul>
            <i class="fas fa-bars" onclick="openmenu()"></i>
        </nav>
        <div class="header-text">
            <p>Cybersecurity Student</p>
            <h1>Hi, I'm <span>Andy</span><br>Piquionne</h1>
        </div>
    </div>
</header>
<!-- --------------main------------ -->
<!-- -----------about---------- -->
<div id="about">
    <div class="container">
        <div class="row">
            <div class="about-col-1">
                <img src="img/aboutimg.jpeg">
            </div>
            <div class="about-col-2">
                <h1 class="sub-title">About Me</h1>
                <p>🌴Originaire des Antilles et féru de nouvelles technologies . J'ai décidé de prendre le pas et de réaliser mes objectifs professionnels dans un domaine visionnaire qu'est la cybersécurité .

                    Doté d'un sens du devoir et de professionnalisme , je pourrais assurer la sécurité d'un réseau et diagnostiquer les anomalies.🦠

                    Je compte obtenir un Bachelor Informatique option Cybersécurité dans les années à venir, afin de devenir Ingénieur en cybersécurité voir expert en cybersécurité , pour pouvoir réaliser tous mes futurs projets au sein d'une entreprise nationale ou étrangère.
                </p>

                <div class="tab-titles">
                    <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                </div>
                <div class="tab-contents active-tab" id="skills">
                    <ul>
                        <li><span>Architect Réseau </span><br>Création de réseau local </li>
                        <li><span>Web Development</span><br>Création de Site Web</li>
                        <li><span>Algorithme</span><br>Création de jeu/programme </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ---------service game quoi ---------------- -->

<!-- ----------project----------- -->

<!-- ----------contact------------- -->
<div id="contact">
    <div class="container">
        <div class="row">
            <div class="contact-left">
                <h1 class="sub-title">Contact Me</h1>
                <p><i class="fas fa-paper-plane"></i> andy.piquionne</p>
                <p><i class="fas fa-phone-square-alt"></i> 0609536965</p>
                <div class="social-icons">
                    <a href="https://facebook.com/"><i class="fab fa-facebook"></i></a>
                    <a href=""><i class="fab fa-twitter-square"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/andy-piquionne/"><i class="fab fa-linkedin"></i></a>
                </div>
                <a href="CV/1674467495940.pdf" class="btn">Download CV</a>
            </div>
            <div class="contact-right">
                <form name="submit-to-google-sheet" action="data/contact.php" method="post">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <textarea name="message" rows="10" placeholder="Your Message" required></textarea>
                    <button type="submit" class="btn btn2">Submit</button>
                </form>

                <span id="msg"></span>
            </div>
        </div>
    </div>
</div>



<script>

    var tablinks = document.getElementsByClassName("tab-links");
    var tabcontents = document.getElementsByClassName("tab-contents");

    function opentab(tabname){
        for(tablink of tablinks){
            tablink.classList.remove("active-link");
        }
        for(tabcontent of tabcontents){
            tabcontent.classList.remove("active-tab");
        }
        event.currentTarget.classList.add("active-link");
        document.getElementById(tabname).classList.add("active-tab");
    }

</script>

<script>

    var sidemeu = document.getElementById("sidemenu");

    function openmenu(){
        sidemeu.style.right = "0";
    }
    function closemenu(){
        sidemeu.style.right = "-200px";
    }

</script>

<script src="js/swiper-bundle.min.js"></script>
<script src="js/style.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var swiper = new Swiper(".swiper-container", {
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    });
</script>
</body>
</html>