
<html>
<head>
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.6.5, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/motherboard.svg" type="image/x-icon">
  <meta name="description" content="">
  <title>Home</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<!-- bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<style>
	.button {
    display: block;
    width: 160px;
    height: 35px;
    background: #4E9CAF;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    color: white;
    font-weight: bold;
}
	.button1 {
    display: block;
    width: 160px;
    height: 35px;
    background: #9F0F0F;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    color: white;
    font-weight: bold;
}
	</style>
</head>
<?php
	error_reporting(E_ERROR);
	  function runMyFunction() {
		  require 'session.php';

  $sql = ("SELECT * FROM comp WHERE comp_id =1 AND mobosocket = (SELECT cpusocket FROM comp WHERE comp_id =1)");
//$alert = "SELECT cpusocket FROM comp WHERE comp_id =1";
  	  
$result1 = mysqli_query($db,$sql) or die(mysqli_error($db));
//$alert1 = mysqli_query($db,$alert) or die(mysqli_error($db));
$check77 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
  $sql2 = ("SELECT * FROM comp WHERE comp_id =1 AND mobotype = (SELECT ramtype FROM comp WHERE comp_id =1)");
		  $result2 = mysqli_query($db,$sql2) or die(mysqli_error($db));
		  $check78 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
if($check77==true)
{
//echo '<script language="javascript">';
	echo "<br>";
	echo '<div class="alert alert-success alert-dismissable" id="flash-msg">
<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
<h5><i class="icon fa fa-check"></i>CPU and Motherboard are Compatible</h5>
</div>';
//echo "CPU and Motherboard are Compatible";
	//echo "<br>";
//echo '</script>';
	
}
else
{
//echo '<script language="javascript">';

	$result = mysqli_query($db,"SELECT `cpusocket` FROM comp") or die(mysqli_error($db));
while($row = mysqli_fetch_assoc($result)){
	echo "<br>";
	echo '<div class="alert alert-danger alert-dismissable" id="flash-msg">
<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
<h5 style="display:inline"><i class="icon fa fa-check"></i><h5 style="display:inline">Parts are incompatible.Please Select CPU with socket </h5>'.$row['cpusocket'].'</h5>
</div>';
	//echo "<div class='alert alert-sucess alert-dismissable' id='flash-msg'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button><h6>Parts are incompatible.Please Select CPU with socket </h6><h6><i class='icon fa fa-check'></i>".$row['cpusocket']."</h6></div>";
	  //echo 'Parts are incompatible\nPlease Select CPU with socket '.$row['cpusocket'];
      //echo $row['cpusocket'];
	//echo "<br>";
}
	
//echo 'alert('.$alert;')';
//echo 'alert("Parts are incompatible. Please select CPU with socket"+"\n"+" 'echo $alert;' ")';
//echo '</script>';
}
		  if($check78==true)
{
	echo '<div class="alert alert-success alert-dismissable" id="flash-msg">
<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
<h5><i class="icon fa fa-check"></i>RAM and Motherboard are compatible</h5>
</div>';
//echo '<script language="javascript">';
//echo "\nRAM is Compatible with system";
	//echo "<br>";
//echo '</script>';
	
}
else
{
//echo '<script language="javascript">';

	$result = mysqli_query($db,"SELECT `mobotype` FROM comp") or die(mysqli_error($db));
while($row = mysqli_fetch_assoc($result)){
	echo '<div class="alert alert-danger alert-dismissable" id="flash-msg">
<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
<h5 style="display:inline"><i class="icon fa fa-check"></i><h5 style="display:inline">Parts are incompatible.Please Select RAM with type </h5>'.$row['mobotype'].'</h5>
</div>';
	//echo "\nParts are incompatible Please Select RAM with type ";
      //echo $row['mobotype'];
	//echo "<br>";
}
	
//echo 'alert('.$alert;')';
//echo 'alert("Parts are incompatible. Please select CPU with socket"+"\n"+" 'echo $alert;' ")';
//echo '</script>';
}
  }
	

  if (isset($_GET['hello'])) {
    runMyFunction();
  }
?>
<br>
<br>
<a href="pickparts.php" class="button1" style="display:inline">Component List</a>
<a class="button" href='cart.php?hello=true' style="display:inline">Check Compatibility</a>
<br>
<br>
</html>







<!-----------------------------------------------------MOBO--------------------------------------------------->
<?php
error_reporting(E_ERROR);
	require 'session.php';
//session_start();

require 'itemmobo.php';
	   
	   //-----------------------------------------------------------------------------------------------
	   
	   
	   
	   //-----------------------------------------------------------------------------------------------

