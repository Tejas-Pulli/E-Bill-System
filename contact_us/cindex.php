<?php
// session_start();

// include("/WD/Final/backend/login/connection.php");
// include("/WD/Final/backend/login/functions.php");
// // include("functions.php");
// $user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <!-- icons for footer -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- Java Script links -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <!-- CSS file -->
    <link rel="stylesheet" href="css/ind.css" />
    <link rel="stylesheet" href="inde1.scss" type="text/css">
    <title>Contact Us</title>
</head>

<body>

    <section class="heading" id="all">
        <div class="background gradient-custom">
            <div class="container">
                <!-- <form action="cinsert.php" method="post"> -->

                <div class="screen">
                    <div class="screen-header">
                        <div class="screen-header-left">
                            <div class="screen-header-button close"></div>
                            <div class="screen-header-button maximize"></div>
                            <div class="screen-header-button minimize"></div>
                        </div>
                        <div class="screen-header-right">
                            <div class="screen-header-ellipsis"></div>
                            <div class="screen-header-ellipsis"></div>
                            <div class="screen-header-ellipsis"></div>
                        </div>
                    </div>
                    <form action="cinsert.php" method="post">

                        <div class="screen-body">
                            <div class="screen-body-item left">
                                <div class="app-title">
                                    <span>CONTACT</span>
                                    <span>US</span>
                                </div>
                                <div class="app-contact">CONTACT INFO : +62 81 314 928 595</div>
                            </div>
                            <div class="screen-body-item">
                                <div class="app-form">
                                    <div class="app-form-group">
                                        <input class="app-form-control" name="name" placeholder="NAME">
                                    </div>
                                    <div class="app-form-group">
                                        <input class="app-form-control" name="email" placeholder="EMAIL">
                                    </div>
                                    <div class="app-form-group">
                                        <input class="app-form-control" name="contact_no" placeholder="CONTACT NO">
                                    </div>
                                    <div class="app-form-group message">
                                        <input class="app-form-control" name="message" placeholder="MESSAGE">
                                    </div>
                                    <div class="app-form-group buttons">
                                        <button class="app-form-button">CANCEL</button>
                                        <button class="app-form-button">SEND</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </form>
                <div class="credits">
                    inspired by
                    <a class="credits-link" href="https://dribbble.com/shots/2666271-Contact" target="_blank">
                        <svg class="dribbble" viewBox="0 0 200 200">
                            <g stroke="#ffffff" fill="none">
                                <circle cx="100" cy="100" r="90" stroke-width="20"></circle>
                                <path d="M62.737004,13.7923523 C105.08055,51.0454853 135.018754,126.906957 141.768278,182.963345" stroke-width="20"></path>
                                <path d="M10.3787186,87.7261455 C41.7092324,90.9577894 125.850356,86.5317271 163.474536,38.7920951" stroke-width="20"></path>
                                <path d="M41.3611549,163.928627 C62.9207607,117.659048 137.020642,86.7137169 189.041451,107.858103" stroke-width="20"></path>
                            </g>
                        </svg>
                        Shreyansh </a>
                </div>
            </div>
        </div>



    </section>

</body>

</html>