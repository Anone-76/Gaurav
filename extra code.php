<!-- 
<?php

$username=$_POST['username'];
$name=$_POST['name'];
$password=$_POST['password'];

$con = mysqli_connect('localhost','root','','usrdata');
if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$check_username_query="SELECT * FROM reg WHERE username='$username'";
$run_query=mysqli_query($con,$check_username_query);

if(mysqli_num_rows($run_query)>0){
        echo "<script>alert('Username Already Exist!'); window.location.href='signin.html';
           </script>";
}
else{
    $insert_query="INSERT INTO reg (username,name,password) VALUES ('$username','$name','$password')";
    $run_query=mysqli_query($con,$insert_query);
    if($run_query){
        echo "Registration Successful";
    }
}

?> -->
<!-- //password should contain 8 character -->
<!-- 
<?php

$username=$_POST['username'];
$name=$_POST['name'];
$password=$_POST['password'];

$con = mysqli_connect('localhost','root','','usrdata');
if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$check_username_query="SELECT * FROM reg WHERE username='$username'";
$run_query=mysqli_query($con,$check_username_query);

if(mysqli_num_rows($run_query)>0){
        echo "<script>alert('Username Already Exist!'); window.location.href='signin.html';
        </script>";
}
else{
    if(strlen($password)<8){
        echo "password should contain 8 character";
    } else {
        if(!preg_match("#[0-9]+#", $password)){
            echo "password should contain at least one number";
        } else {
            if(!preg_match("#[a-z]+#", $password)){
                echo "password should contain at least one letter";
            } else {
                $insert_query="INSERT INTO reg (username,name,password) VALUES ('$username','$name','$password')";
                $run_query=mysqli_query($con,$insert_query);
                if($run_query){
                    echo "Registration Successful";
                }
            }
        }
    }
}

?> -->


<!-- <?php

