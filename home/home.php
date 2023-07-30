<?php
// session_start();
// include("connection.php");
// include("functions.php");

// $user_data = check_login($con);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- icons for footer -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />

    <!-- font links -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@200&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@800&family=Roboto:wght@500&display=swap" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- Java Script links -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- the favicon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- the styel -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />
    <!-- the font style link -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet" />
    <!-- CSS file -->
    <link rel="stylesheet" href="css/home.css" />
    <title>Eletricity Bill System</title>
</head>

<body>
    <!-- the basic home page  -->
    <section id="title">
        <div id="title"></div>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="#">Eletricity Bill Payment</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#homes">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Final/backend/contact_us/cindex.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">About</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- sacams -->
            <div class="row">
                <div class="col-lg-7">
                    <!-- <div class="content"> -->
                    <h1 class="names">Hi,</h1>
                    <h1 class="names">Welcome to the</h1>
                    <h1 class="names">Eletricity Bill Payment System</h1>
                    <!-- </div> -->
                    <br />
                    <p class="pnames">Please Login or Signup to continue</p>
                </div>
                <div class="col-lg-5">
                    <!-- <div class="content"> -->
                    <!-- <img src="/College_Projects///Project1 Eletricity Bill system/frontend/images/logo.png" alt=""> -->
                </div>
            </div>
            <div class="row1" id = "homes">
                <div class="col-lg-7">
                    <!-- <button type="button">Contact Me</button> -->
                    <div class="container">
                        <a href="/Final/backend/a_login/a_login.php" class="btn">Admin Login</a>
                    </div>
                    <div class="container">
                        <a href="/Final/backend/login/login.php" class="btn">User Login</a>
                    </div>
                </div>
                <br>
                <br>
                <!-- <br> -->
            </div>
        </div>
    </section>
</body>

</html>