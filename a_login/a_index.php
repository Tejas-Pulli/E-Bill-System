<?php
session_start();

include("a_connection.php");
include("a_functions.php");

$user_data = check_login($con);

$sql = "SELECT * FROM `users`;";
// $result = $conn->query($sql);
$result = mysqli_query($con, $sql);
// $mysqli->close();

?>

<!DOCTYPE html>
<html>

<head>
	<title>My website</title>
	<link rel="stylesheet" href="css/a_index.css">
</head>

<body>
	<section class="outside">
		<h1>Total Users Avaliable</h1>
		<p class="pnames">This is the list of all enrolled user in the system</p>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
				<th>Ele Id.</th>
				<th>Username</th>
				<th>Date</th>
				<th>View</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
			// LOOP TILL END OF DATA
			while ($rows = $result->fetch_assoc()) {
			?>
				<tr>
					<!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
					<td><?php echo $rows['id']; ?></td>
					<td><?php echo $rows['user_name']; ?></td>
					<td><?php echo $rows['date']; ?></td>
					<td ><?php echo '<a href="/Final/backend/generate_bill/" class="btn">View</a>' ?></td>
				</tr>
			<?php
			}
			?>

		</table>
		<span><br></span>
		<span><br></span>
		<center><a href="a_logout.php" class="btn">Logout</a> </center>

	</section>
</body>

</html>