<?php
session_start();

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "generate_bill";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
include("/WD/Final/backend/login/connection.php");
include("/WD/Final/backend/login/functions.php");
// include("functions.php");
$user_data = check_login($con);
$name = $user_data['user_name'];

$sql = "DELETE FROM 'personal' WHERE first_name='$name";
// $result = mysqli_query($con, $sql);

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
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
    <link rel="stylesheet" href="view.css" />
    <link rel="stylesheet" href="inde1.scss" type="text/css">
    <title>Delete Page</title>
</head>

<body>

    <div class="heading" id="all">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <!-- <div class="content"> -->
                <!-- <h3 class="names">Hi,</h3> -->
                <h3 class="names">Welcome, </h3>
                <h3 class="names">Name : <?php echo $user_data['user_name']; ?></h3>?>
                <span><br></span>
                <span><br></span>
                <p class="pnames">Your bill has been paid </p>

            </div>
        </div>
        <span><br></span>
        <section class="outside">


            <span><br></span>
            <span><br></span>
            <center><a href="/Final/backend/login/logout.php" class="btn">Logout</a> </center>
            <center><a href="/Final/backend/login/index.php" class="btn">Go Back</a> </center>

        </section>
    </div>

</body>

</html>