$db_name='usrdata';
$table_name='reg';
$username=$_POST['username'];
$name=$_POST['name'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root','');

if($con)
{
$select_db=mysqli_select_db($con,$db_name);
if($select_db)
{
$check_username="select * from '$table_name' where username='$username'";
$run_check_username=mysqli_query($con,$check_username);

if(mysqli_num_rows($run_check_username)>0)
{
echo "username already exist";
}
else
{
if(strlen($password)<8)
{
echo "password must be 8 character long";
}
else
{
$insert_query="insert into '$table_name' values('$username','$name','$password')";
$run_insert_query=mysqli_query($con,$insert_query);
if($run_insert_query)
{
echo "registration successful";
}
}
}
}
}
?> -->









<!-- //     // if(!empty($username) || !empty($name) || !empty($password) ){
// // code
//         $host = "localhost";
//         $dbusername ="root";
//         $dbpassword ="";
//         $dbname ="usrdata";

// // create connection

//         $conn= new mysqli($host,$dbusername,$dbpassword,$dbname);
// // die if connection not successfull
//       if 
//       (!$conn){
          
//             die("Failed To Connect :". mysqli_connect_error());
// }
//        else{
     
//         $sql = "INSERT INTO `reg` (`username`, `name`, `password`) VALUES ('$username', '$name', '$password')";
//         $result=mysqli_query($conn, $sql);  
                 
// }

// if($result){
//         // echo '<script>alert("Register Succssefull")</script>'; 
//         // redirect('login.html');
//        echo "<script>alert('Register Succssefull'); window.location.href='login.html';
//         </script>";
        
        
// }
// else {
//         echo "Not Inserted".mysqli_error($conn);
        
// }
//?>              -->

<!-- write a code for registration page backend where database name is usrdata and table name is reg where store username,name and password. username not be repetative. -->


<!--  -->


<!-- With password hash -->

<!-- <?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usrdata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_POST['submit'])){
    
    $name= $_POST['name'];
    $username= $_POST['username'];
    $password= password_hash($_POST['password'], PASSWORD_DEFAULT); 

    $query = "SELECT * FROM reg WHERE username='$username'";
    $result = mysqli_query($conn, $query);
    $numResults = mysqli_num_rows($result);
    if ($numResults > 0) {
        echo 'Username already exist';
    }
    else{
        $query = "INSERT INTO reg (name, username, password)
        VALUES ('$name', '$username', '$password')";

        if ($conn->query($query) === TRUE) {
                echo "<script>alert('Register Succssefull'); window.location.href='login.html';
                      </script>";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
    }

}

$conn->close();
?>  -->


<!-- login extra -->



<!-- <?php 

// login handle 

session_start();
//check if user already login 

if (isset($_SESSION['username'])){

        header("location: index.html");
        exit;
}

require_once"config.php";


$username = $_POST['user'];
$password = $_POST['pass'];
    

    // if(!empty($username) || !empty($name) || !empty($password) ){
// code
        $host = "localhost";
        $dbusername ="root";
        $dbpassword ="";
        $dbname ="usrdata";

// create connection

        $conn= new mysqli($host,$dbusername,$dbpassword,$dbname);
// die if connection not successfull
      if 
      (!$conn){
          
            die("Failed To Connect :". mysqli_connect_error());
}
       else{
     
        $sql = "select * from reg where username='$username' and password='$password'";
        $result=mysqli_query($conn, $sql);  
        $count=mysqli_num_row($result);
                 
}

// if($count>0){
//         // echo '<script>alert("Register Succssefull")</script>'; 
//         // redirect('login.html');
//        echo "<script>alert('Login Succssefull'); window.location.href='index.html';
//         </script>";
        
        
// }
// else {
//         echo "Not Inserted".mysqli_error($conn);
        
// }
 ?>  -->




<!-- newww -->




<!-- <?php
// // include_once(config.php);
//  session_start();
// $host="localhost"; // Host name 
// $username="root"; // Mysql username 
// $password=""; // Mysql password 
// $db_name="usrdata"; // Database name 
// $tbl_name="reg"; // Table name 
// // Connect to server and select databse.
// mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
// mysql_select_db("$db_name")or die("cannot select DB");

// // username and password sent from form 
// $myusername=$_POST['username']; 
// $mypassword=$_POST['password']; 

// // To protect MySQL injection (more detail about MySQL injection)
// $myusername = stripslashes($myusername);
// $mypassword = stripslashes($mypassword);
// $myusername = mysql_real_escape_string($myusername);
// $mypassword = mysql_real_escape_string($mypassword);
// $sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
// $result=mysql_query($sql);

// // Mysql_num_row is counting table row
// $count=mysql_num_rows($result);

// // If result matched $myusername and $mypassword, table row must be 1 row
// if($count==1){

// // Register $myusername, $mypassword and redirect to file "index.html"
// $_SESSION['username']= $myusername;
// $_SESSION['password']= $mypassword; 
// echo "<script>alert('Login Succssefull'); window.location.href='index.html';
//              </script>";
// }
// else {
// echo "Wrong Username or Password";
// }
// ?> -->



*{
   padding: 0;
   margin: 0;
   box-sizing: border-box;
   font-family: 'josefin sans', sans-serif;
}

.hero{
   height: 100vh;
   width: 100%;
   background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6));
   background-size: cover;
   background-position: center;
}
.hero img{
   height: 100vh;
   width: 100%;
   background-size: cover;
   background-position: center;
   display: flex;
   align-items: center;
   justify-content: space-between;
   padding-top: 40px;
   padding-left: 10%;
   padding-right: 10%;
}
nav{
   display: flex;
   align-items: center;
   justify-content: space-between;
   padding-top: 40px;
   padding-left: 10%;
   padding-right: 10%;

} 
please write a html php form code where input  fields 'category' ,'name', 'description'(maximum 20 characters),'price'(type int), save to database name userdata where table name gigs






<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

	<h1>Explore All Available Categories</h1>

	<?php

// Connect to the database
$db = mysqli_connect("localhost", "root", "", "usrdata");

// Check if the connection is successful
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

