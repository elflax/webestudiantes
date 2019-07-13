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
	$address = mysql_real_escape_string(test_input($_POST['address']));

	$sql="INSERT INTO `student` (`id`, `name`, `lastname`, `clase`, `address`) VALUES (NULL, '$name', '$lastname', '$clase', '$address');";
	$result = mysql_query($sql);

	header('Location: ../index.php?result='.$result);	