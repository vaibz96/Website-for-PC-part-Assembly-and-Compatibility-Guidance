<!DOCTYPE html>
<html>
<head>
<title>Hard Disk</title>
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="css/dataTables.material.min.css">
</head>
<body>

	
	<div>
	<form method="POST" id="form1" name="form1">
	<table border="1" class="table table-responsive">
		<thead>
			<th></th>
			<th>hdd_id</th>
			<th>HDD</th>
			<th>Capacity</th>
			<th>Type_h</th>
			<th>quantity_h</th>
			<th>price_h</th>
								
		</thead>
		<tbody>
			
			<?php
			//include('config.php');
			include('session.php');
			
				$query_h=mysqli_query($db,"select * from `hdd`");
				while($row_h=mysqli_fetch_object($query_h)){
					?>
					<tr>
						<td><a href="cart.php?hdd_id=<?php echo $row_h->hdd_id; ?>">Add to Cart</a></td>
						<td><?php echo $row_h->hdd_id; ?></td>
						<td><?php echo $row_h->HDD; ?></td>
						<td><?php echo $row_h->Capacity; ?></td>
						<td><?php echo $row_h->Type_h; ?></td>
						<td><?php echo $row_h->quantity_h; ?></td>						
						<td><?php echo $row_h->price_h; ?></td>
						
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