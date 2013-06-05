<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<?php include("includes/header.php"); ?>
<?php include("includes/header1.php");?>	



<h2>Memory</h2>

<label for="Type">Type:</label>
<select name="Type">
                  <option value="DDR2"  >DDR2</option>
                  <option value="DDR3"  >DDR3</option>
                  <option value="s" selected >Select Memory Type</option>
                    </select><br>
                    
                    
<label for="busSpeed">Bus Speed(MB):</label>
<select name="busSpeed">
<?php for($i=128;$i<4097;$i=$i*2){echo "<option value={$i} >{$i}</option>";}?>
                  <option value="s" selected >Select Capacity</option>
                    </select><br>
                    
<label for="capacity">Capacity(MB):</label>
<select name="capcity">
<?php for($i=512;$i<65537;$i=$i*2){echo "<option value={$i} >{$i}</option>";}?>
                  <option value="s" selected >Select Capacity</option>
                    </select><br>
                     <input type="submit" value="Add Prodcut">                                             
                   
                    
</form>


<br>
<br>
<a href="blank.php">Cancel</a>

<?php include("includes/footer.php");?>