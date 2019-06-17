<!DOCTYPE html>
<html>
<head>
<title>RAM</title>
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="css/dataTables.material.min.css">

</head>
<body>

	
	<div>
	<form method="POST" id="form1" name="form1">
	<table border="1" class="table">
		<thead>
			<th></th>
			<th>ram_id</th>
			<th>RAM</th>
			<th>Type</th>
			<th>Speed</th>
			<th>Module</th>
			<th>Voltage</th>
			<th>Heat_Sink</th>
			<th>ECC</th>
			<th>quantity_r</th>
			<th>price_r</th>
			
			
		</thead>
		<tbody>
			
			<?php
			//include('config.php');
			include('session.php');
			
				$query_r=mysqli_query($db,"select * from `ram`");
				while($row_r=mysqli_fetch_object($query_r)){
					?>
					<tr>
						<td><a href="cart.php?ram_id=<?php echo $row_r->ram_id; ?>">Add to Cart</a></td>
						<td><?php echo $row_r->ram_id; ?></td>
						<td><?php echo $row_r->RAM; ?></td>
						<td><?php echo $row_r->Type; ?></td>
						<td><?php echo $row_r->Speed; ?></td>
						<td><?php echo $row_r->Module; ?></td>
						<td><?php echo $row_r->Voltage; ?></td>
						<td><?php echo $row_r->Heat_Sink; ?></td>
						<td><?php echo $row_r->ECC; ?></td>
						<td><?php echo $row_r->quantity_r; ?></td>
						<td><?php echo $row_r->price_r; ?></td>										
						
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