<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<?php include("includes/header.php"); ?>
			<table id="structure">
				<tr>
					<td id="navigation">
						<?php 
$result=mysql_query("show tables",$connection);
if(!$result){
	die("Database selection failed:" .mysql_error());}
	
?>
<ul class="subjects">
<?php

while($row=mysql_fetch_array($result)){

echo "<li>{$row[0]}</li>";	
}
?>
</ul>
					</td>
					<td id="page">
						<h2>Content Area</h2>
						<?php chasis();?>
						
						
					</td>
				</tr>
			</table>
<?php include("includes/footer.php");?>