if(isset($_GET['motherboard_id'])){
	$query_m = mysqli_query($db, 'select * from motherboard where motherboard_id='.$_GET['motherboard_id']);
	$row_m = mysqli_fetch_object($query_m);
	$itemmobo = new Itemmobo();
	$itemmobo->motherboard_id = $row_m->motherboard_id;
	$itemmobo->Motherboard = $row_m->Motherboard;
	$itemmobo->Form_Factor = $row_m->Form_Factor;
	$itemmobo->Socket_m = $row_m->Socket_m;
	$itemmobo->Chipset = $row_m->Chipset;
	$itemmobo->RAM_slots = $row_m->RAM_slots;
	$itemmobo->RAM_type = $row_m->RAM_type;
	$itemmobo->Max_RAM = $row_m->Max_RAM;
	$itemmobo->RAID = $row_m->RAID;
	$itemmobo->CrossFire = $row_m->CrossFire;
	$itemmobo->SLI = $row_m->SLI;
	$itemmobo->quantity_m = 1;
	$itemmobo->price_m = $row_m->price_m;
	// check product is avail in cart_m-----------------------------------------------------------------------
	$index_m = -1;
	$cart_m = unserialize(serialize($_SESSION['cart_m']));
	for($m=0 ;$m<count($cart_m); $m++)
		if($cart_m[$m]->motherboard_id==$_GET['motherboard_id'])
		{
			$index_m = $m;
			break;
			
		}
	if($index_m==-1)
		$_SESSION['cart_m'][] = $itemmobo;
	else{
		$cart_m[$index_m]->quantity_m++;
		$_SESSION['cart_m'] = $cart_m;
	}
}
	// DELETE--------------------------------------------------------------------------------------------------
if(isset($_GET['index_m'])){
	$cart_m = unserialize(serialize($_SESSION['cart_m']));	
	unset($cart_m[$_GET['index_m']]);
	$cart_m = array_values($cart_m);
	$_SESSION['cart_m'] = $cart_m;
}
	   

?>


<table width="200" border="1" class="table table-responsive">
  <tbody>
    <tr>
     <th></th>
      <th scope="col">motherboard_id</th>
      <th scope="col">Motherboard</th>
      <th scope="col">Form_Factor</th>
      <th scope="col">Socket_m</th>
      <th scope="col">Chipset</th>
      <th scope="col">RAM_slots</th>
      <th scope="col">RAM_type</th>
      <th scope="col">Max_RAM</th>
      <th scope="col">RAID</th>
      <th scope="col">CrossFire</th>
      <th scope="col">SLI</th>          
      <th scope="col">quantity_m</th>
      <th scope="col">price_m</th>
      <th scope="col">Sub Total</th>
      
    </tr>    
  </tbody>
  <?php
	$cart_m = unserialize(serialize($_SESSION['cart_m']));
	$sm = 0;
	$index_m = 0;
	for($m=0; $m<count($cart_m); $m++) {
		$sm += $cart_m[$m]->price_m * $cart_m[$m]->quantity_m;
	?>
	<tr>
		<td><a href="cart.php?index_m=<?php echo $index_m; ?>" onClick="return confirm('Are you sure?')">Delete</a></td>
		<td><?php echo $cart_m[$m]->motherboard_id; ?></td>
		<td><?php echo $cart_m[$m]->Motherboard; ?></td>
		<td><?php echo $cart_m[$m]->Form_Factor; ?></td>
		<td><?php echo $cart_m[$m]->Socket_m; ?></td>
		<td><?php echo $cart_m[$m]->Chipset; ?></td>
		<td><?php echo $cart_m[$m]->RAM_slots; ?></td>
		<td><?php echo $cart_m[$m]->RAM_type; ?></td>
		<td><?php echo $cart_m[$m]->Max_RAM; ?></td>
		<td><?php echo $cart_m[$m]->RAID; ?></td>
		<td><?php echo $cart_m[$m]->CrossFire; ?></td>
		<td><?php echo $cart_m[$m]->SLI; ?></td>
		<td><?php echo $cart_m[$m]->quantity_m; ?></td>
		<td><?php echo $cart_m[$m]->price_m; ?></td>
		<td><?php echo $cart_m[$m]->price_m * $cart_m[$m]->quantity_m; ?></td>
		
	</tr>
	<?php 
			$index_m++;
		$mobotype = $cart_m[$m]->RAM_type;
		$sql = "UPDATE comp SET mobotype='$mobotype' WHERE comp_id='1'";
$result1 = mysqli_query($db,$sql) or die(mysqli_error($db));
		$mobosocket = $cart_m[$m]->Socket_m;
		$sql5 = "UPDATE comp SET mobosocket='$mobosocket' WHERE comp_id='1'";
$result1 = mysqli_query($db,$sql5) or die(mysqli_error($db));
		//$_SESSION["mobosocket"] = $row_m->Socket_m;
		//$mobosocket = serialize($row_m->Socket_m);
		} 
	?>
	<tr>
		<td align="right">Sum</td>
		<td align="left"><?php echo $sm; ?></td>
	</tr>
  </table>
  <br>
  
  <!-----------------------------------------------------MOBO--------------------------------------------------->
  
  <!-----------------------------------------------------CPU--------------------------------------------------->
  
  <?php
