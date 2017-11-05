<?php 
session_start();
 session_destroy();
 header( 'Location: http://localhost:8081/CityOfMobile/admin/sign-in.php') ;
?>