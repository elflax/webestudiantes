<?php
	require "../env.php";
	$mysql_id = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die(mysql_error());
	mysql_select_db(DB_NAME) or die(mysql_error());

	function test_input($data) {
	  	$data = trim($data);
	  	$data = stripslashes($data);
	  	$data = htmlspecialchars($data);
	  	return $data;
	}

	$name = mysql_real_escape_string(test_input($_POST['name']));
	$lastname = mysql_real_escape_string(test_input($_POST['lastname']));
	$clase = mysql_real_escape_string(test_input($_POST['clase']));
	$address = mysql_real_escape_string(test_input($_POST['address']));

	$sql="INSERT INTO `pick_up_data` (`id`, `name`, `clase`, `shipping_address`) VALUES (NULL, CONCAT('$name',' ','$lastname'), '$clase', '$address');";
	$result = mysql_query($sql);
	$error = 1;
	if($result != 1){
		$error = mysql_error();
		mysql_close();
		header('Location: ../index.php?result='.$error);	
	}
	mysql_close();
	header('Location: ../index.php?result='.$error);