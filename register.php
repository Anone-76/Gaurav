<?php
$username = $_POST['username'];
$name = $_POST['name'];
$password = $_POST['password'];

$con = mysqli_connect('localhost', 'root', '', 'logindata');
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$check_username_query = "SELECT * FROM reg WHERE username=?";
$stmt = mysqli_prepare($con, $check_username_query);
mysqli_stmt_bind_param($stmt, 's', $username);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
  echo "<script>alert('Username Already Exists!'); window.location.href='signin.html';</script>";
} else {
  $insert_query = "INSERT INTO reg (username, name, password) VALUES (?, ?, ?)";
  $stmt = mysqli_prepare($con, $insert_query);
  mysqli_stmt_bind_param($stmt, 'sss', $username, $name, $password);
  $result = mysqli_stmt_execute($stmt);

  if ($result) {
    echo "<script>alert('Registration Successful'); window.location.href='login.html';</script>";
  }
}
mysqli_close($con);
?>
