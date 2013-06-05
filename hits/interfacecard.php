<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<?php include("includes/header.php"); ?>
<?php include("includes/header1.php");?>	



<h2>Interface Card</h2>



<label>Connector Type:<input type="text" name="connectortype"></label><br>
<label>Bus Speed:<input type="text" name="busspd"></label><br>
<label for="NumOfports">No. Of Ports:</label>
<select name="NumOfports">
<?php for($i=1;$i<5;$i++){echo "<option value={$i} >{$i}</option>";}?>
                  <option value="s" selected >Select No of ports</option>
                    </select><br>
                      <input type="submit" value="Add Prodcut">                                             
                  
                    
 </form>  
 <br>
<br>
<a href="blank.php">Cancel</a>

 
                  
 <?php include("includes/footer.php");?>