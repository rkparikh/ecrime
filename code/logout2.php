<?php
 session_start();
 session_destroy();
 
 //echo "Successfully logout";
 header("location:ecrime_home.php");
?>