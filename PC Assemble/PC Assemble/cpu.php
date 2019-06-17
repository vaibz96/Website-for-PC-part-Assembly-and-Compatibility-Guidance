<!DOCTYPE html>
<html>
<head>
<title>CPU</title>
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="css/dataTables.material.min.css">
</head>
<body>

	
	<div>
	<form method="POST" id="form1" name="form1">
	<table border="1" class="table">
		<thead>
			<th></th>
			<th>cpu_id</th>			
			<th>CPU</th>
			<th>Codename</th>
			<th>Cores</th>
			<th>Socket_cp</th>
			<th>Process</th>
			<th>Clock</th>
			<th>Multi</th>
			<th>Cache_L</th>
			<th>TDP</th>
			<th>Released</th>
			<th>quantity_cp</th>
			<th>Price_cp</th>
			
		</thead>
		<tbody>
			
			<?php
			//include('config.php');
			include('session.php');
			
				$query_cp=mysqli_query($db,"select * from `cpu`");
				while($row_cp=mysqli_fetch_object($query_cp)){
					?>
					<tr>
						<td><a href="cart.php?cpu_id=<?php echo $row_cp->cpu_id; ?>">Add to Cart</a></td>
						<td><?php echo $row_cp->cpu_id; ?></td>
						<td><?php echo $row_cp->CPU; ?></td>
						<td><?php echo $row_cp->Codename; ?></td>
						<td><?php echo $row_cp->Cores; ?></td>
						<td><?php echo $row_cp->Socket_cp; ?></td>
						<td><?php echo $row_cp->Process; ?></td>
						<td><?php echo $row_cp->Clock; ?></td>
						<td><?php echo $row_cp->Multi; ?></td>
						<td><?php echo $row_cp->Cache_L; ?></td>
						<td><?php echo $row_cp->TDP; ?></td>
						<td><?php echo $row_cp->Released; ?></td>
						<td><?php echo $row_cp->quantity_cp; ?></td>
						<td><?php echo $row_cp->price_cp; ?></td>
						
					</tr>
					<?php
				}
			?>
			
		</tbody>
	</table>
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.dataTables.js"></script>
	<script src="js/dataTables.bootstrap.js"></script>
	<script>
		$(".table").DataTable();
		</script>
		
		



	<br>
	
	</form>
	</div>
	<div>
		
		<h1>Welcome <?php echo $login_session; ?></h1>
		
	</div>
</body>
</html>