// Fetch and display data category-wise
$sql = "SELECT * FROM gigs ORDER BY category";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
  $current_category = '';
  while ($row = mysqli_fetch_assoc($result)) {
    // Display category as heading
    if ($row['category'] != $current_category) {
		if ($current_category != '') {
		  echo '</div>';
		}
		$current_category = $row['category'];
		echo "<h2 class='category-heading'>{$current_category}</h2>";
		echo '<div class="row card-container">';
	  }
	  
	  echo '<div class="col-md-4">';
	  echo '<div class="card">';
	  echo '<img src="uploads/'.$row['image'].'" class="card-img-top" alt="Gig Image">';
	  echo '<div class="card-body">';
	  echo '<h5 class="card-title">'.$row['name'].'</h5>';
	  echo '<p class="card-text">'.$row['description'].'</p>';
	  echo '<p class="card-text">Price:$ '.$row['price'].'</p>';
	  echo '</div>';
	  echo '<div class="card-footer">';
	  echo '<a href="#" class="btn">Add to Cart</a>';
	  echo '</div>';
	  echo '</div>';
	  echo '</div>';
	  
	  $next_row = mysqli_fetch_assoc($result);
	  if ($next_row === null || $next_row['category'] != $current_category) {
		echo '</div>';
	  }
	  
  }
} else {
  echo "No gigs found in the database";
}

// Close the database connection
mysqli_close($db);

?>



</div>
</body>
</html>




<!-- home page code here -->


<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !=true){
  echo "<script>alert('please Login '); window.location.href='login.html';
        </script>";

}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial scale=1.0">
    <link rel="Stylesheet" href="Style.css" /> 
    
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro&family=Literata">

<title>WorkUp</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>

</head>

   <body>
   
      <section id="header">

<a href="#"><img src="img/logo1.png" height="55px", width="100%"  id="logo1" class="logo" alt "" /></a>

<div>
  <ul id="navbar">

    <li><a class="active"  href="index.php">Home</a></li>
    <li><a href="how.html">How It Works</a></li>
    <li><a href="About.html">About</a></li>
    <li><a href="Contact.html">Contact Us</a></li>
    <li><a href="login.html">Log In</a></li>
    <li><a href="signin.html">Sign In</a></li>
    <li><a href="#"><?php echo '<div class="far fa-user">'. $_SESSION['username']?></a></li>

    </ul>
  </div>
</section>




    <section id="hero">

    
    <h1>Find the perfect <span>freelance</span> <br />
    services for your business</h1>
    
    <div class="but" ><button>Explore</button></div>
    </section>
<div class="b" ><h3>Browse talent by category</h3></div>
<section id="Browse" >
         
         <div class="cat-container">
              <div class="cat">
              <img src="img/f/f1.jpg" alt="An image"/>
            <h6  class="hidden-link" onclick="location.href='login.html'">IT and Development</h6>
            <p class="hidden-link1">Dev and IT experts <br>to scale your org</p>
            
             </div>

              <div class="cat">
              <img src="img/f/f2.jpg" alt="An image"/>
            <h6  class="hidden-link" onclick="location.href='login.html'">Design And Creative</h6>
            <p class="hidden-link1">Hire freelance design and creative<br> experts to help you scale</p>
              </div>
         
            
            
              <!-- <div class="cat">
              <img src="img/f/f2.png" alt="An image"/>
            <h6  class="hidden-link" onclick="location.href='login.html'">Sales And Marketing</h6>
            <p class="hidden-link1">Dev and IT experts <br>to scale your org</>
              </div> -->
   
         
              <div class="cat">
              <img src="img/f/f3.png" alt="An image"/>
            <h6  class="hidden-link" onclick="location.href='login.html'">Writing And Translation</h6>
            <p class="hidden-link1">Hire freelance writing and <br>translation experts in moments</p>
             </div>
          
   
              <div class="cat">
              <img src="img/f/f4.png" alt="An image"/>
            <h6  class="hidden-link" onclick="location.href='login.html'">Admin And Costomer Support</h6>
            <p class="hidden-link1">manage your organization’s <br>customer service needs big or small</p>
              </div>
         

            
              <!-- <div class="cat">
              <img src="img/f/f2.png" alt="An image"/>
           <h6  class="hidden-link" onclick="location.href='login.html'">Financial And Account</h6>
           <p class="hidden-link1">Dev and IT experts <br>to scale your org</>
                  </div> -->
         
              <div class="cat">
              <img src="img/f/f5.png" alt="An image"/>
                <h6  class="hidden-link" onclick="location.href='login.html'">Engineering And Architecture</h6>
                <p class="hidden-link1">Scale up fast with engineering<br> and architecture experts</p>
                   </div>
                
                  <div class="cat">
                  <img src="img/f/f6.png" alt="An image"/>
                <h6  class="hidden-link" onclick="location.href='login.html'">Legal</h6>
                <p class="hidden-link1">Find legal experts to give <br>you the guidance you need</p>
                   </div>
             
                  <div class="cat">
                  <img src="img/f/f7.png" alt="An image"/>
                <h6  class="hidden-link" onclick="location.href='login.html'">WordPress</h6>
                <p class="hidden-link1">Expert to build your<br> WordPress website</p>
                  </div>

                  <div class="cat">
                  <img src="img/f/f8.png" alt="An image"/>
                   <h6  class="hidden-link" onclick="location.href='login.html'">Voice </h6>
                   <p class="hidden-link1">your audio or video in any <br>style, language, or accent.</p>
                      </div>

                </div>         
