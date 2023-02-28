<html>
  <head>
  <link rel="Stylesheet" href="style1.css" /> 
</head>
<h1>Explore All Available Services </h1>
</html>
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

// Get data from all tables
$sql = "SELECT 'design' as `table`, `name`, `last`, `country`, `job`, `username`, `email`, `description`, `skills`, `Language`, `experience`, `price`, `image`, `views` FROM `design` UNION 
        SELECT 'it' as `table`,  `name`, `last`, `country`, `job`, `username`, `email`, `description`, `skills`, `Language`, `experience`, `price`, `image`, `views` FROM `design` UNION 
        SELECT 'writing' as `table`,  `name`, `last`, `country`, `job`, `username`, `email`, `description`, `skills`, `Language`, `experience`, `price`, `image`, `views` FROM `writing` UNION 
        SELECT 'admin' as `table`,  `name`, `last`, `country`, `job`, `username`, `email`, `description`, `skills`, `Language`, `experience`, `price`, `image`, `views` FROM `admin` UNION 
        SELECT 'engineering' as `table`, `name`, `last`, `country`, `job`, `username`, `email`, `description`, `skills`, `Language`, `experience`, `price`, `image`, `views` FROM `engineering` UNION 
        SELECT 'legal' as `table`,  `name`, `last`, `country`, `job`, `username`, `email`, `description`, `skills`, `Language`, `experience`, `price`, `image`, `views` FROM `legal` UNION 
        SELECT 'wordpress' as `table`,  `name`, `last`, `country`, `job`, `username`, `email`, `description`, `skills`, `Language`, `experience`, `price`, `image`, `views` FROM `wordpress` UNION 
        SELECT 'voice' as `table`,  `name`, `last`, `country`, `job`, `username`, `email`, `description`, `skills`, `Language`, `experience`, `price`, `image`, `views` FROM `voice`";

$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Count the number of tables and rows
$num_tables = count(array_unique(array_column($data, 'table')));
$num_rows = count($data);

// Initialize the click counter for each gig
$clicks = array_fill(0, $num_rows, 0);
$total_views = 0;
foreach ($data as $index => $row) {
    $total_views += $row['views'];
}

// Loop through the data and display it
echo "<h3>Total $num_tables categories of Services with a total of $num_rows available gigs.</h3>";
echo "<h3>Total $num_tables categories of Services with a total of $num_rows available gigs and $total_views views.</h3>";

echo "<div class='container'>";

foreach ($data as $index => $row) {
    // Get the gig data
    $name = $row['name'];
    $username = $row['username'];
    $description = $row['description'];
    $price = $row['price'];
    $image = $row['image'];
    $table = $row['table'];
    $views = $row['views'];
    $last =$row['last'];
    $job =$row['job'];
    $country =$row['country'];
    // Construct the URL for the gig profile page
    $profile_url = "client_profile.php?table=$table&name=$name&username=$username";
    
    // Increment the view count when a user clicks on the gig
    // Increment the view count when a user clicks on the gig
if (isset($_GET['view']) && $_GET['view'] == $index) {
    $views++;
    $stmt = mysqli_prepare($conn, "UPDATE $table SET views=? WHERE name=? AND username=?");
    mysqli_stmt_bind_param($stmt, "iss", $views, $name, $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    echo "SQL query: UPDATE $table SET views=$views WHERE name='$name' AND username='$username'";
}



    
    // Display the gig data
    echo "<div class='card'>";
    echo "<h6>$table</h6>";
    echo "<div class='card-image'><img src='uploads/$image' alt='Gig Image'></div>";
    echo "<div class='card-content'>";
    echo "<h4 class='card-title'>$name $last</h4>";
    echo "<h4>$country</h4>";
    echo "<div class='card-details'>";
    echo "<p class='card-username'>Username: $username</p>";
    echo "<p class='card-description'>Job: $job</p>";
    echo "<p class='card-price'>Price: $$price</p>";
    echo "</div>";
    echo "<div class='card-footer'>";
    echo "<p class='card-views'>Views: $views</p>";
    
    // Add a link to the gig profile page with the view count index as a parameter
    echo "<a href='$profile_url&view=$index' class='card-button'>View Profile</a><br><br>";
    
    
    echo "</div>";
    echo "</div>";
    echo "</div>";
}


echo "</div>";



mysqli_close($conn);
?>