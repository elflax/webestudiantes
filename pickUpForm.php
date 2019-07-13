	<?php require "./head.php"; 
	?>
		<link rel="stylesheet" type="text/css" href="./lib/flatpickr/css/flatpickr.min.css">
		<link rel="stylesheet" type="text/css" href="./lib/daterangepicker/daterangepicker.css">
		<div class="container">
			<div class="text-center">
				<div class="card">
				  	<h5 class="card-header" style="">Pick up form</h5>
				  	<div class="card-body">
				  		<?php if(isset($_GET['result'])): ?>
					  		<?php if($_GET['result'] == '1'): ?>
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

					    <form action="./process/savePickUpForm.php" method="post">
					    	<div class="row">
					    		<h5 class="col-lg-12 col-sm-12 text-left">Full Name:</h5>
					    		<div class="col-lg-6 col-sm-12 input-group mb-3">
					    			<div class="input-group-prepend">
									    <span class="input-group-text" id="basic-addon3">
									    	<i class="fa fa-user"></i>
									    </span>
									</div>
					    			<input type="text" class="form-control" name="name" pattern="[A-Za-z ]{1-60}" id="name" maxlength="60" placeholder="Name" required>
					    		</div>
					    		<div class="col-lg-6 col-sm-12 input-group mb-3">
					    			<div class="input-group-prepend">
									    <span class="input-group-text fa fa-user">
									    </span>
									</div>
					    			<input type="text" class="form-control"  name="lastname" id="lastname" pattern="[A-Za-z ]{1-60}" maxlength="60" placeholder="Lastname" required>
					    		</div>
					    	</div>
					    	<br>
					    	<div class="row">
					    		<h5 class="col-lg-12 col-sm-12 text-left">Clases:</h5>
					    		<div class="col-lg-12 col-sm-12 input-group mb-3">
					    			<div class="input-group-prepend">
									    <span class="input-group-text fa fa-pencil">
									    </span>
									</div>
					    			<select class="form-control"  name="clase" id="clase" required>
					    				<option value="clase 1">clase 1</option>	
					    				<option value="clase 2">clase 2</option>	
					    				<option value="clase 3">clase 3</option>	
					    				<option value="clase 4">clase 4</option>	
					    				<option value="clase 5">clase 5</option>	
					    			</select>
					    		</div>
					    	</div>
					    	<div class="row">
					    		<h5 class="col-lg-12 col-sm-12 text-left">Pick up day: </h5>
					    		<div class="col-lg-12 col-sm-12 input-group mb-3">
					    			<div class="input-group-prepend">
									    <span class="input-group-text fa fa-search">
									    </span>
									</div>
					    			<input id="date_register" name="date_register" type="date" value="<?php echo date( "m/d/Y", strtotime( "now" ) ); ?>" class="form-control">
					    		</div>
					    	</div>
					    	<br>
						    <button type="submit" class="btn btn-primary">Register</button>
					    </form>
				  	</div>
				</div>
			</div>
			<br>
		</div>

	<?php require "./scripts.php"; ?>
	<script type="text/javascript" src="./lib/flatpickr/js/flatpickr.js"></script>
	<script type="text/javascript" src="./lib/daterangepicker/daterangepicker.js"></script>
	<script type="text/javascript" src="./lib/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="./lib/daterangepicker/package.js"></script>
	<script type="text/javascript">
		$(document).ready(() => {
			$('#pickupdate').daterangepicker({
				singleDatePicker: true,
				showDropdowns: true
			});
		});
	</script>
	<?php require "./footer.php"; ?>