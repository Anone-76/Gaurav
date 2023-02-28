<?php $host = "localhost";
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
else {
    echo"connected";
}
?>


