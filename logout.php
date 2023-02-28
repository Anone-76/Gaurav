<?php
session_start();
$_SESSION = array();
session_destroy();
echo "<script>alert('LogOut Succssefull'); window.location.href='index.php';
        </script>";

?>