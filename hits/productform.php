<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<?php include("includes/header.php"); ?>
			<table id="structure">
				<tr>
					<td id="navigation">
						<?php 
$result=mysql_query("show tables",$connection);
if(!$result){
	die("Database selection failed:" .mysql_error());}
	
?>
<ul class="subjects">
<?php while($row=mysql_fetch_array($result)){ echo "<li>{$row[0]}</li>";	}?>
</ul>
					</td>
					<td id="page">
						<h2>Prodcuts</h2>
			 <form method="get" action="input">
						<label>Product Id:<input type="text"></label><br>
						<label for="vendorId">Vendor Id:</label>                     
                  <select  id="vendorId">
                        
                       // <option value="as">Ashante</option>
                        <option value="s" selected >Select Vendor Id</option>
                    </select><br>
						<label>Vendor Part No:<input type="text"></label><br>
						<label>Vendor Part Description:<input type="text"></label><br>
						<label>Price ($):<input type="text"></label><br>
						<label for="pOrderNum">Purchase Order No.:</label>
						<select  id="pOrderNum">
                        
                       // <option value="as">Ashante</option>
                        <option value="s" selected >Select Purchase Order Number</option>
                    </select><br>
                    <label for="type">Type:</label>
						<select  id="type">
                        
                       // <option value="as">Ashante</option>
                        <option value="s" selected >Select Type</option>
                    </select><br>
               </form>
               <hr>
               
               
               <h2>Chasis</h2>
            <form method="get" action="input">
            <label for="numOfmgtBays">No. of Management Bays:</label>
						<select  id="numOfmgtBays">
                  <?php for($i=0;$i<3;$i++){echo "<option value=\"i\" >{$i}</option>";}?>
                  <option value="s" selected >Select Purchase Order Number</option>
                    </select><br>
            
            
            <label for="numOfPB">No. of Power Bays:</label>
						<select  id="numOfPB">
                  <?php for($i=0;$i<5;$i++){echo "<option value=\"i\" >{$i}</option>";}?>
                  <option value="s" selected >Select No. of Power Bays</option>
                    </select><br>
                    
                    
              <label for="numOfFB">No. of Fun Bays:</label>
						<select  id="numOfFB">
                  <?php for($i=0;$i<5;$i++){echo "<option value=\"i\" >{$i}</option>";}?>
                  <option value="s" selected >Select No. of Fun Bays</option>
                    </select><br>    
                    
                    
                    
              <label for="numOfSwB">No. of Switch Bays:</label>
						<select  id="numOfSwB">
                  <?php for($i=0;$i<17;$i++){echo "<option value=\"i\" >{$i}</option>";}?>
                  <option value="s" selected >Select No. of Switch Bays</option>
                    </select><br> 
                    
                    
              <label for="numOfSvB">No. of Server Bays:</label>
						<select  id="numOfSvB">
                  <?php for($i=0;$i<17;$i++){echo "<option value=\"i\" >{$i}</option>";}?>
                  <option value="s" selected >Select No. of Server Bays</option>
                    </select><br> 
                    
               <label for="sizeInRackUnits">Size(in Rack Units):</label>
						<select  id="sizeInRackUnits">
                  <?php for($i=1;$i<31;$i++){echo "<option value=\"i\" >{$i}</option>";}?>
                  <option value="s" selected >Select Size</option>
                    </select><br>     
                    
                    
             <label for="depth">Depth(inches):</label>
						<select  id="depth">
                  <?php for($i=1;$i<49;$i++){echo "<option value=\"i\" >{$i}</option>";}?>
                  <option value="s" selected >Select Depth</option>
                    </select><br>          
            </form>
            
            
						
					
<?php include("includes/footer.php");?>