//session_start();
//require 'session.php';
require 'itemcpu.php';

if(isset($_GET['cpu_id'])){
	$query_cp = mysqli_query($db, 'select * from cpu where cpu_id='.$_GET['cpu_id']);
	$row_cp = mysqli_fetch_object($query_cp);
	$itemcpu = new Itemcpu();
	$itemcpu->cpu_id = $row_cp->cpu_id;
	$itemcpu->CPU = $row_cp->CPU;
	$itemcpu->Codename = $row_cp->Codename;
	$itemcpu->Cores = $row_cp->Cores;
	$itemcpu->Socket_cp = $row_cp->Socket_cp;
	$itemcpu->Process = $row_cp->Process;
	$itemcpu->Clock = $row_cp->Clock;
	$itemcpu->Multi = $row_cp->Multi;
	$itemcpu->Cache_L = $row_cp->Cache_L;
	$itemcpu->TDP = $row_cp->TDP;
	$itemcpu->Released = $row_cp->Released;	
	$itemcpu->quantity_cp = 1;
	$itemcpu->price_cp = $row_cp->price_cp;
	
	$cpusocket = $row_cp->Socket_cp;
		$sql1 = "UPDATE comp SET cpusocket='$cpusocket'";
	// check product is avail in cart-----------------------------------------------------------------------
	$index_cp = -1;
	$cart_cp = unserialize(serialize($_SESSION['cart_cp']));
	for($c=0 ;$c<count($cart_cp); $c++)
		if($cart_cp[$c]->cpu_id==$_GET['cpu_id'])
		{
			$index_cp = $c;
			break;
			
		}
	if($index_cp==-1)
		$_SESSION['cart_cp'][] = $itemcpu;
	else{
		$cart_cp[$index_cp]->quantity_cp++;
		$_SESSION['cart_cp'] = $cart_cp;
	}
}
	// DELETE--------------------------------------------------------------------------------------------------
if(isset($_GET['index_cp'])){
	$cart_cp = unserialize(serialize($_SESSION['cart_cp']));	
	unset($cart_cp[$_GET['index_cp']]);
	$cart_cp = array_values($cart_cp);
	$_SESSION['cart_cp'] = $cart_cp;
}

?>


<table width="200" border="1" class="table table-responsive">
  <tbody>
    <tr>
     <th></th>
      <th scope="col">cpu_id</th>
      <th scope="col">CPU</th>
      <th scope="col">Codename</th>
      <th scope="col">Cores</th>
      <th scope="col">Socket_cp</th>
      <th scope="col">Process</th>
      <th scope="col">Clock</th>
      <th scope="col">Multi</th>
      <th scope="col">Cache_L</th>
      <th scope="col">TDP</th>
      <th scope="col">Released</th>
      <th scope="col">quantity_cp</th>
      <th scope="col">price_cp</th>
      <th scope="col">Sub Total</th>
      
    </tr>    
  </tbody>
  <?php
	$cart_cp = unserialize(serialize($_SESSION['cart_cp']));
	$scp = 0;
	$index_cp = 0;
	for($c=0; $c<count($cart_cp); $c++) {
		$scp += $cart_cp[$c]->price_cp * $cart_cp[$c]->quantity_cp;
	?>
	<tr>
		<td><a href="cart.php?index_cp=<?php echo $index_cp; ?>" onClick="return confirm('Are you sure?')">Delete</a></td>
		<td><?php echo $cart_cp[$c]->cpu_id; ?></td>
		<td><?php echo $cart_cp[$c]->CPU; ?></td>
		<td><?php echo $cart_cp[$c]->Codename; ?></td>
		<td><?php echo $cart_cp[$c]->Cores; ?></td>
		<td><?php echo $cart_cp[$c]->Socket_cp; ?></td>
		<td><?php echo $cart_cp[$c]->Process; ?></td>
		<td><?php echo $cart_cp[$c]->Clock; ?></td>
		<td><?php echo $cart_cp[$c]->Multi; ?></td>
		<td><?php echo $cart_cp[$c]->Cache_L; ?></td>
		<td><?php echo $cart_cp[$c]->TDP; ?></td>
		<td><?php echo $cart_cp[$c]->Released; ?></td>		
		<td><?php echo $cart_cp[$c]->quantity_cp; ?></td>
		<td><?php echo $cart_cp[$c]->price_cp; ?></td>
		<td><?php echo $cart_cp[$c]->price_cp * $cart_cp[$c]->quantity_cp; ?></td>
		
	</tr>
	<?php 
		  
			$index_cp++;
		$cpusocket = $cart_cp[$c]->Socket_cp;
		$sql1 = "UPDATE comp SET cpusocket='$cpusocket' WHERE comp_id='1'";
$result = mysqli_query($db,$sql1) or die(mysqli_error($db));
		
		
		//$_SESSION["cpusocket"] = $row_cp->Socket_cp;
		
		} 
	?>
	<tr>
		<td align="right">Sum</td>
		<td align="left"><?php echo $scp; ?></td>
	</tr>
  </table>
  <br>
  
  <!-----------------------------------------------------CPU--------------------------------------------------->
  
  
  
  
  <!-----------------------------------------------------RAM--------------------------------------------------->
  
  <?php
