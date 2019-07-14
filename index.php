	<?php require "./head.php"; ?>
		<div class="container">
			<div class="text-center">
				<div class="card">
				  	<h5 class="card-header" style="">Shipping Form</h5>
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
								<?php if(is_numeric($_GET['result'])): ?>
								<div class="alert alert-danger alert-dismissible fade show" role="alert">
								  	<strong>Dissaster: </strong> There has been a problem processing your registration
								  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								    	<span aria-hidden="true">&times;</span>
								  	</button>
								</div>
								<?php else: ?>
								<div class="alert alert-danger alert-dismissible fade show" role="alert">
								  	<strong>Error: </strong> <?php echo urldecode($_GET['result']); ?>
								  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								    	<span aria-hidden="true">&times;</span>
								  	</button>
								</div>	
								<?php endif ?>
							<?php endif ?>
						<?php endif ?>

					    <form action="./process/saveShippingForm.php" method="post">
					    	<div class="row">
					    		<h5 class="col-lg-12 col-sm-12 text-left">Full Name:</h5>
					    		<div class="col-lg-6 col-sm-12 input-group mb-3">
					    			<div class="input-group-prepend">
									    <span class="input-group-text" id="basic-addon3">
									    	<i class="fa fa-home fa-fw" aria-hidden="true"></i>
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
					    				<option value="<?php echo CLASE_1; ?>"><?php echo CLASE_1; ?></option>	
					    				<option value="<?php echo CLASE_2; ?>"><?php echo CLASE_2; ?></option>	
					    				<option value="<?php echo CLASE_3; ?>"><?php echo CLASE_3; ?></option>	
					    				<option value="<?php echo CLASE_4; ?>"><?php echo CLASE_4; ?></option>	
					    				<option value="<?php echo CLASE_5; ?>"><?php echo CLASE_5; ?></option>	
					    			</select>
					    		</div>
					    	</div>
					    	<div class="row">
					    		<h5 class="col-lg-12 col-sm-12 text-left">Address: <button type="button" class="btn btn-xs btn-primary btn-success btn-rounded" data-toggle="tooltip" data-placement="top" title="Example Format Correct: 2425 SW 27th DR, Gainesville, FL, 32605, USA | Plaza De Bolívar, Cartago, Valle del Cauca, Colombia"><b>?</b></button></h5>
					    		<div class="col-lg-12 col-sm-12 input-group mb-3">
					    			<div class="input-group-prepend">
									    <span class="input-group-text fa fa-map-marker">
									    </span>
									</div>
					    			<input type="text" class="form-control" name="address" id="address" placeholder="Address" autocomplete="off" required>
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
		<script type="text/javascript">
			function initAutocomplete() {
		        autocomplete = new google.maps.places.Autocomplete(
				document.getElementById('address'), {types: ['geocode']});
				// Avoid paying for data that you don't need by restricting the set of
				// place fields that are returned to just the address components.
				autocomplete.setFields(['address_component']);
		    }
		</script>
		<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo GOOGLE_API_KEY; ?>&libraries=places&callback=initAutocomplete"
         async defer></script>

	<?php require "./scripts.php"; ?>
	<?php require "./footer.php"; ?>