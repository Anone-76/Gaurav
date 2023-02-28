<?php
session_start();

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
    <?php if(isset($_SESSION['username'])): ?>
      <li><a href="addgigs.html">Add Gig</a></li> 
      <li><a href="logout.php">Logout</a></li>
    <li><a href="#"><?php echo '<div class="far fa-user">'. $_SESSION['username'] ?></a></li>
      <?php endif; ?>

    </ul>
  </div>
</section>


 <section id="hero">
        <h1>Find the perfect <span>freelance</span> <br />
    services for your business</h1>
   
    <div class="but" ><button  type="button" onclick="location.href='allgigs.php'" >Explore</button></div>
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


