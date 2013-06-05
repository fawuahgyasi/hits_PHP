<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<?php include("includes/header.php"); ?>
<?php include("includes/header1.php");?>	



<h2>CPU</h2>

<label>Vendor Processor Model No.:<input type="text" name="modelNum"></label><br>
<label for="NumOfCore">No. of Cores:</label>
<select name="NumofCore">
<?php for($i=1;$i<97;$i=$i+2){echo "<option value={$i} >{$i}</option>";}?>
                  <option value="s" selected >Select No. of Optical Bays</option>
                    </select><br>
                    
<label for="clockspeed">Clock Speed(MHz):</label>
<select name="clockspeed">
<?php for($i=256;$i<4097;$i=$i*2){echo "<option value={$i} >{$i}</option>";}?>
                  <option value="s" selected >Select Clock Speed</option>
                    </select><br>
                    
<label for="MemBusSpeed">Memory Bus Speed(MHz):</label>
<select name="MemBusSpeed">
<?php for($i=256;$i<4097;$i=$i*2){echo "<option value={$i} >{$i}</option>";}?>
                  <option value="s" selected >Select Memory Bus Speed</option>
                    </select><br>
                    <input type="submit" value="Add Prodcut">                                             

</form>
<br>
<br>
<a href="blank.php">Cancel</a>

<?php include("includes/footer.php");?>