<?php 
	
	switch ($Type=$_POST['Type'])
{
	case 0:header("Location: rack.php?id=addrack.php");
	       break;
	case 1:header("Location: server.php?id=addserver.php");
	       break;
	case 2:header("Location: cpu.php?id=addcpu.php");
	       break;
	case 3:header("Location: harddrive.php?id=addharddrive.php");
	       break;
	       
	case 4:header("Location: memory.php?id=addmemory.php");
	       break;
	case 5:header("Location: interfacecard.php?id=addinterfacecard.php");
	       break;
	       
	case 6:header("Location: powersupply.php?id=addpowersupply.php");
	       break;
	       
	case 7:header("Location: chasis.php?id=addchasis.php");
	       break;
	       
}	?>		


<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<?php include("includes/header.php"); ?>
	
						
<?php include("includes/footer.php");?>