</section>

<!-- <div class="container-banner">
 
  
  <img src="img/b/sb1.png" alt="image">

  <p class="text">

    <h1>Find great work</h1>
    <h5>Meet clients you’re excited to work with and take 
    your career or business to new heights.</h5>
<br> -->

<section id="Browse-banner" >
         
         <div class="cat-container-banner"> </div>
<div class="cat-banner">
                  <img src="img/b/sb1.png" alt=""/>
                
                    <h1  class="hidden-link-banner" >We’re the world’s work marketplace</h1>
                   <h5 class="hidden-link1-banner">Meet clients you’re excited to work <br>with and take 
                    your career or business to new heights.</h5>

                    <h1  class="hidden-link-banner" >Safe and secure</h1>
                   <h5 class="hidden-link1-banner">Focus on your work knowing we help protect <br>your 
      data and privacy. We’re here with 24/7 support if you need it.</h5>

      <h1  class="hidden-link-banner" >24/7 support</h1>
                   <h5 class="hidden-link1-banner">Questions? Our round-the-clock support team<br>
                    is available to help anytime, anywhere.</h5>
                   
 </div>
</section>





<!-- <section id="imgslider"> 
    <div class="text">
        <h2>Find the World Best <br>Freelancers on <span> WorkUp </span></h2>

        <div class="imgslider">
        
        </div>  
        </div>        
</section> -->
<hr>
<footer>
  <div class="footer-field">
    <a href="#"><img src="img/logo1.png" height="75px", width="35%"  id="logo1" class="logo" alt "" /></a>
  <a >A Little about WorkUp<br>
  WorkUp is a freelance <br>services marketplace<br> is an online platform where <br>businesses 
            can find and hire<br> individual<br>
  Location:4465+VG7, Aurangabad <br>Burhanpur
  Highway Road,<br> Muktainagar, Jalgaon,
  Maharashtra 425306</a>
</div>


  <div class="footer-field">
    <h5>Contact</h5>
    <a>Email:help@workup.com</a>
    <a>Phone:02584250242</a>
    <a>Location:4465+VG7, Aurangabad <br>Burhanpur
      Highway Road,<br> Muktainagar, Jalgaon,
      Maharashtra 425306</a>
  </div>

  <div class="footer-field">
    <h5>About</h5>
    <a href="overview.html">Company Overview</a>
    <a href="history.html">History</a>
    <a href="legal.html">Legal Information</a>
    
    
  </div>
  <div class="footer-field">
    <h5>Top Skills</h5>
    <a href="#">Web Development</a>
    <a href="#">Design</a>
    <a href="#">Marketing</a>
    <a href="#">Transcribe</a>
    <a href="#">Logo Design</a>
    
    
    
  </div>

  <div class="footer-field">
    <h5>Help Support</h5>
    <a href="help&support.html">Help,Support</a>
    <a href="tss.html">Trust, Security & Safety</a>
    <a href="terms.html">Terms & Conditions</a>
    
  </div>

  <div class="footer-field">
    <h5>Browse</h5>
    <a href="how.html">How Upwork Work</a>
    <a href="allgigs.php">Freeancing Services</a>
    <a href="allgigs.php">Freeancing Skills</a>
  </div>
