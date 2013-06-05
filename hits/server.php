<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<?php include("includes/header.php"); ?>
<?php include("includes/header1.php");?>	



<h2>Server</h2>

<label for="numOfCpu">No. Of CPU Sockets:</label>
						<select  name="numOfCpu">
                  <option value=1>1</option>
                  <option value=2>2</option>
                  <option value=4>4</option>
                  <option value=8>8</option>
                  <option value="s" selected >Select No. of CPU Sockets</option>
                    </select><br>    


<label for="numOfHdd">No. of Hard drives:</label>
						<select  name="numOfHdd">
                  <?php for($i=1;$i<17;$i++){echo "<option value={$i} >{$i}</option>";}?>
                  <option value="s" selected >Select No. of Hard drives</option>
                    </select><br>    

<label for="numOfMS">No. of Memory Slots:</label>
						<select  name="numOfMS">
                  <?php for($i=1;$i<97;$i++){echo "<option value={$i} >{$i}</option>";}?>
                  <option value="s" selected >Select No. of Memory Slots</option>
                    </select><br>

<label for="numOfOB">No. of Optical Bays:</label>
						<select  name="numOfOB">
                  <?php for($i=1;$i<2;$i++){echo "<option value={$i} >{$i}</option>";}?>
                  <option value="s" selected >Select No. of Optical Bays</option>
                    </select><br>
                    
<label for="numOfPCI">No. of PCI slots:</label>
						<select  name="numOfPCI">
                  <?php for($i=1;$i<9;$i++){echo "<option value={$i} >{$i}</option>";}?>
                  <option value="s" selected >Select No. of PCI slots</option>
                    </select><br>
                    
 <label for="numOfPSB">No. of Power Supply Bay:</label>
						<select  name="numOfPSB">
                  <?php for($i=1;$i<3;$i++){echo "<option value={$i} >{$i}</option>";}?>
                  <option value="s" selected >Select No. of Power Supply Bay</option>
                    </select><br>
  
  <label for="numOfLOM">No. of Power LOM adapters:</label>
						<select  name="numOfLOM">
                  <?php for($i=1;$i<3;$i++){echo "<option value={$i} >{$i}</option>";}?>
                  <option value="s" selected >Select No. of LOM adapters</option>
                    </select><br>
                  
  <label for="numOfMgmt">No. of Power Management adapters:</label>
						<select  name="numOfMgmt">
                  <?php for($i=0;$i<2;$i++){echo "<option value={$i}>{$i}</option>";}?>
                  <option value="s" selected >Select No. of management adapters</option>
                    </select><br>
                    
   <label for="size">Size(RU):</label>
						<select  name="size">
                  <?php for($i=1;$i<5;$i++){echo "<option value={$i} >{$i}</option>";}?>
                  <option value="s" selected >Select No. of LOM adapters</option>
                    </select><br>  
      <input type="submit" value="Add Prodcut">                                             
               
   </form>
   
   <br>
<br>
<a href="blank.php">Cancel</a>

   
   <?php include("includes/footer.php");?>