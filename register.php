<?php
require_once 'config.php';

$username = $password = $confirm_password = '';
$username_err = $password_err = $confirm_password_err = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if username is empty
    if (empty(trim($_POST['username']))) {
        $username_err = 'Username cannot be blank';
    } else {
        $sql = 'SELECT id FROM users WHERE username = ?';
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, 's', $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = 'This username is already taken';
                } else {
                    $username = trim($_POST['username']);
                }
            } else {
                echo 'Something went wrong';
            }
        }
    }

    mysqli_stmt_close($stmt);

    // Check for password
    if (empty(trim($_POST['password']))) {
        $password_err = 'Password cannot be blank';
    } elseif (strlen(trim($_POST['password'])) < 5) {
        $password_err = 'Password cannot be less than 5 characters';
    } else {
        $password = trim($_POST['password']);
    }

    // Check for confirm password field
    if (trim($_POST['password']) != trim($_POST['confirm_password'])) {
        $password_err = 'Passwords should match';
    }

    // If there were no errors, go ahead and insert into the database
    if (
        empty($username_err) &&
        empty($password_err) &&
        empty($confirm_password_err)
    ) {
        $sql = 'INSERT INTO users (username, password) VALUES (?, ?)';
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param(
                $stmt,
                'ss',
                $param_username,
                $param_password
            );

            // Set these parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);

            // Try to execute the query
            if (mysqli_stmt_execute($stmt)) {
                header('location: login.php');
            } else {
                echo 'Something went wrong... cannot redirect!';
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);
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
    <script src="https://kit.fontawesome.com/9471381b47.js" crossorigin="anonymous"></script>
    <title>Form</title>
</head>

<body>
<div class="preloader"></div>
    <nav class="nav">
        <div class="logo"><img src="../Hotel/Images/logo.png"></div>
        <ul class="options">
            <li>
                <a href="index.html">HOME</a>
            </li>
            <li>
                <a href="AboutUs.html">ABOUT US</a>
            </li>
            <li>
                <a href="ContactUs.html">CONTACT US</a>
            </li>
            <li>
                <a href="Gallery.html">GALLERY</a>
            </li>
        </ul>
        <form action="register.php" method="get">
            <button class="navbtn" type="submit">
                REGISTER
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
                <a href="index.html">HOME</a>
            </li>
            <li>
                <a href="AboutUs.html">ABOUT US</a>
            </li>
            <li>
                <a href="ContactUs.html">CONTACT US</a>
            </li>
            <li>
                <a href="Gallery.html">GALLERY</a>
            </li>
        </ul>
        <form action="register.php" method="get">
            <button class="ver_navbtn" type="submit">
                REGISTER
            </button>
        </form>
    </div>
    <div class="signup_box">
        <div class="signup_form">
            <h1>REGISTER HERE</h1>
            <form action="" method="post">
                <input type="text" placeholder="Username" name="username" id="username">
                <input type="password" placeholder="Password" name="password" id="password">
                <input type="password" placeholder="Confirm Password" name ="confirm_password"  id="confirm_password">
                
                <p><button class="form_btn">SIGN UP</button></p>
                <span>Have an account? <a href="login.php">Log in</a></span>
            </form>
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





