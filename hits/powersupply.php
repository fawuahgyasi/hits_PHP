<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<?php include("includes/header.php"); ?>
<?php include("includes/header1.php");?>	



<h2>Power Supply</h2>


<label>Maxmum Load(W):<input type="text" name="maxload"></label><br>

<label>Socket Connection Type:<input type="text" name="socketconnection"></label><br>


<label for="NumOfsocks">No. Of Sockets:</label>
<select name="NumOfsocks">
<?php for($i=1;$i<5;$i++){echo "<option value={$i} >{$i}</option>";}?>
                  <option value="s" selected >Select No of sockets</option>
                    </select><br>
                    
                     <input type="submit" value="Add Prodcut">                                             
                   
	 </form>                   
	 <br>
<br>
<a href="blank.php">Cancel</a>

<?php include("includes/footer.php");?>