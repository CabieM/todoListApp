<?php
	include("obj/dbCon.php");

	$sql = "SELECT * FROM todotasks";

	$rec = $conn->query( $sql );

	$num  = $rec->num_rows;

	echo $num;

	?>


<!DOCTYPE html>
<html>
<head>
	<title> TO DO LIST </title>
	<link rel="stylesheet" href="css/normalize.css" />
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/custom.css" />
</head>
<body>

	<div class="container">
		<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<form id="todoForm" action="processData.php" method="post">
			<input type="text" class="form-control" placeholder="Text input" id="taskInput" name="taskInput">

			<button type="button" class="btn btn-success" id="actionBtn">Success</button>
			</form>
		</div> <!--closes col-md-10-->
		
		<div class="col-md-1"></div>

		<div class="row">
			<div class="col-md-12">
				<ul id="taskList">
					<?php
						for($i= 0; $i < $num; $i++) {
							$row = mysqli_fetch_array($rec);
							echo "<li>".$row['taskName']."</li>";

						}
					?>		
				</ul>

			</div>
			

		</div>

		</div><!--closes row-->
	</div> <!--closes container-->

	<script src="js/jquery.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/validator.js"></script>
</body>
</html>