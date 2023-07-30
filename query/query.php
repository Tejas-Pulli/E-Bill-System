<?php
session_start();

include("/WD/Final/backend/login/connection.php");
include("/WD/Final/backend/login/functions.php");
// include("functions.php");

$user_data = check_login($con);

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
    <link rel="stylesheet" href="query.css" />
    <title>Query form</title>
</head>

<body>
    <!-- the basic home page  -->
    <section id="title">
        <div id="title">
            <div class="container-fluid">

                <!-- sacams -->
                <div class="row">
                    <div class="col-lg-7">
                        <!-- <div class="content"> -->
                        <!-- <h1 class="names">Hi,</h1> -->
                        <h1 class="names">Welcome Again.</h1>
                        <h1 class="names"></h1>
                        <!-- </div> -->
                        <br />
                        <p class="pnames">
                            Sorry for the in convinence please fill the form
                            and Feel free to share with us the problems you faced
                        </p>
                    </div>
                </div>
                <div class="mainform">
                    <form action="queryi.php" method="post">
                        <p class="card-text">
                            <label for="first_name" class="ppnames">First Name : </label>
                            <input type="text" name="first_name" id="firstName">
                        </p>
                        <p class="card-text">
                            <label for="no" class="ppnames">Contact No : </label>
                            <input type="text" name="contact_no" id="units">
                        </p>

                        <p class="card-text">
                            <label for="subject" class="ppnames">Subject : </label>
                            <input type="text" name="subject" id="total">
                        </p>


                        <p class="ppnames">Do you have any suggestion / query for us? </p>
                        <textarea type="text" name="suggestion" rows="8" cols="40"></textarea>
                        <br>
                        <br>

                        <a href="/Final/backend/login/" class="btn">Go back </a>
                        <a href="/Final/backend/login/login.php" class="btn">Logout </a>
                        <input type="submit" class="space btn" name="submit" value="Submit">
                    </form>
                </div>

            </div>
            <span><br /></span>
            <span><br /></span>
            <span><br /></span>
            <span><br /></span>
            <span><br /></span>
            <span><br /></span>
            <span><br /></span>
        </div>
    </section>
</body>

</html>