
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WIT Home</title>
    <link rel="stylesheet" href="CSS/.css">
    

    
</head>

<body>

</body>
<section class="welcome">
    <header>
        <div id="brand"><img id="indexlogo" src="images/BLINDMC_LONG.png" alt="logo"></div>
        <nav>
            <ul>
            <?php require 'partialviews/navbaritems.php' ?>
            </ul>
        </nav>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
        </div>
    </header>
    <div class="container-welcome-text">
        <ul class="container-welcome-ul">
            <li><span class="welcome-text1">Are</span></li>
            <li><span class="welcome-text2">You</span></li>
            <li><span class="welcome-text3">Ready?</span></li>
        </ul>
    </div>
</section>
<section class="aboutus">
    <div class="container-about">
        <ul>
            <li class="abouttext1">About</li>
            <li class="abouttext2">Bro keine ahnung was ich hier mach</li>
            <li class="abouttext3"><a href="about.html">Learn More</a></li>
        </ul>
    </div>
</section>
<section class="aboutus-text">
    <div class="textbox1">
        <ul>
            <li class="text1">lost</li>
            <li class="text2">platzhalter</li>
        </ul>
    </div>
    
</section>
<section class="section-counter">
<?php require 'partialviews/stats.php' ?>
</section>




<section class="services-text">
    <div class="container-services-text">
        <ul>
            <li class="servicestext1">Unser server</li>
            <li class="servicestext2">Beschreibung</li>
            <li class="servicestext3"><a href="ourservices.html">Learn More</a></li>
        </ul>
    </div>
    <div class="slideshow-container">
        <div class="mySlides fade">
            <div class="numbertext">1 / 1</div>
            <img src="images/2023-02-28_20.03.23.png" style="width:100%">
            <div class="text">standort</div>
        </div>

        <div>
            <span class="dot" onclick="currentSlide(1)"></span>
           
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
</section>


<div class="testimonials">
    <div class="inner">
        <h1>Bewertungen</h1>
        <div class="border"></div>

        <div class="row">
            <div class="col">
                <div class="testimonial">
                    <img src="images/p1.jpg" alt="profile1">
                    <div class="name">Sofija Hartley</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>

                    <p>
                        lol
                    </p>
                </div>
            </div>

            </div>
        </div>
    </div>
</div>





<script src="JS/home.js"></script>
