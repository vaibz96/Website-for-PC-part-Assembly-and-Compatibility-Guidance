<!DOCTYPE html>
<html>
<head>
<title>Motherboard</title>

<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="css/dataTables.material.min.css">

</head>
<body>

	
	<div>
	<form method="POST" id="form1" name="form1">
	<table border="1" class="table">
		<thead>
			<th></th>
			<th>motherboard_id</th>
			<th>Motherboard</th>
			<th>Form_Factor</th>
			<th>Socket_m</th>
			<th>Chipset</th>
			<th>RAM_slots</th>
			<th>RAM_type</th>
			<th>Max_RAM</th>
			<th>RAID</th>
			<th>CrossFire</th>
			<th>SLI</th>
			<th>quantity_m</th>
			<th>price_m</th>
			
		</thead>
		<tbody>
			
			<?php
			//include('config.php');
			include('session.php');
			
				$query_m=mysqli_query($db,"select * from `motherboard`");
				while($row_m=mysqli_fetch_object($query_m)){
					?>
					<tr>
						<td><a href="cart.php?motherboard_id=<?php echo $row_m->motherboard_id; ?>">Add to Cart</a></td>
						<td><?php echo $row_m->motherboard_id; ?></td>
						<td><?php echo $row_m->Motherboard; ?></td>
						<td><?php echo $row_m->Form_Factor; ?></td>
						<td><?php echo $row_m->Socket_m; ?></td>
						<td><?php echo $row_m->Chipset; ?></td>
						<td><?php echo $row_m->RAM_slots; ?></td>
						<td><?php echo $row_m->RAM_type; ?></td>
						<td><?php echo $row_m->Max_RAM; ?></td>
						<td><?php echo $row_m->RAID; ?></td>
						<td><?php echo $row_m->CrossFire; ?></td>
						<td><?php echo $row_m->SLI; ?></td>
						<td><?php echo $row_m->quantity_m; ?></td>
						<td><?php echo $row_m->price_m; ?></td>
						
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
	
		
		<h1>Welcome <?php echo $login_session; ?></h1>
		
</body>
</html>