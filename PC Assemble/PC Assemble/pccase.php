<!DOCTYPE html>
<html>
<head>
<title>PC Case</title>
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="css/dataTables.material.min.css">

</head>
<body>

	
	<div>
	<form method="POST" id="form1" name="form1">
	<table border="1" class="table">
		<thead>
			<th></th>
			<th>pc_case_id</th>
			<th>PC_Case</th>
			<th>Model_c</th>
			<th>Color</th>
			<th>Type_c</th>
			<th>Power_supply</th>
			<th>ssd_Bays</th>
			<th>hdd_Bays</th>
			<th>Motherboard_Size</th>
			<th>quantity_c</th>
			<th>price_c</th>
						
		</thead>
		<tbody>
			
			<?php
			//include('config.php');
			include('session.php');
			
				$query_c=mysqli_query($db,"select * from `pc_case`");
				while($row_c=mysqli_fetch_object($query_c)){
					?>
					<tr>
						<td><a href="cart.php?pc_case_id=<?php echo $row_c->pc_case_id; ?>">Add to Cart</a></td>
						<td><?php echo $row_c->pc_case_id; ?></td>
						<td><?php echo $row_c->PC_case; ?></td>
						<td><?php echo $row_c->Model_c; ?></td>
						<td><?php echo $row_c->Color; ?></td>
						<td><?php echo $row_c->Type_c; ?></td>
						<td><?php echo $row_c->Power_supply; ?></td>
						<td><?php echo $row_c->ssd_Bays; ?></td>
						<td><?php echo $row_c->hdd_Bays; ?></td>
						<td><?php echo $row_c->Motherboard_Size; ?></td>
						<td><?php echo $row_c->quantity_c; ?></td>
						<td><?php echo $row_c->price_c; ?></td>
						
						
						
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