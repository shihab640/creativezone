<?php
	session_unset();
	require_once  'controller/bookingController.php';		
    $controller = new bookingController();	
    $controller->mvcHandler();
?>