<?php
session_start();

include("/WD/Final/backend/a_login/a_connection.php");
include("/WD/Final/backend/a_login/a_functions.php");
// include("functions.php");

$user_data = check_login($con);

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
    <link rel="stylesheet" href="css/insert.css" />
    <link rel="stylesheet" href="inde1.scss" type="text/css">
    <title>Send Bill Page</title>
</head>

<body>

    <section class="heading" id="all">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <!-- <div class="content"> -->
                <h1 class="names">Hi,</h1>
                <h1 class="names">Welcome, </h1>
                <h1 class="names"> Admin name : <?php echo $user_data['user_name']; ?></h1>
                <span><br></span>
                <span><br></span>

                <p class="pnames">Please enter the customer name, total bill, total units and last due date </p>
                <p class="pnames">Please enter the correct CUSTOMER NAME i.e username in order to get right results ! </p>
            </div>
        </div>
        <span><br></span>

        <div class="row1">
            <div class="col-lg-4"></div>
            <div class="col-lg-6 button">
                <!-- card -->
                <div class="card border-0">
                    <div class="card-body">
                        <h4 class="card-title">NEW BILL</h4>

                        <div class="forflex">

                            <form action="insert.php" method="post">
                                <p class="card-text">
                                    <label for="first_name">First Name : </label>
                                    <input type="text" name="first_name" id="firstName">
                                </p>
                                <p class="card-text">
                                    <label for="units">Units : </label>
                                    <input type="text" name="units" id="units">
                                </p>
                                <p class="card-text">
                                    <label for="last_due">last_due : </label>
                                    <input type="text" name="last_due" id="last_due">
                                </p>
                                <p class="card-text">
                                    <label for="total">Total : </label>
                                    <input type="text" name="total" id="total">
                                </p>
                                <br>
                                <input type="submit" class="btn" value="Submit">
                                <a href="/Final/backend/a_login/a_index.php" class="btn">Go back </a>
                                <a href="/Final/backend/a_login/a_login.php" class="btn">Logout </a>
                            </form>
                        </div>
                        <br>


                        <!-- <a href="#" class="btn ">Pay Bill</a> -->
                    </div>
                </div>
            </div>
            <span><br></span>
            <span><br></span>
            <span><br></span>
        </div>

    </section>

</body>

</html>