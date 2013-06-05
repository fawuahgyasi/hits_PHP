
						<h2>Prodcuts</h2>
						
					<?php	$id=$_GET['id'];
						
		 echo "<form method=\"post\" action=\"{$id}\">"; ?>
						<label>Product Id:<input type="text" name="productId"></label><br>
						<label for="vendorId">Vendor Id:</label>                     
                  <select  name="vendorId">
                        <?php 
							$result=mysql_query("select distinct vendorId from Vendor",$connection);
							if(!$result){
								die("Database selection failed:" .mysql_error());}
								
							?>
							<?php while($row=mysql_fetch_array($result)){ echo "<option value=\"{$row[0]}\">{$row[0]}</option>";}?>
                       
                        <option value="s" selected >Select Vendor Id</option>
                    </select><br>
						<label>Vendor Part No:<input type="text" name="vendorPartNum"></label><br>
						<label>Vendor Part Description:<input type="text" name="vendorPartDescription"></label><br>
						<label>Price ($):<input type="text" name="price"></label><br>
						<label for="pOrderNum">Purchase Order No.:</label>
						<select  name="pOrderNum">
						
                        <?php 
						$result=mysql_query("select distinct pOrderNum from PurchaseOrder",$connection);
						if(!$result){
							die("Database selection failed:" .mysql_error());}
							
						?>
						<?php while($row=mysql_fetch_array($result)){ echo "<option value=\"{$row[0]}\">{$row[0]}</option>";}?>
                    <option value="s" selected >Select Purchase Order Number</option>
                    </select><br>
                       <label for="supplydate">Date:</label><input name="supplydate" type="date"><br>                  
              
               <hr>
