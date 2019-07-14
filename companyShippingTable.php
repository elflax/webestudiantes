<?php
	$mysql_id = mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("florida_university") or die(mysql_error());

	$sql = 'SELECT * FROM pick_up_data WHERE shipping_address IS NOT NULL AND pick_up_date IS NULL AND shipping_date IS NULL';	
	$result = mysql_query($sql);
	mysql_close();
?>

	<?php require "./head.php"; 
	?>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
		<div class="container">
			<div class="text-center">
				<div class="card">
				  	<h5 class="card-header" style="">Pick up form</h5>
				  	<div class="card-body">
				  		<?php if(isset($_GET['result'])): ?>
					  		<?php if($_GET['result']== 1): ?>
					  		<div class="alert alert-success alert-dismissible fade show" role="alert">
							  	<strong>Success: </strong>We have successfully processed your registration
							  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							    	<span aria-hidden="true">&times;</span>
							  	</button>
							</div>
							<?php else: ?>
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
							  	<strong>Dissaster: </strong> There has been a problem processing your registration
							  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							    	<span aria-hidden="true">&times;</span>
							  	</button>
							</div>	
							<?php endif ?>
						<?php endif ?>
				  		<table class="table" id="table">
				  			<thead>
						        <tr>
						            <th>Name</th>
						            <th>Shipping address</th>
						            <th>Action</th>
						        </tr>
						    </thead>
						    <tbody>
						    	<?php while($row = mysql_fetch_assoc($result)) {?>
						        <tr>
						            <td><?php echo $row['name']; ?></td>
						            <td><?php echo $row['shipping_address']; ?></td>
						            <td>
						            	<a class="btn btn-primary" href="./process/generateShippingDate.php?id=<?php echo $row['id']; ?>">Generate Shipping Date</a>
						            </td>
						        </tr>
						     	<?php } ?>
						    </tbody>
				  		</table>
				  	</div>
				</div>
			</div>
			<br>
		</div>

	<?php require "./scripts.php"; ?>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
	<script type="text/javascript">
		$(document).ready(() => {
			$('#table').DataTable();
		});
	</script>
	<?php require "./footer.php"; ?>