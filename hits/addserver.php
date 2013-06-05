<?php ob_start(); ?>

<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<?php include("includes/header.php"); ?>
	
<?php
$productId=$_POST['productId'];
$vendorId=$_POST['vendorId'];
$vendorPartNum=$_POST['vendorPartNum'];
$vendorPartDescription=$_POST['vendorPartDescription'];
$price=$_POST['price'];
$pOrderNum=$_POST['pOrderNum'];
$supplyDate=$_POST['supplydate'];

$numOfCpu=$_POST['numOfCpu'];
$numOfHdd=$_POST['numOfHdd'];
$numOfMS=$_POST['numOfMS'];
$numOfOB=$_POST['numOfOB'];
$numOfPCI=$_POST['numOfPCI'];
$numOfPSB=$_POST['numOfPSB'];
$numOfLOM=$_POST['numOfLOM'];
$numOfMgmt=$_POST['numOfMgmt'];
$size=$_POST['size'];

?>	
		
<?php

$query=mysql_query( "INSERT INTO Product VALUES ('{$productId}','{$vendorPartNum}','{$vendorPartDescription}','{$vendorId}',$price,$pOrderNum)",$connection);
$query1=mysql_query("INSERT INTO Server VALUES( '{$productId}',$numOfCpu,$numOfHdd,$numOfMS,$numOfOB,$numOfPCI,$numOfPSB,$numOfLOM,$numOfMgmt,$size)",$connection);
$query2=mysql_query("INSERT INTO  Supplies VALUES ('{$productId}','{$vendorId}','{$supplyDate}')",$connection);

if($query && $query1 && $query2){
	
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