<html>
<?php
	  function runMyFunction() {

  $sql = ("SELECT * FROM comp WHERE comp_id =1 AND mobosocket
= (SELECT cpusocket FROM comp WHERE comp_id =1)");
$result1 = mysqli_query($db,$sql) or die(mysqli_error($db));
$check77 = mysqli_fetch_array($result1,MYSQLI_ASSOC);

if($check77==true)
{
echo '<script language="javascript">';
echo 'alert("Parts are Compatible")';
echo '</script>';
}
else
{
echo '<script language="javascript">';
echo 'alert("Parts are in compatible")';
echo '</script>';
}
  }

  if (isset($_GET['hello'])) {
    runMyFunction();
  }
?>

<a href='cart.php?hello=true'>Check Compatibility</a>
</html>
