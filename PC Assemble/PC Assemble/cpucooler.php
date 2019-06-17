<!DOCTYPE html>
<html>
<head>
<title>CPU Cooler</title>
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="css/dataTables.material.min.css">
</head>
<body>

	
	<div>
	<form method="POST" id="form1" name="form1">
	<table border="1" class="table">
		<thead>
			<th></th>
			<th>cpu_cooler_id</th>
			<th>CPU_Cooler</th>
			<th>Liquid_Cooled</th>
			<th>Bearing_Type</th>
			<th>Noise_Level</th>
			<th>Fan_RPM</th>
		  	<th>Quantity</th>
		  	<th>Price</th>
						
		</thead>
		<tbody>
			
			<?php
			//include('config.php');href-"link.php?id-<?php echo $row['cpu_cooler_id'];
			include('session.php');
			
				$query=mysqli_query($db,"select * from `cpu_cooler`");
				while($row=mysqli_fetch_object($query)){
					?> 
					
					<tr>
						<td><a href="cart.php?cpu_cooler_id=<?php echo $row->cpu_cooler_id; ?>">Add to Cart</a></td>
						<td><?php echo $row->cpu_cooler_id; ?></td>
						<td><?php echo $row->CPU_Cooler; ?></td>
						<td><?php echo $row->Liquid_Cooled; ?></td>
						<td><?php echo $row->Bearing_Type; ?></td>
						<td><?php echo $row->Noise_Level; ?></td>
						<td><?php echo $row->Fan_RPM; ?></td>
						<td><?php echo $row->quantity; ?></td>
						<td><?php echo $row->price; ?></td>
						
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
	<input type="submit" name="submit" value="Submit">
	</form>
	</div>
	<div>
		<h2>You Selected:</h2>
		<h1>Welcome <?php echo $login_session; ?></h1>
		<?php
			if (isset($_POST['submit'])){
				foreach ($_POST['cpu_cooler_id'] as $m_id):
				
				$sq=mysqli_query($db,"select * from `cpu_cooler` where cpu_cooler_id='$m_id'");
				$srow=mysqli_fetch_array($sq);
				echo $srow['CPU_Cooler']. "<br>";
				
				endforeach;
			}
		?>
	</div>
</body>
</html>