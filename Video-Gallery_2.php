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
    <title>Video-Gallery</title>

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
    <div class="gallerybg">
        <h1>VIDEO-GALLERY</h1>
    </div>
    <main class="vid_gallery">

        <div id="player1"></div>
        <div id="player2"></div>
        <div id="player3"></div>
        <div id="player4"></div>
        <div id="player5"></div>
        <div id="player6"></div>
    </main>
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
    <script>
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
        var player1, player2, player3, player4, player5, player6;

        function onYouTubeIframeAPIReady() {
            player1 = new YT.Player('player1', {
                height: '390',
                width: '640',
                videoId: 'eZFb0kO5E8w',

            });
            player2 = new YT.Player('player2', {
                height: '390',
                width: '640',
                videoId: 'rXl36nA96VE',

            });
            player3 = new YT.Player('player3', {
                height: '390',
                width: '640',
                videoId: 'UcWNuyVRdio',

            });
            player4 = new YT.Player('player4', {
                height: '390',
                width: '640',
                videoId: 'kruxlZR5sRk',

            });
            player5 = new YT.Player('player5', {
                height: '390',
                width: '640',
                videoId: '1FvjxIPyUPo',

            });
            player6 = new YT.Player('player6', {
                height: '390',
                width: '640',
                videoId: 'kmmbMm3aAOo',

            });
        }

        function onPlayerReady(event) {
            event.target.playVideo();
        }
        var done = false;

        function onPlayerStateChange(event) {
            if (event.data == YT.PlayerState.PLAYING && !done) {
                setTimeout(stopVideo, 6000);
                done = true;
            }
        }

        function stopVideo() {
            player.stopVideo();
        }
    </script>
    <script src="../Hotel/JS/script2.js"></script>
</body>

</html>