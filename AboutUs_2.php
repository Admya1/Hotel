<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../Hotel/CSS/stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>About Us</title>
</head>

<body>
<div class="preloader"></div>
<nav class="nav">
        <div class="logo"><img src="../Hotel/Images/logo.png"></div>
        <ul class="options">
            <li>
                <a href="welcome.php">HOME</a>
            </li>
            <li>
                <a href="AboutUs_2.php">ABOUT US</a>
            </li>
            <li>
                <a href="ContactUs_2.php">CONTACT US</a>
            </li>
            <li>
                <a href="Gallery_2.php">GALLERY</a>
            </li>
        </ul>
        <form action="logout.php" method="get">
            <button class="navbtn" type="submit">
                LOGOUT
            </button>
        </form>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>
    <div class="null njs">
        <ul class="vertical_options">
            <li>
                <a href="welcome.php">HOME</a>
            </li>
            <li>
                <a href="AboutUs_2.php">ABOUT US</a>
            </li>
            <li>
                <a href="ContactUs_2.php">CONTACT US</a>
            </li>
            <li>
                <a href="Gallery_2.php">GALLERY</a>
            </li>
        </ul>
        <form action="logout.php" method="get">
            <button class="ver_navbtn" type="submit">
                LOGOUT
            </button>
        </form>
    </div>
     <div class="aboutbg">
        <h1>ABOUT US</h1>
    </div>
    <div class="container aboutcontent">
        <div class="row">
            <div class="text-center col-lg only-content" data-aos="zoom-in">
                <h3>Good Times Group of Hotels</h3>
                <p>
                    With over 100 hotels in 70 destinations across six distinct brands, Good Times’ hotel group integrates India's renowned tradition of hospitality and warmth, with globally benchmarked facilities and services.
                </p>
                <h3> Authentic Indigenous Luxury Experiences</h3>
                <p>
                    With ‘Namaste’ as the enduring symbol of its brand experience and ‘Responsible Luxury’ as the guiding premise, Good Times Hotels are an archetype of the culture and ethos of each destination offering authentic, indigenous luxury experiences which are
                    in harmony with the environment and society. With a platinum grade commitment to our guests and the planet, each Good Times Hotel is certified with a LEED® (Leadership in Energy and Environmental Design) Platinum rating for globally
                    recognised planet positive endeavours. Good Times Hotels was named as the 2021 USGBC Regional Leadership Award recipient by the U.S. Green Building Council. This is a global recognition that celebrates organisations around the world
                    who are using green building and sustainable practices to improve the quality of life for those around them.
                </p>
            </div>
            <div class="col-lg " data-aos="zoom-in">
                <img src="../Hotel/Images/AboutUs_Img_2.jpg" class="aboutimg" />
            </div>
        </div>
    </div>
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24">
                        <use xlinkHref="#bootstrap" />
                    </svg>
                </a>
                <span class="text-muted">© 2022 Company, Inc</span>
            </div>
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3">
                    <a href="#" target="_blank" title="facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li class="ms-3">
                    <a href="#" target="_blank" title="linkedin">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </li>
                <li class="ms-3">
                    <a href="#" target="_blank" title="twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li class="ms-3">
                    <a href="#" target="_blank" title="twitter">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </footer>
    </div>
    <script src="../Hotel/JS/script2.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>