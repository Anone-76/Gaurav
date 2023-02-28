<!DOCTYPE html>
<html>
<head>
	<title>Client Profile</title>
	<link rel="stylesheet" href="style2.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<h1>Details</h1>
			<hr>
		</div>
		<div class="gig-info">
			<?php
				// Connect to the database
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "gigsdata";
				$conn = mysqli_connect($servername, $username, $password, $dbname);

				// Check connection
				if (!$conn) {
				    die("Connection failed: " . mysqli_connect_error());
				}

				// Get data for the selected gig
				$table = $_GET['table'];
				$name = $_GET['name'];
				$username = $_GET['username'];
				$sql = "SELECT * FROM $table WHERE name='$name' AND username='$username'";
				$result = mysqli_query($conn, $sql);
				$data = mysqli_fetch_assoc($result);

				// Display the gig information
				echo "<div class='gig-image'><img src='uploads/" . $data['image'] . "' alt='Gig Image'></div>";
				echo "<div class='gig-details'>";
				echo "<h2>" . $data['name'] . "</h2>";
				echo "<p>Username: " . $data['username'] . "</p>";
				echo "<p>Description: " . $data['description'] . "</p>";
				echo "<p>Price: $" . $data['price'] . "</p>";
				echo "</div>";

				mysqli_close($conn);
			?>
		</div>
	</div>
</body>
</html>
