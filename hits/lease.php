<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<?php include("includes/header.php"); ?>


<h2>Lease</h2>

<form method="post" action="addlease.php">

<fieldset>
<legend>Lease</legend>
<div><input type="radio" name="option1" value=1><br>
<label>ProductId:<input type="text" name="prodcutId"></lable><br>
<label for="vendorId">Vendor</label>
<select name="vendorId">
<?php 
							$result=mysql_query("select distinct vendorId from Vendor",$connection);
							if(!$result){
								die("Database selection failed:" .mysql_error());}
								
							?>
							<?php while($row=mysql_fetch_array($result)){ echo "<option value=\"{$row[0]}\">{$row[0]}</option>";}?>
                       
                  <option value="s" selected >Select vendorId</option>
                    </select><br>   
                    
<label for="startDate">Start Date:</label><input name="startDate" type="date"><br>
<label for="endDate">End Date:</label><input name="endDate" type="date"><br>
<label>Support Ref.:<input type="text" name="supportReference"></lable><br>


                     <input type="submit" value="Submit"> <br>                                            
   </div>
   
<div><br><input type="radio" name="option1" value=1><label for="upload">Upload:</label><input id="upload" type="file"></div>
</fieldset>
</form>
<br>
<br>
<a href="blank.php">Cancel</a>

 
<?php include("includes/footer.php");?>                  