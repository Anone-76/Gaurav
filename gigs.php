<?php
// Get form data
$category = $_POST['category'];
$name = $_POST['name'];
$username = $_POST['username'];
$description = $_POST['description'];
$price = $_POST['price'];
$image = $_FILES['image']['name'];
$country = $_POST['country'];
$last_name = $_POST['last_name'];
$email = $_POST['Email'];
$job_title = $_POST['job_title'];
$experience_level = $_POST['experience_level'];
$language = $_POST['language'];
$skills = $_POST['skills'];

// Upload image file
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

// Connect to database
$conn = mysqli_connect("localhost", "root", "", "gigsdata");

// Check if the connection is successful
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Execute SQL query based on selected category
switch ($category) {
  case "it":
    $sql = "INSERT INTO it (country, name, last, username, email, job, experience, language, skills, description, price, image)
    VALUES ('$country', '$name', '$last_name', '$username', '$email', '$job_title', '$experience_level', '$language', '$skills', '$description', '$price', '$image')";
    break;
  case "design":
    $sql = "INSERT INTO design (country, name, last, username, email, job, experience, language, skills, description, price, image)
    VALUES ('$country', '$name', '$last_name', '$username', '$email', '$job_title', '$experience_level', '$language', '$skills', '$description', '$price', '$image')";
    break;
  case "writing":
    $sql = "INSERT INTO writing (country, name, last, username, email, job, experience, language, skills, description, price, image)
    VALUES ('$country', '$name', '$last_name', '$username', '$email', '$job_title', '$experience_level', '$language', '$skills', '$description', '$price', '$image')";
    break;
  case "admin":
    $sql = "INSERT INTO admin (country, name, last, username, email, job, experience, language, skills, description, price, image)
    VALUES ('$country', '$name', '$last_name', '$username', '$email', '$job_title', '$experience_level', '$language', '$skills', '$description', '$price', '$image')";
    break;
  case "engineering":
    $sql = "INSERT INTO engineering (country, name, last, username, email, job, experience, language, skills, description, price, image)
    VALUES ('$country', '$name', '$last_name', '$username', '$email', '$job_title', '$experience_level', '$language', '$skills', '$description', '$price', '$image')";
    break;
  case "legal":
    $sql = "INSERT INTO legal country, name, last, username, email, job, experience, language, skills, description, price, image)
    VALUES ('$country', '$name', '$last_name', '$username', '$email', '$job_title', '$experience_level', '$language', '$skills', '$description', '$price', '$image')";
    break;
  case "wordpress":
    $sql = "INSERT INTO wordpress (country, name, last, username, email, job, experience, language, skills, description, price, image)
    VALUES ('$country', '$name', '$last_name', '$username', '$email', '$job_title', '$experience_level', '$language', '$skills', '$description', '$price', '$image')";
    break;
  case "voice":
    $sql = "INSERT INTO voice (country, name, last, username, email, job, experience, language, skills, description, price, image)
    VALUES ('$country', '$name', '$last_name', '$username', '$email', '$job_title', '$experience_level', '$language', '$skills', '$description', '$price', '$image')";
    break;
  default:
    echo "Invalid category selected";
    break;
}

// Execute SQL query
if (mysqli_query($conn, $sql)) {
  echo "<script>alert('Gig added successfully!'); window.location.href='index.php';</script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
