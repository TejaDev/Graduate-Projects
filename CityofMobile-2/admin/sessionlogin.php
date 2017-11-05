<?php
session_start(); 
 extract($_POST);

	if($txtpassword=="admin" && $txtusername=="admin")
	{
		$_SESSION['login']="yes";
		//echo $_SESSION["login"];
		header( 'Location: http://localhost:8081/CityOfMobile/admin/' ) ;
	}
	else
	{
		
		header( 'Location: http://localhost:8081/CityOfMobile/admin/sign-in.php' ) ;
	}
 ?>