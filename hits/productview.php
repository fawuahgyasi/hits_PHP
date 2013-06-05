<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<?php include("includes/header.php"); ?>
<?php
$Type=$_POST['Type'];
?>
<?php
switch($Type)
{
	case 0:
	     { 
$result=mysql_query("select * from rack",$connection);
if(!$result){
	die("Database selection failed:" .mysql_error());}
	



echo "<b>"."Racks  "."</b><br>";
echo "<table border=2 cellspacing=2 cellpadding=2>";
echo "<tr><th>Product ID</th><th>Witdth</th><th>Depth</th><th>Height</th><th>Rack Units</th><th>Side Bays</th></tr>";

 while($row=mysql_fetch_array($result))
{ 
	echo "<tr>";
	echo "<td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td><td>{$row[3]}</td><td>{$row[4]}</td><td>{$row[5]}</td>";	
    echo "</tr>";
}  
echo "</table>";break;
	     }

	case 1:
	{ 
$result=mysql_query("select * from server",$connection);
if(!$result){
	die("Database selection failed:" .mysql_error());}
	



echo "<b>"."Servers  "."</b><br>";
echo "<table border=2 cellspacing=2 cellpadding=2>";
echo "<tr><th>Product ID</th><th>CPU</th><th>Hard Drive Bays</th><th>Optical Bays</th><th>PCI</th><th>Power Supply Units</th><th>LOM Adapters</th><th>Management Adapters</th><th>Size(RU)</th></tr>";

 while($row=mysql_fetch_array($result))
{ 
	echo "<tr>";
	echo "<td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td><td>{$row[3]}</td><td>{$row[4]}</td><td>{$row[5]}</td><td>{$row[6]}</td><td>{$row[7]}</td><td>{$row[8]}</td>";	
    echo "</tr>";
}  
echo "</table>";
	     }break;

	case 2:
	{ 
$result=mysql_query("select * from cpu",$connection);
if(!$result){
	die("Database selection failed:" .mysql_error());}
	



echo "<b>"."CPU  "."</b><br>";
echo "<table border=2 cellspacing=2 cellpadding=2>";
echo "<tr><th>Product ID</th><th>Model No.</th><th>Cores</th><th>Clock Speed</th><th>Memory Bus Speed</th></tr>";

 while($row=mysql_fetch_array($result))
{ 
	echo "<tr>";
	echo "<td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td><td>{$row[3]}</td><td>{$row[4]}</td>";	
    echo "</tr>";
}  
echo "</table>";break;
	     }

	case 3:
	{ 
$result=mysql_query("select * from hdd",$connection);
if(!$result){
	die("Database selection failed:" .mysql_error());}
	



echo "<b>"."Hard Disk Drives  "."</b><br>";
echo "<table border=2 cellspacing=2 cellpadding=2>";
echo "<tr><th>Product ID</th><th>Interface Type</th><th>Rotation Speed</th><th>Capacity</th></tr>";

 while($row=mysql_fetch_array($result))
{ 
	echo "<tr>";
	echo "<td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td><td>{$row[3]}</td>";	
    echo "</tr>";
}  
echo "</table>";break;
	     }

	case 4:
	{ 
$result=mysql_query("select * from memory",$connection);
if(!$result){
	die("Database selection failed:" .mysql_error());}
	



echo "<b>"."Memory  "."</b><br>";
echo "<table border=2 cellspacing=2 cellpadding=2>";
echo "<tr><th>Product ID</th><th>Type</th><th>Bus Speed</th><th>Capacity</th></tr>";

 while($row=mysql_fetch_array($result))
{ 
	echo "<tr>";
	echo "<td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td><td>{$row[3]}</td>";	
    echo "</tr>";
}  
echo "</table>";break;
	     }

	case 5:
	{ 
$result=mysql_query("select * from interfacecard",$connection);
if(!$result){
	die("Database selection failed:" .mysql_error());}
	



echo "<b>"."Interface Cards  "."</b><br>";
echo "<table border=2 cellspacing=2 cellpadding=2>";
echo "<tr><th>Product ID</th><th>Connnectory Type</th><th>Bus Speed</th><th>No.of Port</th></tr>";

 while($row=mysql_fetch_array($result))
{ 
	echo "<tr>";
	echo "<td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td><td>{$row[3]}</td>";	
    echo "</tr>";
}  
echo "</table>";break;
	     }

	case 6:
	{ 
$result=mysql_query("select * from powersupplyunit",$connection);
if(!$result){
	die("Database selection failed:" .mysql_error());}
	



echo "<b>"."Power Supply Units  "."</b><br>";
echo "<table border=2 cellspacing=2 cellpadding=2>";
echo "<tr><th>Product ID</th><th>Rate</th><th>Socket Type</th><th>No. of Sockets</th></tr>";

 while($row=mysql_fetch_array($result))
{ 
	echo "<tr>";
	echo "<td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td><td>{$row[3]}</td>";	
    echo "</tr>";
}  
echo "</table>";break;
	     }

	case 7:
	{ 
$result=mysql_query("select * from chassis",$connection);
if(!$result){
	die("Database selection failed:" .mysql_error());}
	



echo "<b>"."Chassis  "."</b><br>";
echo "<table border=2 cellspacing=2 cellpadding=2>";
echo "<tr><th>Product ID</th><th>Management Bays</th><th>Power Bays</th><th>Fan Bays</th><th>Switch Bays</th><th>Servers Bays</th><th>Size</th></tr>";

 while($row=mysql_fetch_array($result))
{ 
	echo "<tr>";
	echo "<td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td><td>{$row[3]}</td><td>{$row[4]}</td><td>{$row[5]}</td><td>{$row[6]}</td><td>{$row[7]}</td>";	
    echo "</tr>";
}  
echo "</table>";break;
	     }

	case 8:
	{ 
$result=mysql_query("select * from product order by productId",$connection);
if(!$result){
	die("Database selection failed:" .mysql_error());}
	



echo "<b>"."All Products  "."</b><br>";
echo "<table border=2 cellspacing=2 cellpadding=2>";
echo "<tr><th>Product ID</th><th>Vendor Part Number</th><th>Vendor Part Description</th><th>Vendor Id</th><th>Price</th><th>Purchase Order Number</th></tr>";

 while($row=mysql_fetch_array($result))
{ 
	echo "<tr>";
	echo "<td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td><td>{$row[3]}</td><td>{$row[4]}</td><td>{$row[5]}</td>";	
    echo "</tr>";
}  
echo "</table>";
break;
	     }
}
	
	?>
	
<a href="blank.php">Cancel</a>



<?php include("includes/footer.php");?>