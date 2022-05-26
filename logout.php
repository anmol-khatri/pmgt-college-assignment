<?php 
session_start();
if (session_status() === PHP_SESSION_ACTIVE){
	echo "logged out";
    session_destroy();
    header('location:index.php');
}
else{
	echo"not logged";
	
    header('location:index.php');
}
        
    ?>