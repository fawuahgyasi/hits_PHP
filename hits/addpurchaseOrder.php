<?php ob_start();?>					

<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<?php include("includes/header.php"); ?>
<?php
$pOrderNum=$_POST['pOrderNum'];
$dateOfPurchase=$_POST['dateOfPurchase'];
$typeOfPurchase=$_POST['typeOfPurchase'];
$totalCost=$_POST['totalCost'];
?>			
<?php
$query1=mysql_query( "INSERT INTO purchaseorder VALUES ('{$pOrderNum}','{$dateOfPurchase}','{$typeOfPurchase}','{$totalCost}')",$connection);

if($query1 ){
	
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