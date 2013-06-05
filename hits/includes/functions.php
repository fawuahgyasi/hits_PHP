 
<?php
//my basic funtions
function chasis(){
	
    echo  '<h2>Chasis</h2><br>';
     echo '<form method="get" action="input">';
            
          echo ' <label for="numOfmgtBays">No. of Management Bays:</label><select  id="numOfmgtBays"> <?php for($i=0;$i<3;$i++){echo "<option value=\"i\" >{$i}</option>"?'; 
          echo '>option value="s" selected >Select Purchase Order Number</option></select><br>';

                     
            
          echo ' </form>';
  }
?>