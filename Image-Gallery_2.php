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
    <title>Image-Gallery</title>
</head>

<body>
<nav class="nav">
<div class="preloader"></div>
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
    <div class="gallerybg">
        <h1>IMAGE-GALLERY</h1>
    </div>
    <div class="full-img" id="fullImgBox">
        <img src="../Images/I1.jpg" id="fullImg">
        <span onclick="closeFullImg()">X</span>

    </div>
    <div class="img-gallery">
        <img src="../Hotel/Images/I1.jpg" onclick="openFullImg(this.src)">
        <img src="../Hotel/Images/I2.jpg" onclick="openFullImg(this.src)">
        <img src="../Hotel/Images/I3.jpg" onclick="openFullImg(this.src)">
        <img src="../Hotel/Images/I4.jpg" onclick="openFullImg(this.src)">
        <img src="../Hotel/Images/I5.jpg" onclick="openFullImg(this.src)">
        <img src="../Hotel/Images/I6.jpg" onclick="openFullImg(this.src)">
        <img src="../Hotel/Images/I7.jpg" onclick="openFullImg(this.src)">
        <img src="../Hotel/Images/I8.jpg" onclick="openFullImg(this.src)">
        <img src="../Hotel/Images/I9.jpg" onclick="openFullImg(this.src)">
        <img src="../Hotel/Images/I10.jpg" onclick="openFullImg(this.src)">
        <img src="../Hotel/Images/I11.jpg" onclick="openFullImg(this.src)">
        <img src="../Hotel/Images/I12.jpg" onclick="openFullImg(this.src)">
        <img src="../Hotel/Images/I13.jpg" onclick="openFullImg(this.src)">
        <img src="../Hotel/Images/I14.jpg" onclick="openFullImg(this.src)">
        <img src="../Hotel/Images/I15.jpg" onclick="openFullImg(this.src)">
        <img src="../Hotel/Images/I16.jpg" onclick="openFullImg(this.src)">
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
    <script>
        var fullImgBox = document.getElementById("fullImgBox");
        var fullImg = document.getElementById("fullImg");

        function openFullImg(pic) {
            fullImgBox.style.display = "flex";
            fullImg.src = pic;
        }

        function closeFullImg() {
            fullImgBox.style.display = "none";
        }
    </script>

</body>

</html>