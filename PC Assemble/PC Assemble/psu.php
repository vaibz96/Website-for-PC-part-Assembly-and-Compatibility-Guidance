<!DOCTYPE html>
<html>
<head>
<title>PSU</title>
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="css/dataTables.material.min.css">

</head>
<body>

	
	<div>
	<form method="POST" id="form1" name="form1">
	<table border="1" class="table">
		<thead>
			<th></th>
			<th>psu_id</th>
			<th>PSU</th>
			<th>Model_p</th>
			<th>Type_p</th>
			<th>Modular</th>
			<th>Efficiency</th>
			<th>Wattage</th>
			<th>PCI_Express_Connectors</th>
			<th>quantity_p</th>
			<th>price_p</th>
						
		</thead>
		<tbody>
			
			<?php
			//include('config.php');
			include('session.php');
			
				$query_p=mysqli_query($db,"select * from `psu`");
				while($row_p=mysqli_fetch_object($query_p)){
					?>
					<tr>
						<td><a href="cart.php?psu_id=<?php echo $row_p->psu_id; ?>">Add to Cart</a></td>
						<td><?php echo $row_p->psu_id; ?></td>
						<td><?php echo $row_p->PSU; ?></td>
						<td><?php echo $row_p->Model_p; ?></td>
						<td><?php echo $row_p->Type_p; ?></td>
						<td><?php echo $row_p->Modular; ?></td>
						<td><?php echo $row_p->Efficiency; ?></td>
						<td><?php echo $row_p->Wattage; ?></td>
						<td><?php echo $row_p->PCI_Express_Connectors; ?></td>
						<td><?php echo $row_p->quantity_p; ?></td>
						<td><?php echo $row_p->price_p; ?></td>
						
						
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