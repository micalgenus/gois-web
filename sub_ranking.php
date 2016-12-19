<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>GOIS Test Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/mycss.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style>
		/* On small screens, set height to 'auto' for sidenav and grid */
		@media screen and (min-width: 1024px) {
			.container-fluid {
				margin-left:20%;
				margin-right:20%;
			}
		}

		.account .form-control{
			margin-top:5px;
			margin-bottom:5px;
		}
	</style>
</head>
<body>
	<?php include 'header.php'; ?>
	<div class="container ">
		<div class="panel panel-default" style="margin-top:15px;">
		<!-- Default panel contents -->
			<div class="panel-heading" >Ranking</div>
			<table class="table text-center">
			<colgroup>
				<col width="10%"></col>
				<col></col>
				<col width="20%"></col>
				<col width="20%"></col>
				<col width="20%"></col>
			</colgroup>
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th class="text-center">User Name</th>
						<th class="text-center">Score</th>
						<th class="text-center">Pre-Score</th>
						<th class="text-center">Steps</th>
					<tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Yoon</td>
						<td>99</td>
						<td></td>
						<td><span class="glyphicon glyphicon-chevron-up"></span> 2</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Park</td>
						<td>90</td>
						<td></td>
						<td><span class="glyphicon glyphicon-minus"></span></td>
					</tr>
					<tr>
						<td>3</td>
						<td>Han</td>
						<td>1</td>
						<td></td>
						<td><span class="glyphicon glyphicon-chevron-down"></span> 2</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>