//session_start();
//require 'session.php';
require 'itemram.php';

if(isset($_GET['ram_id'])){
	$query_r = mysqli_query($db, 'select * from ram where ram_id='.$_GET['ram_id']);
	$row_r = mysqli_fetch_object($query_r);
	$itemram = new Itemram();
	$itemram->ram_id = $row_r->ram_id;
  	$itemram->RAM = $row_r->RAM;
  	$itemram->Type = $row_r->Type;
  	$itemram->Speed = $row_r->Speed;
  	$itemram->Module = $row_r->Module;
  	$itemram->Voltage = $row_r->Voltage;
  	$itemram->Heat_Sink = $row_r->Heat_Sink;
  	$itemram->ECC = $row_r->ECC;
  	$itemram->quantity_r = 1;
  	$itemram->price_r = $row_r->price_r;
	// check product is avail in cart-----------------------------------------------------------------------
	$index_r = -1;
	$cart_r = unserialize(serialize($_SESSION['cart_r']));
	for($i=0 ;$i<count($cart_r); $i++)
		if($cart_r[$i]->ram_id==$_GET['ram_id'])
		{
			$index_r = $i;
			break;
			
		}
	if($index_r==-1)
		$_SESSION['cart_r'][] = $itemram;
	else{
		$cart_r[$index_r]->quantity_r++;
		$_SESSION['cart_r'] = $cart_r;
	}
}
	// DELETE--------------------------------------------------------------------------------------------------
if(isset($_GET['index_r'])){
	$cart_r = unserialize(serialize($_SESSION['cart_r']));	
	unset($cart_r[$_GET['index_r']]);
	$cart_r = array_values($cart_r);
	$_SESSION['cart_r'] = $cart_r;
}

?>


<table width="200" border="1" class="table table-responsive">
  <tbody>
    <tr>
     <th></th>
      <th scope="col">ram_id</th>
      <th scope="col">RAM</th>
      <th scope="col">Type</th>
      <th scope="col">Speed</th>
      <th scope="col">Module</th>
      <th scope="col">Voltage</th>
      <th scope="col">Heat_Sink</th>
      <th scope="col">ECC</th>
      <th scope="col">quantity_r</th>
      <th scope="col">price_r</th>
      <th scope="col">Sub Total</th>
            
      
    </tr>    
  </tbody>
  <?php
	$cart_r = unserialize(serialize($_SESSION['cart_r']));
	$sr = 0;
	$index_r = 0;
	for($i=0; $i<count($cart_r); $i++) {
		$sr += $cart_r[$i]->price_r * $cart_r[$i]->quantity_r;
	?>
	<tr>
		<td><a href="cart.php?index_r=<?php echo $index_r; ?>" onClick="return confirm('Are you sure?')">Delete</a></td>
		<td><?php echo $cart_r[$i]->ram_id; ?></td>
		<td><?php echo $cart_r[$i]->RAM; ?></td>
		<td><?php echo $cart_r[$i]->Type; ?></td>
		<td><?php echo $cart_r[$i]->Speed; ?></td>
		<td><?php echo $cart_r[$i]->Module; ?></td>
		<td><?php echo $cart_r[$i]->Voltage; ?></td>
		<td><?php echo $cart_r[$i]->Heat_Sink; ?></td>
		<td><?php echo $cart_r[$i]->ECC; ?></td>		
		<td><?php echo $cart_r[$i]->quantity_r; ?></td>
		<td><?php echo $cart_r[$i]->price_r; ?></td>
		<td><?php echo $cart_r[$i]->price_r * $cart_r[$i]->quantity_r; ?></td>
		
	</tr>
	<?php 
			$index_r++;
		$ramtype = $cart_r[$i]->Type;
		$sql3 = "UPDATE comp SET ramtype='$ramtype' WHERE comp_id='1'";
$result5 = mysqli_query($db,$sql3) or die(mysqli_error($db));
		} 
	?>
	<tr>
		<td align="right">Sum</td>
		<td align="left"><?php echo $sr; ?></td>
	</tr>
  </table>
  <br>
  


  
  <!-----------------------------------------------------RAM--------------------------------------------------->
  
  
  
  
  <!-----------------------------------------------------GPU--------------------------------------------------->
  
  <?php
//session_start();
//require 'session.php';
require 'itemgpu.php';

