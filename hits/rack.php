<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<?php include("includes/header.php"); ?>
<?php include("includes/header1.php");?>	


<h2>Rack</h2>

 

<label for="width">Width(inches):</label>
						<select  name="width">
                  <?php for($i=1;$i<49;$i++){echo "<option value={$i} >{$i}</option>";}?>
                  <option value="s" selected >Select Width</option>
                    </select><br>    

<label for="depth">Depth(inches):</label>
						<select  name="depth">
                  <?php for($i=1;$i<49;$i++){echo "<option value={$i} >{$i}</option>";}?>
                  <option value="s" selected >Select Depth</option>
                    </select><br>   
                    
<label for="height">Height(inches):</label>
						<select  name="height">
                  <?php for($i=1;$i<85;$i++){echo "<option value={$i} >{$i}</option>";}?>
                  <option value="s" selected >Select Height</option>
                    </select><br>
                    
 <label for="ru">Rack Units(RU):</label>
						<select  name="ru">
                  <?php for($i=1;$i<51;$i++){echo "<option value={$i} >{$i}</option>";}?>
                  <option value="s" selected >Select Rack Unit</option>
                    </select><br>
                    
 <label for="sideBay">Side Bays(RU):</label>
						<select  name="sideBay">
                  <?php for($i=1;$i<9;$i++){echo "<option value={$i} >{$i}</option>";}?>
                  <option value="s" selected >Select Side Bay</option>
                    </select><br> 
                    <?php echo $_GET['id'];?>
                    <input type="submit" value="Add Prodcut">                                             
   </form> 
   
   <br>
<br>
<a href="blank.php">Cancel</a>
                                             
            
<?php include("includes/footer.php");?>