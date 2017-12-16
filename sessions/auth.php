<?php
	session_start();
	
	if(!isset($_SESSION["authorized"]))
		header("Location: ./login.php");
?>