if(isset($_GET['gpu_id'])){
	$query_g = mysqli_query($db, 'select * from gpu where gpu_id='.$_GET['gpu_id']);
	$row_g = mysqli_fetch_object($query_g);
	$itemgpu = new Itemgpu();
	$itemgpu->gpu_id = $row_g->gpu_id;
	$itemgpu->GPU = $row_g->GPU;
	$itemgpu->GPU_Chip = $row_g->GPU_Chip;
	$itemgpu->Bus = $row_g->Bus;
	$itemgpu->Memory = $row_g->Memory;
	$itemgpu->GPU_clock = $row_g->GPU_clock;
	$itemgpu->Memory_clock = $row_g->Memory_clock;
	$itemgpu->Shaders = $row_g->Shaders;
	$itemgpu->Released_g = $row_g->Released_g;		
	$itemgpu->quantity_g = 1;
	$itemgpu->price_g = $row_g->price_g;
	// check product is avail in cart-----------------------------------------------------------------------
	$index_g = -1;
	$cart_g = unserialize(serialize($_SESSION['cart_g']));
	for($i=0 ;$i<count($cart_g); $i++)
		if($cart_g[$i]->gpu_id==$_GET['gpu_id'])
		{
			$index_g = $i;
			break;
			
		}
	if($index_g==-1)
		$_SESSION['cart_g'][] = $itemgpu;
	else{
		$cart_g[$index_g]->quantity_g++;
		$_SESSION['cart_g'] = $cart_g;
	}
}
	// DELETE--------------------------------------------------------------------------------------------------
if(isset($_GET['index_g'])){
	$cart_g = unserialize(serialize($_SESSION['cart_g']));	
	unset($cart_g[$_GET['index_g']]);
	$cart_g = array_values($cart_g);
	$_SESSION['cart_g'] = $cart_g;
}

?>


<table width="200" border="1" class="table table-responsive">
  <tbody>
    <tr>
     <th></th>
      <th scope="col">gpu_id</th>
      <th scope="col">GPU</th>
      <th scope="col">GPU_Chip</th>
      <th scope="col">Bus</th>
      <th scope="col">Memory</th>
      <th scope="col">GPU_clock</th>
      <th scope="col">Memory_clock</th>
      <th scope="col">Shaders</th>
      <th scope="col">Released_g</th>
      <th scope="col">quantity_g</th>
      <th scope="col">price_g</th>
      <th scope="col">Sub Total</th>
      
      
    </tr>    
  </tbody>
  <?php
	$cart_g = unserialize(serialize($_SESSION['cart_g']));
	$sg = 0;
	$index_g = 0;
	for($i=0; $i<count($cart_g); $i++) {
		$sg += $cart_g[$i]->price_g * $cart_g[$i]->quantity_g;
	?>
	<tr>
		<td><a href="cart.php?index_g=<?php echo $index_g; ?>" onClick="return confirm('Are you sure?')">Delete</a></td>
		<td><?php echo $cart_g[$i]->gpu_id; ?></td>
		<td><?php echo $cart_g[$i]->GPU; ?></td>
		<td><?php echo $cart_g[$i]->GPU_Chip; ?></td>
		<td><?php echo $cart_g[$i]->Bus; ?></td>
		<td><?php echo $cart_g[$i]->Memory; ?></td>
		<td><?php echo $cart_g[$i]->GPU_clock; ?></td>
		<td><?php echo $cart_g[$i]->Memory_clock; ?></td>
		<td><?php echo $cart_g[$i]->Shaders; ?></td>
		<td><?php echo $cart_g[$i]->Released_g; ?></td>		
		<td><?php echo $cart_g[$i]->quantity_g; ?></td>
		<td><?php echo $cart_g[$i]->price_g; ?></td>
		<td><?php echo $cart_g[$i]->price_g * $cart_g[$i]->quantity_g; ?></td>
		
	</tr>
	<?php 
			$index_g++;
		} 
	?>
	<tr>
		<td align="right">Sum</td>
		<td align="left"><?php echo $sg; ?></td>
	</tr>
  </table>
  <br>
  
  <!-----------------------------------------------------GPU--------------------------------------------------->
  
  
  <!-----------------------------------------------------PSU--------------------------------------------------->
  
  <?php
//session_start();
//require 'session.php';
require 'itempsu.php';

if(isset($_GET['psu_id'])){
	$query_p = mysqli_query($db, 'select * from psu where psu_id='.$_GET['psu_id']);
	$row_p = mysqli_fetch_object($query_p);
	$itempsu = new Itempsu();
	$itempsu->psu_id = $row_p->psu_id;
	$itempsu->PSU = $row_p->PSU;
	$itempsu->Model_p = $row_p->Model_p;
	$itempsu->Type_p = $row_p->Type_p;
	$itempsu->Modular = $row_p->Modular;
	$itempsu->Efficiency = $row_p->Efficiency;
	$itempsu->Wattage = $row_p->Wattage;
	$itempsu->PCI_Express_Connectors = $row_p->PCI_Express_Connectors;	
	$itempsu->quantity_p = 1;
	$itempsu->price_p = $row_p->price_p;
	// check product is avail in cart-----------------------------------------------------------------------
	$index_p = -1;
	$cart_p = unserialize(serialize($_SESSION['cart_p']));
	for($i=0 ;$i<count($cart_p); $i++)
		if($cart_p[$i]->psu_id==$_GET['psu_id'])
		{
			$index_p = $i;
			break;
			
		}
	if($index_p==-1)
		$_SESSION['cart_p'][] = $itempsu;
	else{
		$cart_p[$index_p]->quantity_p++;
		$_SESSION['cart_p'] = $cart_p;
	}
}
	// DELETE--------------------------------------------------------------------------------------------------
