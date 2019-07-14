<?php
	session_start();
	$mysql_id = mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("florida_university") or die(mysql_error());

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
	    $_SESSION['admin_id'] = $row['id'];
	}	 

	mysql_close();
	header('Location: ../MCSAdmin.php');