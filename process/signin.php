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

	$sql = 'SELECT id, password FROM users WHERE email="admin@admin.com" AND password=PASSWORD("'.$password.'") LIMIT 1';
	// die($sql);
	$result = mysql_query($sql);
	while($row = mysql_fetch_assoc($result)){
		if(isset($_POST['company'])){
	    	$_SESSION['company_id'] = $row['id'];
		}else{
	    	$_SESSION['admin_id'] = $row['id'];
		}
	}	 
	// die($_SESSION['']);

	mysql_close();
	if(isset($_POST['company'])){
		header('Location: ../companyShippingTable.php');
	}else{
		header('Location: ../MCSAdmin.php');
	}