if(isset($_GET['index_p'])){
	$cart_p = unserialize(serialize($_SESSION['cart_p']));	
	unset($cart_p[$_GET['index_p']]);
	$cart_p = array_values($cart_p);
	$_SESSION['cart_p'] = $cart_p;
}

?>


<table width="200" border="1" class="table table-responsive">
  <tbody>
    <tr>
     <th></th>
      <th scope="col">psu_id</th>
      <th scope="col">PSU</th>
      <th scope="col">Model_p</th>
      <th scope="col">Type_p</th>
      <th scope="col">Modular</th>
      <th scope="col">Efficiency</th>
      <th scope="col">Wattage</th>
      <th scope="col">PCI_Express_Connectors</th>      
      <th scope="col">quantity_p</th>
      <th scope="col">price_p</th>
      <th scope="col">Sub Total</th>
      
    </tr>    
  </tbody>
  <?php
	$cart_p = unserialize(serialize($_SESSION['cart_p']));
	$sp = 0;
	$index_p = 0;
	for($i=0; $i<count($cart_p); $i++) {
		$sp += $cart_p[$i]->price_p * $cart_p[$i]->quantity_p;
	?>
	<tr>
		<td><a href="cart.php?index_p=<?php echo $index_p; ?>" onClick="return confirm('Are you sure?')">Delete</a></td>
		<td><?php echo $cart_p[$i]->psu_id; ?></td>
		<td><?php echo $cart_p[$i]->PSU; ?></td>
		<td><?php echo $cart_p[$i]->Model_p; ?></td>
		<td><?php echo $cart_p[$i]->Type_p; ?></td>
		<td><?php echo $cart_p[$i]->Modular; ?></td>
		<td><?php echo $cart_p[$i]->Efficiency; ?></td>
		<td><?php echo $cart_p[$i]->Wattage; ?></td>
		<td><?php echo $cart_p[$i]->PCI_Express_Connectors; ?></td>		
		<td><?php echo $cart_p[$i]->quantity_p; ?></td>
		<td><?php echo $cart_p[$i]->price_p; ?></td>
		<td><?php echo $cart_p[$i]->price_p * $cart_p[$i]->quantity_p; ?></td>
		
	</tr>
	<?php 
			$index_p++;
		} 
	?>
	<tr>
		<td align="right">Sum</td>
		<td align="left"><?php echo $sp; ?></td>
	</tr>
  </table>
  <br>
  
  <!-----------------------------------------------------PSU--------------------------------------------------->
  
  
  
  
  <!-------------------------------------CPU COOLER-------------------------------------------------------------->  
  
  
  <?php
//session_start();
//require 'session.php';
require 'itemcooler.php';

if(isset($_GET['cpu_cooler_id'])){
	$query = mysqli_query($db, 'select * from cpu_cooler where cpu_cooler_id='.$_GET['cpu_cooler_id']);
	$row = mysqli_fetch_object($query);
	$itemcooler = new Itemcooler();
	$itemcooler->cpu_cooler_id = $row->cpu_cooler_id;
	$itemcooler->CPU_Cooler = $row->CPU_Cooler;
	$itemcooler->Liquid_Cooled = $row->Liquid_Cooled;
	$itemcooler->Bearing_Type = $row->Bearing_Type;
	$itemcooler->Noise_Level = $row->Noise_Level;
	$itemcooler->Fan_RPM = $row->Fan_RPM;
	$itemcooler->quantity = 1;
	$itemcooler->price = $row->price;
	// check product is avail in cart-----------------------------------------------------------------------
	$index = -1;
	$cart = unserialize(serialize($_SESSION['cart']));
	for($i=0 ;$i<count($cart); $i++)
		if($cart[$i]->cpu_cooler_id==$_GET['cpu_cooler_id'])
		{
			$index = $i;
			break;
			
		}
	if($index==-1)
		$_SESSION['cart'][] = $itemcooler;
	else{
		$cart[$index]->quantity++;
		$_SESSION['cart'] = $cart;
	}
}
	// DELETE--------------------------------------------------------------------------------------------------
if(isset($_GET['index'])){
	$cart = unserialize(serialize($_SESSION['cart']));	
	unset($cart[$_GET['index']]);
	$cart = array_values($cart);
	$_SESSION['cart'] = $cart;
}

?>


