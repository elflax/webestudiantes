<?php
	$mysql_id = mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("florida_university") or die(mysql_error());

	$sql = 'SELECT * FROM pick_up_data WHERE shipping_address IS NOT NULL AND pick_up_date IS NULL AND shipping_date IS NULL';	
	$result = mysql_query($sql);
?>

	<?php require "./head.php"; 
	?>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
		<div class="container">
			<div class="text-center">
				<div class="card">
				  	<h5 class="card-header" style="">Pick up form</h5>
				  	<div class="card-body">
				  		<ul class="nav nav-tabs" id="myTab" role="tablist">
						  	<li class="nav-item">
						    	<a class="nav-link active" id="clase1-tab" data-toggle="tab" href="#clase1" role="tab" aria-controls="clase1" aria-selected="true">Clase 1</a>
						  	</li>
						  	<li class="nav-item">
						    	<a class="nav-link" id="clase2-tab" data-toggle="tab" href="#clase2" role="tab" aria-controls="clase2" aria-selected="false">Clase 2</a>
						  	</li>
						  	<li class="nav-item">
						    	<a class="nav-link" id="clase3-tab" data-toggle="tab" href="#clase3" role="tab" aria-controls="clase3" aria-selected="false">Clase 3</a>
						  	</li>
						  	<li class="nav-item">
						    	<a class="nav-link" id="clase4-tab" data-toggle="tab" href="#clase4" role="tab" aria-controls="clase4" aria-selected="true">Clase 4</a>
						  	</li>
						  	<li class="nav-item">
						    	<a class="nav-link" id="clase5-tab" data-toggle="tab" href="#clase5" role="tab" aria-controls="clase5" aria-selected="false">Clase 5</a>
						  	</li>
						</ul>
						<div class="tab-content" id="myTabContent">
						  	<div class="tab-pane fade show active" id="clase1" role="tabpanel" aria-labelledby="home-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</div>
						  	<div class="tab-pane fade" id="clase2" role="tabpanel" aria-labelledby="profile-tab">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</div>
						  	<div class="tab-pane fade" id="clase3" role="tabpanel" aria-labelledby="contact-tab">
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
							<div class="tab-pane fade show" id="clase4" role="tabpanel" aria-labelledby="home-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </div>
						  	<div class="tab-pane fade" id="clase5" role="tabpanel" aria-labelledby="profile-tab">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</div>
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
			$('#table').DataTable();
		});
	</script>
	<?php require "./footer.php"; ?>