<?php
	$mysql_id = mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("florida_university") or die(mysql_error());

	function test_input($data) {
	  	$data = trim($data);
	  	$data = stripslashes($data);
	  	$data = htmlspecialchars($data);
	  	return $data;
	}

	$name = mysql_real_escape_string(test_input($_POST['name']));
	$lastname = mysql_real_escape_string(test_input($_POST['lastname']));
	$clase = mysql_real_escape_string(test_input($_POST['clase']));
	$date_register = mysql_real_escape_string(test_input($_POST['date_register']));

	$sql="INSERT INTO `pick_up_data` (`id`, `name`, `clase`, `pick_up_date`) VALUES (NULL, CONCAT('$name',' ','$lastname'), '$clase', '$date_register');";
	// die($sql);
	$result = mysql_query($sql);

	header('Location: ../pickUpForm.php?result='.$result);	