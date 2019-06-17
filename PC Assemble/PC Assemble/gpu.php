<!DOCTYPE html>
<html>
<head>
<title>GPU</title>
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="css/dataTables.material.min.css">
</head>
<body>

	
	<div>
	<form method="POST" id="form1" name="form1">
	<table border="1" class="table">
		<thead>
			<th></th>
			<th>gpu_id</th>
			<th>GPU</th>
			<th>Bus</th>
			<th>Memory</th>
			<th>GPU_clock</th>
			<th>Memory_Clock</th>
			<th>Shaders</th>
			<th>Released_g</th>
			<th>quantity_g</th>
			<th>Price_g</th>
					
						
		</thead>
		<tbody>
			
			<?php
			//include('config.php');
			include('session.php');
			
				$query_g=mysqli_query($db,"select * from `gpu`");
				while($row_g=mysqli_fetch_object($query_g)){
					?>
					<tr>
						<td><a href="cart.php?gpu_id=<?php echo $row_g->gpu_id; ?>">Add to Cart</a></td>
						<td><?php echo $row_g->gpu_id; ?></td>
						<td><?php echo $row_g->GPU; ?></td>
						<td><?php echo $row_g->Bus; ?></td>
						<td><?php echo $row_g->Memory; ?></td>
						<td><?php echo $row_g->GPU_clock; ?></td>
						<td><?php echo $row_g->Memory_clock; ?></td>
						<td><?php echo $row_g->Shaders; ?></td>
						<td><?php echo $row_g->Released_g; ?></td>
						<td><?php echo $row_g->quantity_g; ?></td>
						<td><?php echo $row_g->price_g; ?></td>
											
						
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