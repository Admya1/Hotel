<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('location: login.php');
}
?>
!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../Hotel/CSS/stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Home</title>
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
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3">
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active ">
                <img src="../Hotel/Images/Img1.jpg" class="d-block w-100" height="720px" />
                <div class="carousel-caption d-none d-md-block">
                    <h1>Make Your Vacation Comfortable</h1>
                    <button class="carbtn">BOOK NOW</button>
        </div>
    </div>
    <div class="carousel-item">
        <img src="../Hotel/Images/Img2.jpg" class="d-block w-100" height="720px" />
        <div class="carousel-caption d-none d-md-block">
            <h1>Reserve Room for Family Vacation</h1>
            <button class="carbtn">BOOK NOW</button>
        </div>
    </div>
    <div class="carousel-item">
        <img src="../Hotel/Images/Img3.jpg" class="d-block w-100" height="720px" />
        <div class="carousel-caption d-none d-md-block">
            <h1>A Best Place To Enjoy Your Life</h1>
            <button class="carbtn">BOOK NOW</button>
        </div>
    </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true">
                <span class="visually-hidden">Previous</span>
        </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true">
                <span class="visually-hidden">Next</span>
        </button>
    </div>
    <main class="content_1 content">
        <div class="left" data-aos="fade-up">
            <h1>Florida’s Resort</h1>
            <p>
                An island oasis for downtime and disconnecting, Bungalows Key Largo rewrites the rule book on inclusive getaways. Our intimate adults-only (ages 21+ only) resort sits within a botanical garden edged by 1000 feet of ocean shoreline, just a few miles from
                the warm waters of the Gulf Stream. We take care of all the details, because the time you’ll spend together is the greatest luxury of all.
            </p>
        </div>
        <div class="right"></div>
    </main>

    <div class="col rescol">
        <div class="card shadow-sm" data-aos="zoom-in">
            <img src="../Hotel/Images/c1_img.jpg" class="bimage" />
            <div class="card-body res_text" data-aos="zoom-in">
                <h1>Florida’s Resort</h1>
                <p>
                    An island oasis for downtime and disconnecting, Bungalows Key Largo rewrites the rule book on inclusive getaways. Our intimate adults-only (ages 21+ only) resort sits within a botanical garden edged by 1000 feet of ocean shoreline, just a few miles from
                    the warm waters of the Gulf Stream. We take care of all the details, because the time you’ll spend together is the greatest luxury of all.
                </p>
            </div>
        </div>
    </div>
    <main class="content_2 content">
        <div class="right"></div>
        <div class="left" data-aos="fade-up">
            <h1>Magical Bungalows with views that stretch for miles</h1>
            <p>
                Organic textures, soothing tropical hues and all – natural materials set the stage for guests to effortlessly find their bliss. An opulent expression of Key Largo’s relaxed cabana lifestyle, our bungalows pair the finest features and furnishings with
                the resort indulgences you love. Luxurious private verandas beckon you to revel in the freedom of outdoor living.
            </p>
        </div>
    </main>

    <div class="col rescol ">
        <div class="card shadow-sm" data-aos="zoom-in">
            <img src="../Hotel/Images/c2_img.jpg" class="bimage" />
            <div class="card-body res_text" data-aos="zoom-in">
                <h1>Magical Bungalows with views that stretch for miles</h1>
                <p>
                    Organic textures, soothing tropical hues and all – natural materials set the stage for guests to effortlessly find their bliss. An opulent expression of Key Largo’s relaxed cabana lifestyle, our bungalows pair the finest features and furnishings with
                    the resort indulgences you love. Luxurious private verandas beckon you to revel in the freedom of outdoor living.
                </p>
            </div>
        </div>
    </div>
    <main class="content_3 content">
        <div class="left" data-aos="fade-up">
            <h1>Nature sets our culinary course</h1>
            <p>
                From catch of the day seafood to bold Mexican flavors, Bungalows Key Largo serves up the local bounty alongside legendary views. Whether you are sipping a tropical drink or savoring a five-course feast, you can count on inspired cuisine presented at the
                peak of freshness.
            </p>
        </div>
        <div class="right"></div>
    </main>

    <div class="col rescol">
        <div class="card shadow-sm" data-aos="zoom-in">
            <img src="../Hotel/Images/c3_img.jpg" class="bimage" />
            <div class="card-body res_text" data-aos="zoom-in">
                <h1>Nature sets our culinary course</h1>
                <p>
                    From catch of the day seafood to bold Mexican flavors, Bungalows Key Largo serves up the local bounty alongside legendary views. Whether you are sipping a tropical drink or savoring a five-course feast, you can count on inspired cuisine presented at the
                    peak of freshness.
                </p>
            </div>
        </div>
    </div>
    <main class="content_4 content">
        <div class="right"></div>
        <div class="left" data-aos="fade-up">
            <h1>Key Largo Events</h1>
            <p>
                Join us at Bungalows Key Largo for an all-inclusive experience without all the hassle. Our team will handle all the delicate details of your stay at our adult-only resort. From water sports tournaments to live music to special themed events and more,
                our daily activities provide a unique experience every day of your stay.
            </p>
        </div>
    </main>

    <div class="col rescol">
        <div class="card shadow-sm" data-aos="zoom-in">
            <img src="../Hotel/Images/c4_img.jpg" class="bimage" />

            <div class="card-body  res_text">
                <h1>Key Largo Events</h1>
                <p>
                    Join us at Bungalows Key Largo for an all-inclusive experience without all the hassle. Our team will handle all the delicate details of your stay at our adult-only resort. From water sports tournaments to live music to special themed events and more,
                    our daily activities provide a unique experience every day of your stay.
                </p>
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="../Hotel/JS/script2.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>