<?php ob_start();?>
<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<?php include("includes/header.php"); ?>

<?php 
$prodcutId=$_POST['prodcutId'];
$vendorId=$_POST['vendorId'];
$startDate=$_POST['startDate'];
$endDate=$_POST['endDate'];			
$supportReference=$_POST['supportReference'];
?>

<?php
$query1=mysql_query( "INSERT INTO lease VALUES ('{$productId}','{$startDate}','{$endDate}','{$supportReference}','{$vendorId}')",$connection);

if($query1){
	
	//success
	header("Location :blank.php");
	exit;
}else{
	//Display error message
	echo "<p> Adding Product failed:".mysql_error() ."</p>:";
}


?>





<?php ob_flush();?>					
<?php include("includes/footer.php");?>