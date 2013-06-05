<?php ob_start();?>
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

$maxload=$_POST['maxload'];
$socketconnection=$_POST['socketconnection'];
$NumOfsocks=$_POST['NumOfsocks'];


?>	
		
<?php

$query=mysql_query( "INSERT INTO Product VALUES ('{$productId}','{$vendorPartNum}','{$vendorPartDescription}','{$vendorId}',$price,$pOrderNum)",$connection);
$query1=mysql_query("INSERT INTO Powersupplyunit VALUES( '{$productId}',{$maxload},'{$socketconnection}',{$NumOfsocks})",$connection);
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