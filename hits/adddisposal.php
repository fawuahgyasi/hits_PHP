<?php ob_start(); ?>
<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<?php include("includes/header.php"); ?>
	
<?php			
$productId=$_POST['productId'];
$dd=$_POST['dd'];

?>
<?php
$query1=mysql_query( "INSERT INTO disposal VALUES ('{$productId}','{$dd}')",$connection);

if($query && $query1 ){
	
	//success
	header("Location :blank.php");
	exit;
}else{
	//Display error message
	echo "<p> Adding Product failed:".mysql_error() ."</p>:";
}
		


?>


<?php ob_flush(); ?>			
<?php include("includes/footer.php");?>