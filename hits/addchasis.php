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

$numOfmgtBays=$_POST['numOfmgtBays'];
$numOfPB=$_POST['numOfPB'];
$numOfFB=$_POST['numOfFB'];
$numOfSwB=$_POST['numOfSwB'];
$numOfSvB=$_POST['numOfSvB'];
$sizeInRackUnits=$_POST['sizeInRackUnits'];
$depth=$_POST['depth'];




?>	
		
<?php

$query=mysql_query( "INSERT INTO Product VALUES ('{$productId}','{$vendorPartNum}','{$vendorPartDescription}','{$vendorId}',$price,$pOrderNum)",$connection);
$query1=mysql_query("INSERT INTO chassis VALUES( '{$productId}',{$numOfmgtBays},{$numOfPB},{$numOfFB},{$numOfSwB},{$numOfSvB},{$sizeInRackUnits},{$depth})",$connection);
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