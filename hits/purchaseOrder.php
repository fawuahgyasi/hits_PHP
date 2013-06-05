<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<?php include("includes/header.php"); ?>
	


<h2>Purchase Order</h2>

<form method="post" action="addpurchaseOrder.php">

<label>Purchase Order No.:<input type="text" name="pOrderNum"></label><br>
<label for="dateOfPurchase">Date:<input name="dateOfPurchase" type="date"></label><br>
<label for="typeOfPurchase">Type:</label>
<select name="typeOfPurchase">
                  <option value="P"  >Purchase</option>
                  <option value="L"  >Lease</option>
                  <option value="s" selected >Select Type</option>
                    </select><br>
<label>Budget:<input type="text" name="totalCost"></label><br>


                    <input type="submit" value="Make Order">                                             

</form>
<br>
<br>
<a href="blank.php">Cancel</a>

<?php include("includes/footer.php");?>