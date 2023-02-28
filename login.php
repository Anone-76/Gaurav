<?php
session_start();

// check if user already logged in
if(isset($_SESSION['username'])) {
  // user already logged in
  echo "<script>alert('You are already logged in'); window.location.href='index.php';</script>";
  exit();
}

$username = $_POST['username'];
$password = $_POST['password'];
$conn = mysqli_connect("localhost", "root", "", "logindata");

$query = mysqli_query($conn, "select * from reg where username='$username' and password='$password'");

$row = mysqli_fetch_array($query);
if($row['username'] == $username && $row['password'] == $password) {
  $_SESSION["username"] = $username;
  $_SESSION["id"] = $row['id']; // assuming there is an 'id' column in the 'reg' table
  $_SESSION["loggedin"] = true;

  echo "<script>alert('Login successful'); window.location.href='index.php';</script>";
} else {
  echo "<script>alert('Invalid username or password'); window.location.href='login.html';</script>";
}

mysqli_close($conn);
?>
