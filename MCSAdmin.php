	<?php 
		session_start();
		if(!isset($_SESSION['admin_id'])){
			header('Location: ./login.php');
		}
		require "./head.php"; 
		$mysql_id = mysql_connect("localhost","root","") or die(mysql_error());
		mysql_select_db("florida_university") or die(mysql_error());

		$sql = 'SELECT * FROM pick_up_data WHERE clase="'.CLASE_1.'"';
		$clase1 = mysql_query($sql);

		$sql = 'SELECT * FROM pick_up_data WHERE clase="'.CLASE_2.'"';
		$clase2 = mysql_query($sql);

		$sql = 'SELECT * FROM pick_up_data WHERE clase="'.CLASE_3.'"';
		$clase3 = mysql_query($sql);

		$sql = 'SELECT * FROM pick_up_data WHERE clase="'.CLASE_4.'"';
		$clase4 = mysql_query($sql);

		$sql = 'SELECT * FROM pick_up_data WHERE clase="'.CLASE_5.'"';
		$clase5 = mysql_query($sql);
		mysql_close();
	?>	
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
		<div class="container">
			<div class="text-center">
				<div class="card">
				  	<h5 class="card-header" style="">MCS Admin 
				  		<a href="./process/logout.php" style="color: white;" title="Log Out" class="btn btn-success btn-lg"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
				  	</h5>
				  	<div class="card-body">
				  		<ul class="nav nav-tabs" id="myTab" role="tablist">
						  	<li class="nav-item">
						    	<a class="nav-link active" id="clase1-tab" data-toggle="tab" href="#clase1" role="tab" aria-controls="clase1" aria-selected="true"><?php echo CLASE_1; ?></a>
						  	</li>
						  	<li class="nav-item">
						    	<a class="nav-link" id="clase2-tab" data-toggle="tab" href="#clase2" role="tab" aria-controls="clase2" aria-selected="false"><?php echo CLASE_2; ?></a>
						  	</li>
						  	<li class="nav-item">
						    	<a class="nav-link" id="clase3-tab" data-toggle="tab" href="#clase3" role="tab" aria-controls="clase3" aria-selected="false"><?php echo CLASE_3; ?></a>
						  	</li>
						  	<li class="nav-item">
						    	<a class="nav-link" id="clase4-tab" data-toggle="tab" href="#clase4" role="tab" aria-controls="clase4" aria-selected="true"><?php echo CLASE_4; ?></a>
						  	</li>
						  	<li class="nav-item">
						    	<a class="nav-link" id="clase5-tab" data-toggle="tab" href="#clase5" role="tab" aria-controls="clase5" aria-selected="false"><?php echo CLASE_5; ?></a>
						  	</li>
						</ul>
						<div class="tab-content" id="myTabContent">
						  	<div class="tab-pane fade show active" id="clase1" role="tabpanel" aria-labelledby="home-tab">
						  		<br>
						  		<table class="table" id="clase1-table">
						  			<thead>
						  				<tr>
						  					<th>Name</th>
						  					<th>Shipping Address</th>
						  					<th>Shipping Date</th>
						  					<th>Pick Up Date</th>
						  				</tr>
						  			</thead>
						  			<tbody>
						  				<?php while($row = mysql_fetch_assoc($clase1)) { ?>
					  					<tr>
					  						<th><?php echo $row['name']; ?></th>
					  						<th><?php echo (!is_null($row['shipping_address']))? $row['shipping_address']:'-'; ?></th>
					  						<th><?php echo (!is_null($row['shipping_date']))? $row['shipping_date']:'-'; ?></th>
					  						<th><?php echo (!is_null($row['pick_up_date']))? $row['pick_up_date']:'-'; ?></th>
					  					</tr>
						  				<?php } ?>
						  			</tbody>
						  		</table>
						  	</div>
						  	<div class="tab-pane fade" id="clase2" role="tabpanel" aria-labelledby="profile-tab">
						  		<br>
						  		<table class="table" id="clase2-table">
						  			<thead>
						  				<tr>
						  					<th>Name</th>
						  					<th>Shipping Address</th>
						  					<th>Shipping Date</th>
						  					<th>Pick Up Date</th>
						  				</tr>
						  			</thead>
						  			<tbody>
						  				<?php while($row = mysql_fetch_assoc($clase2)) { ?>
					  					<tr>
					  						<th><?php echo $row['name']; ?></th>
					  						<th><?php echo (!is_null($row['shipping_address']))? $row['shipping_address']:'-'; ?></th>
					  						<th><?php echo (!is_null($row['shipping_date']))? $row['shipping_date']:'-'; ?></th>
					  						<th><?php echo (!is_null($row['pick_up_date']))? $row['pick_up_date']:'-'; ?></th>
					  					</tr>
						  				<?php } ?>
						  			</tbody>
						  		</table>
						  	</div>
						  	<div class="tab-pane fade" id="clase3" role="tabpanel" aria-labelledby="contact-tab">
								<br>
								<table class="table" id="clase3-table">
						  			<thead>
						  				<tr>
						  					<th>Name</th>
						  					<th>Shipping Address</th>
						  					<th>Shipping Date</th>
						  					<th>Pick Up Date</th>
						  				</tr>
						  			</thead>
						  			<tbody>
						  				<?php while($row = mysql_fetch_assoc($clase3)) { ?>
					  					<tr>
					  						<th><?php echo $row['name']; ?></th>
					  						<th><?php echo (!is_null($row['shipping_address']))? $row['shipping_address']:'-'; ?></th>
					  						<th><?php echo (!is_null($row['shipping_date']))? $row['shipping_date']:'-'; ?></th>
					  						<th><?php echo (!is_null($row['pick_up_date']))? $row['pick_up_date']:'-'; ?></th>
					  					</tr>
						  				<?php } ?>
						  			</tbody>
						  		</table>
							</div>
							<div class="tab-pane fade show" id="clase4" role="tabpanel" aria-labelledby="home-tab">
								<br>
								<table class="table" id="clase4-table">
						  			<thead>
						  				<tr>
						  					<th>Name</th>
						  					<th>Shipping Address</th>
						  					<th>Shipping Date</th>
						  					<th>Pick Up Date</th>
						  				</tr>
						  			</thead>
						  			<tbody>
						  				<?php while($row = mysql_fetch_assoc($clase4)) { ?>
					  					<tr>
					  						<th><?php echo $row['name']; ?></th>
					  						<th><?php echo (!is_null($row['shipping_address']))? $row['shipping_address']:'-'; ?></th>
					  						<th><?php echo (!is_null($row['shipping_date']))? $row['shipping_date']:'-'; ?></th>
					  						<th><?php echo (!is_null($row['pick_up_date']))? $row['pick_up_date']:'-'; ?></th>
					  					</tr>
						  				<?php } ?>
						  			</tbody>
						  		</table>
							</div>
						  	<div class="tab-pane fade" id="clase5" role="tabpanel" aria-labelledby="profile-tab">
						  		<br>
						  		<table class="table" id="clase5-table">
						  			<thead>
						  				<tr>
						  					<th>Name</th>
						  					<th>Shipping Address</th>
						  					<th>Shipping Date</th>
						  					<th>Pick Up Date</th>
						  				</tr>
						  			</thead>
						  			<tbody>
						  				<?php while($row = mysql_fetch_assoc($clase5)) { ?>
					  					<tr>
					  						<th><?php echo $row['name']; ?></th>
					  						<th><?php echo (!is_null($row['shipping_address']))? $row['shipping_address']:'-'; ?></th>
					  						<th><?php echo (!is_null($row['shipping_date']))? $row['shipping_date']:'-'; ?></th>
					  						<th><?php echo (!is_null($row['pick_up_date']))? $row['pick_up_date']:'-'; ?></th>
					  					</tr>
						  				<?php } ?>
						  			</tbody>
						  		</table>
						  	</div>
						</div>
				  	</div>
				</div>
			</div>
			<br>
		</div>

	<?php require "./scripts.php"; ?>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
	<script type="text/javascript">
		$(document).ready(() => {
			$('.table').DataTable();
		});
	</script>
	<?php require "./footer.php"; ?>