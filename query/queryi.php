<!DOCTYPE html>
<html>

<head>
    <title>Query / Feedback page</title>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "generate_bill");

        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $first_name =  $_REQUEST['first_name'];
        $contact_no = $_REQUEST['contact_no'];
        $subject =  $_REQUEST['subject'];
        $suggestion = $_REQUEST['suggestion'];


        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO queries  VALUES ('$first_name',
            '$contact_no','$subject','$suggestion')";

        if (mysqli_query($conn, $sql)) {
            // echo "<h3>data stored in a database successfully."
            // . " Please browse your localhost php my admin"
            // . " to view the updated data</h3>";

            // echo nl2br("\n$first_name\n $units\n "
            // . "$last_due\n $total");
            // } else {
            // echo "ERROR: Hush! Sorry $sql. "
            // . mysqli_error($conn);
        }
        echo ' <span><br></span>';
        echo ' <span><br></span>';


        echo '   <a href="/Final/backend/login/login.php">Logout</a>';
        echo ' <span><br></span>';
        echo ' <span><br></span>';

        echo '   <a href="/Final/backend/query/query.php">Go back</a>';
        echo ' <span><br></span>';
        //    echo' <span><br></span>';
        // echo '   <a href="/Final/backend/generate_bill/">Continue </a>';

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>