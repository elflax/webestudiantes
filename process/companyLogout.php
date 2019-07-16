<?php
	session_start();
	unset($_SESSION["company_id"]);
	if(!isset($_SESSION['admin_id']))
	session_destroy();
	header('Location: ../companyLogin.php');