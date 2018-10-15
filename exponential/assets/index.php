<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Database Driven Charts Demo | Daniel Drave</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/main/bootstrap.css" />
	<link rel="stylesheet" href="../assets/css/main/datatable.css" />
	<link rel="stylesheet" href="../assets/css/main/daterangepicker.css">
	<script src="../assets/js/main/jquery-2.2.0.min.js"></script>
	<script src="../assets/js/main/bootstrap.js"></script>
</head>
<body>

<div id="wrapper">
	<div id="credits">
		<div class="row">
			<div class="col-sm-6">
				<h1>Demo ChartJS - Live Demo</h1>
			</div>

			<div class="col-sm-6 links">
				
			</div>
		</div>
	</div>

	<div id="forms">
		<div class="row">
			<div class="col-sm-12">
				<form method="post" action="../chart/showchart">
					<label>Select first year</label>
					<!-- <select class="form-control" name="yearOne"> -->.
						<?php

							foreach ($data as $th) {
								echo $th['Fecha'];
							}
						?>
					<!-- </select> -->
					<label>Select second year</label>
					<!-- <select class="form-control" name="yearTwo"> -->
						<?php

							foreach ($data as $th) {
								echo $th['Fecha'];
							}
						?>
					<!-- </select> -->
					<input class="btn btn-success" type="submit" value="Compare" />
				</form>
			</div>
		</div>
	</div>

</div> <!--END OF WRAPPER-->

</body>
</html>
