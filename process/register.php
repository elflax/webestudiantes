<?php
	require "../env.php";
	session_start();
	$mysql_id = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die(mysql_error());
	mysql_select_db(DB_NAME) or die(mysql_error());

	function test_input($data) {
	  	$data = trim($data);
	  	$data = stripslashes($data);
	  	$data = htmlspecialchars($data);
	  	return $data;
	}
	$email = mysql_real_escape_string(test_input($_POST['email']));
	$password = mysql_real_escape_string(test_input($_POST['password']));
	$type = mysql_real_escape_string(test_input($_POST['type']));

	$sql = 'INSERT INTO `users` (`email`, `password`, `type`) VALUES ("'.$email.'", PASSWORD("'.$password.'"), '.$type.');';
	// die($sql);
	$result = mysql_query($sql);
	// die($_SESSION['']);
	if($result != 1){
		$error = mysql_error();
		mysql_close();
		header('Location: ../register.php?result='.$error);	
	}
	mysql_close();
	header('Location: ../register.php?result='.$result);