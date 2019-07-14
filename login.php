	<?php 
		session_start();
		if(isset($_SESSION['admin_id'])){
			header('Location: ./MCSAdmin.php');
		}
		require "./head.php";
	?>
		<div class="container">
			<div class="text-center">
				<div class="card">
				  	<h5 class="card-header" style="">Login</h5>
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

					    <form action="./process/signin.php" method="post">
					    	<div class="row">
					    		<h5 class="col-lg-12 col-sm-12 text-left">Email user:</h5>
					    		<div class="col-lg-12 col-sm-12 input-group mb-3">
					    			<div class="input-group-prepend">
									    <span class="input-group-text" id="basic-addon3">
									    	@
									    </span>
									</div>
					    			<input type="email" class="form-control" name="email" pattern="[A-Za-z ]{1-60}" id="email" maxlength="60" placeholder="Email" required>
					    		</div>
					    	</div>
					    	<br>
					    	<div class="row">
					    		<h5 class="col-lg-12 col-sm-12 text-left">Password: </h5>
					    		<div class="col-lg-12 col-sm-12 input-group mb-3">
					    			<div class="input-group-prepend">
									    <span class="input-group-text" id="basic-addon3">
									    	<i class="fa fa-key fa-fw" aria-hidden="true"></i>
									    </span>
									</div>
					    			<input type="password" class="form-control" name="password" pattern="[A-Za-z ]{1-60}" id="password" maxlength="60" placeholder="Password" required>
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
	<?php require "./footer.php"; ?>