</footer>

<div class="ft">
<div class="footer-field">
<a href="#"><img src="img/logo1.png" height="55px", width="100%"  id="logo1" class="logo" alt "" /></a>
      <!-- <h3>A Little About Stamina.</h3>
      <p>Facilis ipsum reprehenderit nemo molestias.<br> Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
      <p><a href="#">Become A Member</a></p> -->
  </div>
<p>Copyright &copy; 2023 WorkUp</p>
<div class="social-icons">
<a href="#">
<i class="fab fa-twitter"></i>
</a>
<a href="#">
<i class="fab fa-instagram"></i>
</a>
<a href="#">
<i class="fab fa-facebook-f"></i>
</a>
</div>
</div>
<script src="jscript.js">

</script>
</body>
</html>


<!-- extra gigs code -->
<?php
echo "<h1>Explore All Available Categories</h1>";
// Connect to the database
$db = mysqli_connect("localhost", "root", "", "usrdata");

// Check if the connection is successful
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

// Fetch and display data category-wise
$sql = "SELECT * FROM gigs ORDER BY category";
$result = mysqli_query($db, $sql);

$num_results = mysqli_num_rows($result);
echo '<p class="card-text1">Total Gigs :' .$num_results .'</p>';

if ($num_results > 0) {
  $current_category = '';
  $prev_row = null;
  while ($row = mysqli_fetch_assoc($result)) {
    // Display category as heading
    if ($row['category'] != $current_category) {
      if ($current_category != '') {
        echo '</div>';
      }
      $current_category = $row['category'];
      echo "<h2 class='category-heading'>{$current_category}</h2>";
      echo '<div class="row card-container">';
    }

    // Check for duplicate entries
    if ($row === $prev_row) {
      continue;
    }

    echo '<div class="col-md-4">';
    echo '<div class="card">';
    echo '<a href="client_profile.php?username='.$row['username'].'"><img src="uploads/'.$row['image'].'" class="card-img-top" alt="Gig Image"></a>';
    echo '<div class="card-body">';
    echo '<h5 class="card-title">'.$row['name'].'</h5>';
    echo '<p class="card-text">'.$row['description'].'</p>';
    echo '<p class="card-text">Price:$ '.$row['price'].'</p>';
    echo '</div>';
    echo '<div class="card-footer">';
    echo '<a href="#" class="btn">Add to Cart</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';

    $prev_row = $row;

    $next_row = mysqli_fetch_assoc($result);
    if ($next_row === null || $next_row['category'] != $current_category) {
      echo '</div>';
    }
  }
} else {
  echo "No gigs found in the database";
}

// Close the database connection
mysqli_close($db);

?>




listen ! i provide 3 defferent pages code some code have html and also  backend and some only php code to display data and also releated php mysql database structure.. you configure this all pages first page give data from user they know as add gig using post method values go to gig.php to save in database and thene next is show all entered data on page they page known as allgigs.php and here database structure


CREATE DATABASE usrdata;

USE usrdata;

