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

	$id = mysql_real_escape_string(test_input($_GET['id']));
	if(!is_numeric($id)){
		mysql_close();
		header('Location: ../companyShippingTable.php?result=3');	
	}else{
		$date = date( "Y-m-d", strtotime( "now" ) );
		$sql = "UPDATE pick_up_data SET shipping_date='$date' WHERE id='$id'";	
		$result = mysql_query($sql);
		mysql_close();
		header('Location: ../companyShippingTable.php?result='.$result);	
	}