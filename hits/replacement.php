<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<?php include("includes/header.php"); ?>


<h2>Replacement</h2>

<form method="post" action="addreplacement.php">

<label for="productId">Product Id:</label>
<select name="productId">
<?php 
							$result=mysql_query("select distinct productId from Product",$connection);
							if(!$result){
								die("Database selection failed:" .mysql_error());}
								
							?>
							<?php while($row=mysql_fetch_array($result)){ echo "<option value=\"{$row[0]}\">{$row[0]}</option>";}?>
                       
                  <option value="s" selected >Select ProductID</option>
                    </select><br>
<label>New ProductId:<input type="text" name="newproductID"></label><br>
<label>RMA ref.No.:<input type="text" name="rmaRefNo"></label><br> 
<label for="dd">Date:</label><input name="dd" type="date">
                   
<label for="vendorId">VendorId:</label>
<select name="vendorId">
<?php 
							$result=mysql_query("select distinct vendorId from Vendor",$connection);
							if(!$result){
								die("Database selection failed:" .mysql_error());}
								
							?>
							<?php while($row=mysql_fetch_array($result)){ echo "<option value=\"{$row[0]}\">{$row[0]}</option>";}?>
                       
                  <option value="s" selected >Select vendorId</option>
                    </select><br>                    
                    <input type="submit" value="Replace">                                             

</form>
<br>
<br>
<a href="blank.php">Cancel</a>


<?php include("includes/footer.php");?>