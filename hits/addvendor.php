<?php ob_start(); ?>


<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<?php include("includes/header.php"); ?>

<?php	
$vendorId=$_POST['vendorId'];	
$companyname=$_POST['companyname'];
$tel=$_POST['tel'];	
$fname=$_POST['fname'];	
$lname=$_POST['lname'];	
$email=$_POST['email'];
$tel1=$_POST['tel1'];

?>

<?php
$query=mysql_query( "INSERT INTO vendor VALUES ('{$vendorId}','{$companyname}','{$tel}')",$connection);
$query1=mysql_query( "INSERT INTO vendorsaleperson VALUES ('{$fname}','{$lname}','{$email}','{$tel1}','{$vendorId}')",$connection);

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