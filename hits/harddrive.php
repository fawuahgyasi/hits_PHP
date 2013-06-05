<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<?php include("includes/header.php"); ?>
<?php include("includes/header1.php");?>	



<h2>Hard Drive</h2>

<label for="InterfaceType">Interface Type:</label>
<select name="InterfaceType">
                  <option value="SAS"  >SAS</option>
                  <option value="SATA"  >SATA</option>
                  <option value="s" selected >Select Interface Type</option>
                    </select><br>
                    
                    
 <label>Rotational Speed(RPM):<input type="text" name="RotaionalSpd"></label><br>
<label for="capacity">Capacity(GB):</label>
<select name="capcity">
<?php for($i=24;$i<49153;$i=$i*2){echo "<option value={$i} >{$i}</option>";}?>
                  <option value="s" selected >Select Capacity</option>
                    </select><br>
                          <input type="submit" value="Add Prodcut">                                             
              
</form>

<br>
<br>
<a href="blank.php">Cancel</a>

<?php include("includes/footer.php");?>