CREATE TABLE categories (
  id INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(50) NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO categories (name) VALUES
('design'),
('writing'),
('admin'),
('engineering'),
('legal'),
('wordpress'),
('voice');

CREATE TABLE gigs (
  id INT(11) NOT NULL AUTO_INCREMENT,
  category_id INT(11) NOT NULL,
  name VARCHAR(50) NOT NULL,
  username VARCHAR(50) NOT NULL,
  description TEXT NOT NULL,
  price DECIMAL(10,2) NOT NULL,
  image VARCHAR(255) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (category_id) REFERENCES categories(id)
);



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial scale=1.0">
    <link rel="Stylesheet" href="Style.css" /> 
 
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro&family=Literata">

<title>e-Commerce</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>

</head>

<section id="header">

    <a href="#"><img src="img/logo1.png" height="55px", width="100%"  id="logo1" class="logo" alt "" /></a>
    
    <div>
      <ul id="navbar">
    
        <li><a href="index.php">Home</a></li>
        <li><a href="how.html">How It Works</a></li>
        <li><a href="About.html">About</a></li>
        <li><a href="Contact.html">Contact Us</a></li>
        <li><a href="login.html">Log In</a></li>
        <li><a href="signin.html">Sign In</a></li>
    
        </ul>
      </div>
    </section>
	</html>


	
	<link rel="Stylesheet" href="style1.css" />
	<?php
echo "<h1>Explore All Available Categories</h1>";
// Connect to the database

// Connect to the database
$db = mysqli_connect("localhost", "root", "", "gigsdata");

// Check if the connection is successful
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

// Fetch data from all tables and store it in an array
$tables = array("it", "design", "writing", "admin", "engineering", "legal", "wordpress", "voice");
$data = array();
foreach ($tables as $table) {
  $sql = "SELECT * FROM $table";
  $result = mysqli_query($db, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    $row['table'] = $table;
    $data[] = $row;
  }
}

// Display data in a table format
if (!empty($data)) {
  echo "<table>";
  echo "<tr><th>Table Name</th><th>Username</th><th>Description</th><th>Price</th><th>Image</th></tr>";
  foreach ($data as $row) {
    echo "<tr>";
    echo "<td>" . $row['table'] . "</td>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['description'] . "</td>";
    echo "<td>$" . $row['price'] . "</td>";
    echo "<td><img src='uploads/" . $row['image'] . "' alt='Gig Image' width='100' height='100'></td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "No data found in the database";
}

// Close the database connection
mysqli_close($db);
?>


<hr>
<footer>
  <div class="footer-field">
    <a href="#"><img src="img/logo1.png" height="75px", width="35%"  id="logo1" class="logo" alt "" /></a>
  <a >A Little about WorkUp<br>
  WorkUp is a freelance <br>services marketplace<br> is an online platform where <br>businesses 
            can find and hire<br> individual<br>
  Location:4465+VG7, Aurangabad <br>Burhanpur
  Highway Road,<br> Muktainagar, Jalgaon,
  Maharashtra 425306</a>
</div>


  <div class="footer-field">
    <h5>Contact</h5>
    <a>Email:help@workup.com</a>
    <a>Phone:02584250242</a>
    <a>Location:4465+VG7, Aurangabad <br>Burhanpur
      Highway Road,<br> Muktainagar, Jalgaon,
      Maharashtra 425306</a>
  </div>

  <div class="footer-field">
    <h5>About</h5>
    <a href="overview.html">Company Overview</a>
    <a href="history.html">History</a>
    <a href="legal.html">Legal Information</a>
    
    
  </div>
  <div class="footer-field">
    <h5>Top Skills</h5>
    <a href="#">Web Development</a>
    <a href="#">Design</a>
    <a href="#">Marketing</a>
    <a href="#">Transcribe</a>
    <a href="#">Logo Design</a>
    
    
    
  </div>

  <div class="footer-field">
    <h5>Help Support</h5>
    <a href="help&support.html">Help,Support</a>
    <a href="tss.html">Trust, Security & Safety</a>
    <a href="terms.html">Terms & Conditions</a>
    
  </div>

  <div class="footer-field">
    <h5>Browse</h5>
    <a href="how.html">How Upwork Work</a>
    <a href="allgigs.php">Freeancing Services</a>
    <a href="allgigs.php">Freeancing Skills</a>
  </div>
</footer>

<div class="ft">
<div class="footer-field">
<a href="#"><img src="img/logo1.png" height="55px", width="100%"  id="logo1" class="logo" alt "" /></a>
      <!-- <h3>A Little About Stamina.</h3>
      <p>Facilis ipsum reprehenderit nemo molestias.<br> Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
      <p><a href="#">Become A Member</a></p> -->
  </div>
<p>Copyright &copy; 2023 WorkUp</p>
<div class="social-icons">
<a href="#">
<i class="fab fa-twitter"></i>
</a>
<a href="#">
<i class="fab fa-instagram"></i>
</a>
<a href="#">
<i class="fab fa-facebook-f"></i>
</a>
</div>


<!--  -->