<table width="200" border="1" class="table table-responsive">
  <tbody>
    <tr>
     <th></th>
      <th scope="col">cpu_cooler_id</th>
      <th scope="col">CPU_Cooler</th>
      <th scope="col">Liquid_Cooled</th>
      <th scope="col">Bearing_Type</th>
      <th scope="col">Noise_Level</th>
      <th scope="col">Fan_RPM</th>
      <th scope="col">quantity</th>
      <th scope="col">price</th>
      <th scope="col">Sub Total</th>
      
    </tr>    
  </tbody>
  <?php
	$cart = unserialize(serialize($_SESSION['cart']));
	$s = 0;
	$index = 0;
	for($i=0; $i<count($cart); $i++) {
		$s += $cart[$i]->price * $cart[$i]->quantity;
	?>
	<tr>
		<td><a href="cart.php?index=<?php echo $index; ?>" onClick="return confirm('Are you sure?')">Delete</a></td>
		<td><?php echo $cart[$i]->cpu_cooler_id; ?></td>
		<td><?php echo $cart[$i]->CPU_Cooler; ?></td>
		<td><?php echo $cart[$i]->Liquid_Cooled; ?></td>
		<td><?php echo $cart[$i]->Bearing_Type; ?></td>
		<td><?php echo $cart[$i]->Noise_Level; ?></td>
		<td><?php echo $cart[$i]->Fan_RPM; ?></td>
		<td><?php echo $cart[$i]->quantity; ?></td>
		<td><?php echo $cart[$i]->price; ?></td>
		<td><?php echo $cart[$i]->price * $cart[$i]->quantity; ?></td>
		
	</tr>
	<?php 
			$index++;
		} 
	?>
	<tr>
		<td align="right">Sum</td>
		<td align="left"><?php echo $s; ?></td>
	</tr>
  </table>
  <br>
  <!-----------------------------------------------------CPU Cooler--------------------------------------------------->
  
  <!-----------------------------------------------------PC Case--------------------------------------------------->
  
      <?php
//session_start();
//require 'session.php';
require 'itempccase.php';

if(isset($_GET['pc_case_id'])){
	$query_c = mysqli_query($db, 'select * from pc_case where pc_case_id='.$_GET['pc_case_id']);
	$row_c = mysqli_fetch_object($query_c);
	$itempccase = new Itempccase();
	$itempccase->pc_case_id = $row_c->pc_case_id;
	$itempccase->PC_case = $row_c->PC_case;
	$itempccase->Model_c = $row_c->Model_c;
	$itempccase->Color = $row_c->Color;
	$itempccase->Type_c = $row_c->Type_c;
	$itempccase->Power_supply = $row_c->Power_supply;
	$itempccase->ssd_Bays = $row_c->ssd_Bays;
	$itempccase->hdd_Bays = $row_c->hdd_Bays;
	$itempccase->Motherboard_Size = $row_c->Motherboard_Size;	
	$itempccase->quantity_c = 1;
	$itempccase->price_c = $row_c->price_c;
	// check product is avail in cart-----------------------------------------------------------------------
	$index_c = -1;
	$cart_c = unserialize(serialize($_SESSION['cart_c']));
	for($i=0 ;$i<count($cart_c); $i++)
		if($cart_c[$i]->pc_case_id==$_GET['pc_case_id'])
		{
			$index_c = $i;
			break;
			
		}
	if($index_c==-1)
		$_SESSION['cart_c'][] = $itempccase;
	else{
		$cart_c[$index_c]->quantity_c++;
		$_SESSION['cart_c'] = $cart_c;
	}
}
	// DELETE--------------------------------------------------------------------------------------------------
if(isset($_GET['index_c'])){
	$cart_c = unserialize(serialize($_SESSION['cart_c']));	
	unset($cart_c[$_GET['index_c']]);
	$cart_c = array_values($cart_c);
	$_SESSION['cart_c'] = $cart_c;
}

?>


