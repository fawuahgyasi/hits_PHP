<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<?php include("includes/header.php"); ?>
			
<?php
$Id=$_GET['id'];

				
			
	switch($Id)
	
	{
		case 0:		
			{
	$result=mysql_query("select * from installation",$connection);
if(!$result){
	die("Database selection failed:" .mysql_error());}
	



echo "<b>"."INSTALLATIONS  "."</b><br>";
echo "<table border=2 cellspacing=2 cellpadding=2>";
echo "<tr><th>Product ID</th><th>Location</th><th>Date of Installation</th></tr>";

 while($row=mysql_fetch_array($result))
{ 
	echo "<tr>";
	echo "<td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td>";	
    echo "</tr>";
}  
echo "</table>";break;
			}
			
		case 1:
		{
		$result=mysql_query("select * from removal",$connection);
if(!$result){
	die("Database selection failed:" .mysql_error());}
	



echo "<b>"."REMOVALS  "."</b><br>";
echo "<table border=2 cellspacing=2 cellpadding=2>";
echo "<tr><th>Product ID</th><th>Date of Removal</th><th>Location of removal</th></tr>";

 while($row=mysql_fetch_array($result))
{ 
	echo "<tr>";
	echo "<td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td>";	
    echo "</tr>";
}  
echo "</table>";break;
		}
		
	case 2:
	{$result=mysql_query("select * from disposal",$connection);
if(!$result){
	die("Database selection failed:" .mysql_error());}
	



echo "<b>"."DISPOSALS  "."</b><br>";
echo "<table border=2 cellspacing=2 cellpadding=2>";
echo "<tr><th>Product ID</th><th>Date of Disposal</th></tr>";

 while($row=mysql_fetch_array($result))
{ 
	echo "<tr>";
	echo "<td>{$row[0]}</td><td>{$row[1]}</td>";	
    echo "</tr>";
}  
echo "</table>";break;
}
	case 3:
	{$result=mysql_query("select * from replacement",$connection);
if(!$result){
	die("Database selection failed:" .mysql_error());}
	



echo "<b>"."REPLACEMENTS  "."</b><br>";
echo "<table border=2 cellspacing=2 cellpadding=2>";
echo "<tr><th>Product ID</th><th>New ProductID</th><th>RMA reference No.</th><th>Date of Replacement</th><th>Vendor ID</th></tr>";

 while($row=mysql_fetch_array($result))
{ 
	echo "<tr>";
	echo "<td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td><td>{$row[3]}</td><td>{$row[4]}</td>";	
    echo "</tr>";
}  
echo "</table>";break;
}

case 4:
{
	$result=mysql_query("select * from returned",$connection);
if(!$result){
	die("Database selection failed:" .mysql_error());}
	



echo "<b>"."RETURNS  "."</b><br>";
echo "<table border=2 cellspacing=2 cellpadding=2>";
echo "<tr><th>Product ID</th><th>Vendor ID</th><th>Date of Return</th></tr>";

 while($row=mysql_fetch_array($result))
{ 
	echo "<tr>";
	echo "<td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td>";	
    echo "</tr>";
}  
echo "</table>";break;

	}
	case 5:
	{$result=mysql_query("select * from supplies",$connection);
if(!$result){
	die("Database selection failed:" .mysql_error());}
	



echo "<b>"."SUPPLIES  "."</b><br>";
echo "<table border=2 cellspacing=2 cellpadding=2>";
echo "<tr><th>Product ID</th><th>Vendor ID</th><th>Date of reciept </th></tr>";

 while($row=mysql_fetch_array($result))
{ 
	echo "<tr>";
	echo "<td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td>";	
    echo "</tr>";
}  
echo "</table>";break;
}

case 6:

{$result=mysql_query("select * from vendor",$connection);
if(!$result){
	die("Database selection failed:" .mysql_error());}
	



echo "<b>"."VENDORS  "."</b><br>";
echo "<table border=2 cellspacing=2 cellpadding=2>";
echo "<tr><th>Vendor ID</th><th>Name</th><th>Contact No.</th></tr>";

 while($row=mysql_fetch_array($result))
{ 
	echo "<tr>";
	echo "<td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td>";	
    echo "</tr>";
}  
echo "</table>";break;

	}
	case 7:
	{$result=mysql_query("select * from purchaseorder",$connection);
if(!$result){
	die("Database selection failed:" .mysql_error());}
	



echo "<b>"."PURCHASE ORDERS  "."</b><br>";
echo "<table border=2 cellspacing=2 cellpadding=2>";
echo "<tr><th>Order No.</th><th>Date of Purchase</th><th>Type</th><th>Budget</th></tr>";

 while($row=mysql_fetch_array($result))
{ 
	echo "<tr>";
	echo "<td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td><td>{$row[3]}</td>";	
    echo "</tr>";
}  
echo "</table>";break;

	}
	
	}
	?>
	<a href="blank.php">Cancel</a>
				
<?php include("includes/footer.php");?>