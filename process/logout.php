<?php
	session_start();
	unset($_SESSION["admin_id"]);
	if(!isset($_SESSION['company_id']))
	session_destroy();
	header('Location: ../login.php');