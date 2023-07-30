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
        $units = $_REQUEST['units'];
        $last_due =  $_REQUEST['last_due'];
        $total = $_REQUEST['total'];


        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO personal  VALUES ('$first_name',
            '$units','$last_due','$total')";

        if (mysqli_query($conn, $sql)) {
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

            echo nl2br("\n$first_name\n $units\n "
                . "$last_due\n $total");
        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }


        echo '   <a class="btn" href="/Final/backend/a_login/a_login.php">Logout</a>';
        echo ' <span><br></span>';
        echo ' <span><br></span>';
        echo '   <a class="btn" href="/Final/backend/generate_bill/">Continue </a>';

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>