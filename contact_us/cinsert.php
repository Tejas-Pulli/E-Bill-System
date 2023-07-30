<!DOCTYPE html>
<html>
<title>
    <link rel="stylesheet" href="css/insert.css">
</title>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php

        $conn = mysqli_connect("localhost", "root", "", "generate_bill");

        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $contact_no =  $_REQUEST['contact_no'];
        $message = $_REQUEST['message'];


        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO contact_us  VALUES ('$name',
            '$email','$contact_no','$message')";

        if (mysqli_query($conn, $sql)) {
            echo "<h3>data stored in a database successfully.</h3>";

            echo nl2br("\n$name\n $email\n "
                . "$contact_no\n $message");
        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        echo ' <span><br></span>';
        echo ' <span><br></span>';

        echo '   <a class="btn" href="/Final/backend/contact_us/cindex.php">Continue</a>';
        echo ' <span><br></span>';
        echo ' <span><br></span>';
        echo '   <a class="btn" href="/Final/backend/login/index.php">Home </a>';

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>