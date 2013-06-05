<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<?php include("includes/header.php"); ?>
<?php include("includes/header1.php");?>			               
               
               <h2>Chasis</h2>
            <label for="numOfmgtBays">No. of Management Bays:</label>
						<select  name="numOfmgtBays">
                  <?php for($i=0;$i<3;$i++){echo "<option value={$i} >{$i}</option>";}?>
                  <option value="s" selected >Select Purchase Order Number</option>
                    </select><br>
            
            
            <label for="numOfPB">No. of Power Bays:</label>
						<select  name="numOfPB">
                  <?php for($i=0;$i<5;$i++){echo "<option value={$i} >{$i}</option>";}?>
                  <option value="s" selected >Select No. of Power Bays</option>
                    </select><br>
                    
                    
              <label for="numOfFB">No. of Fun Bays:</label>
						<select  name="numOfFB">
                  <?php for($i=0;$i<5;$i++){echo "<option value={$i} >{$i}</option>";}?>
                  <option value="s" selected >Select No. of Fun Bays</option>
                    </select><br>    
                    
                    
                    
              <label for="numOfSwB">No. of Switch Bays:</label>
						<select  name="numOfSwB">
                  <?php for($i=0;$i<17;$i++){echo "<option value={$i} >{$i}</option>";}?>
                  <option value="s" selected >Select No. of Switch Bays</option>
                    </select><br> 
                    
                    
              <label for="numOfSvB">No. of Server Bays:</label>
						<select  name="numOfSvB">
                  <?php for($i=0;$i<17;$i++){echo "<option value={$i} >{$i}</option>";}?>
                  <option value="s" selected >Select No. of Server Bays</option>
                    </select><br> 
                    
               <label for="sizeInRackUnits">Size(in Rack Units):</label>
						<select  name="sizeInRackUnits">
                  <?php for($i=1;$i<31;$i++){echo "<option value={$i} >{$i}</option>";}?>
                  <option value="s" selected >Select Size</option>
                    </select><br>     
                    
                    
             <label for="depth">Depth(inches):</label>
						<select  name="depth">
                  <?php for($i=1;$i<49;$i++){echo "<option value={$i} >{$i}</option>";}?>
                  <option value="s" selected >Select Depth</option>
                    </select><br>   
                    
                            <input type="submit" value="Add Prodcut">                                             
       
            </form>
           <br>
<br>
<a href="blank.php">Cancel</a>
 
            
						
					
<?php include("includes/footer.php");?>