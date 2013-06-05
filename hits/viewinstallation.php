<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<?php include("includes/header.php"); ?>
			
<h2>Viewing Products</h2>

<form method="post" action="productview.php">


<label for="Type">Select Type:</label>
<select name="Type">

                  <option value=0>Rack</option>
                  <option value=1>Server</option>
                  <option value=2>CPU</option>
                  <option value=3>Hard Disk Drive</option>
                  <option value=4>Memory</option>
                  <option value=5>Interface Card</option>
                  <option value=6>Power Supply Unit</option>
                  <option value=7>Chasis</option>
                  <option value=8>All</option>
                  
                 
                  </select><br>

<input type="submit"   value ="send">
</form>
			
					
<?php include("includes/footer.php");?>