<table width="200" border="1" class="table table-responsive">
  <tbody>
    <tr>
     <th></th>
      <th scope="col">pc_case_id</th>
      <th scope="col">PC_case</th>
      <th scope="col">Model_c</th>
      <th scope="col">Color</th>
      <th scope="col">Type_c</th>
      <th scope="col">Power_supply</th>
      <th scope="col">ssd_Bays</th>
      <th scope="col">hdd_Bays</th>
      <th scope="col">Motherboard_Size</th>      
      <th scope="col">quantity_c</th>
      <th scope="col">price_c</th>
      <th scope="col">Sub Total</th>
      
    </tr>    
  </tbody>
  <?php
	$cart_c = unserialize(serialize($_SESSION['cart_c']));
	$sc = 0;
	$index_c = 0;
	for($i=0; $i<count($cart_c); $i++) {
		$sc += $cart_c[$i]->price_c * $cart_c[$i]->quantity_c;
	?>
	<tr>
		<td><a href="cart.php?index_c=<?php echo $index_c; ?>" onClick="return confirm('Are you sure?')">Delete</a></td>
		<td><?php echo $cart_c[$i]->pc_case_id; ?></td>
		<td><?php echo $cart_c[$i]->PC_case; ?></td>
		<td><?php echo $cart_c[$i]->Model_c; ?></td>
		<td><?php echo $cart_c[$i]->Color; ?></td>
		<td><?php echo $cart_c[$i]->Type_c; ?></td>
		<td><?php echo $cart_c[$i]->Power_supply; ?></td>
		<td><?php echo $cart_c[$i]->ssd_Bays; ?></td>
		<td><?php echo $cart_c[$i]->hdd_Bays; ?></td>				
		<td><?php echo $cart_c[$i]->Motherboard_Size; ?></td>
		<td><?php echo $cart_c[$i]->quantity_c; ?></td>
		<td><?php echo $cart_c[$i]->price_c; ?></td>
		<td><?php echo $cart_c[$i]->price_c * $cart_c[$i]->quantity_c; ?></td>
		
	</tr>
	<?php 
			$index_c++;
		} 
	?>
	<tr>
		<td align="right">Sum</td>
		<td align="left"><?php echo $sc; ?></td>
	</tr>
  </table>
  <br>
   
  <!-----------------------------------------------------PC Case---------------------------------------------------> 
  
   
  <!-----------------------------------------------------HDD---------------------------------------------------> 
    
     <?php
//session_start();
//require 'session.php';
require 'itemhdd.php';

if(isset($_GET['hdd_id'])){
	$query_h = mysqli_query($db, 'select * from hdd where hdd_id='.$_GET['hdd_id']);
	$row_h = mysqli_fetch_object($query_h);
	$itemhdd = new Itemhdd();
	$itemhdd->hdd_id = $row_h->hdd_id;
	$itemhdd->HDD = $row_h->HDD;
	$itemhdd->Capacity = $row_h->Capacity;
	$itemhdd->Type_h = $row_h->Type_h;		
	$itemhdd->quantity_h = 1;
	$itemhdd->price_h = $row_h->price_h;
	// check product is avail in cart-----------------------------------------------------------------------
	$index_h = -1;
	$cart_h = unserialize(serialize($_SESSION['cart_h']));
	for($i=0 ;$i<count($cart_h); $i++)
		if($cart_h[$i]->hdd_id==$_GET['hdd_id'])
		{
			$index_h = $i;
			break;
			
		}
	if($index_h==-1)
		$_SESSION['cart_h'][] = $itemhdd;
	else{
		$cart_h[$index_h]->quantity_h++;
		$_SESSION['cart_h'] = $cart_h;
	}
}
	// DELETE--------------------------------------------------------------------------------------------------
if(isset($_GET['index_h'])){
	$cart_h = unserialize(serialize($_SESSION['cart_h']));	
	unset($cart_h[$_GET['index_h']]);
	$cart_h = array_values($cart_h);
	$_SESSION['cart_h'] = $cart_h;
}

?>


<table width="200" border="1" class="table table-responsive">
  <tbody>
    <tr>
     <th></th>
      <th scope="col">hdd_id</th>
      <th scope="col">HDD</th>
      <th scope="col">Capacity</th>
      <th scope="col">Type_h</th>
      <th scope="col">quantity_h</th>
      <th scope="col">price_h</th>
      <th scope="col">Sub Total</th>
      
    </tr>    
  </tbody>
  <?php
	$cart_h = unserialize(serialize($_SESSION['cart_h']));
	$sh = 0;
	$index_h = 0;
	for($i=0; $i<count($cart_h); $i++) {
		$sh += $cart_h[$i]->price_h * $cart_h[$i]->quantity_h;
	?>
	<tr>
		<td><a href="cart.php?index_h=<?php echo $index_h; ?>" onClick="return confirm('Are you sure?')">Delete</a></td>
		<td><?php echo $cart_h[$i]->hdd_id; ?></td>
		<td><?php echo $cart_h[$i]->HDD; ?></td>
		<td><?php echo $cart_h[$i]->Capacity; ?></td>
		<td><?php echo $cart_h[$i]->Type_h; ?></td>		
		<td><?php echo $cart_h[$i]->quantity_h; ?></td>
		<td><?php echo $cart_h[$i]->price_h; ?></td>
		<td><?php echo $cart_h[$i]->price_h * $cart_h[$i]->quantity_h; ?></td>
		
	</tr>
	<?php 
			$index_h++;
		} 
	?>
	<tr>
		<td align="right">Sum</td>
		<td align="left"><?php echo $sh; ?></td>
	</tr>
  </table>
  <br>
      
  <!-----------------------------------------------------HDD--------------------------------------------------->  
  <?php

//echo "Favorite color is " . $_SESSION["mobosocket"] . ".<br>";
//echo "Favorite animal is " . $_SESSION["cpusocket"] . ".";
//echo unserialize($mobosocket);
//echo $cpusocket;
          
    ?>

  
  
  <br>
  <!-----------------------------------------------------END--------------------------------------------------->
  


  
  
  

