<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<?php include("includes/header.php"); ?>


<h2>Vendor</h2>

<form method="post" action="addvendor.php">

<label>Vendor Id:<input type="text" name="vendorId"></label>
<label>Company Name:<input type="text" name="companyname"></label>
<label for="tel">Support line:</label><input name="tel" type="tel"><br>
<fieldset><legend>Sales Person</legend>
<label>First Name:<input type="text" name="fname"></label>
<label>Last Name:<input type="text" name="lname"></label>
<label for="email">Email:</label><input name="email" type="email"><br>
<label for="tel1">Phone:</label><input name="tel1" type="tel">
</fieldset>


                    <input type="submit" value="Submit">                                             


</form>

<br>
<br>
<a href="blank.php">Cancel</a>

<?php include("includes/footer.php");?>