<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<meta charset="UTF-8">
<title>FreightBook</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/upperair/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="w3.css">
<script src="/upperair/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="include.css">
<script type="text/javascript">
/*
$(document).ready(function(){

});
*/
</script>
</head>
<body>
 <!-- topbar -->
<div class="navbar">
	<a href="fault_home.html" title="Home" class="w3-blue">
	<i class="fa fa-home"> Home</i></a>
	<a href="add_fault_page.php" title="Add a Fault">
	<i class="fa fa-ambulance"> Menu</i></a>
  <div class="dropdown">
    <button class="dropbtn">Sites 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
	<a href="add_site.html" title="Add a Site">
	<i class="fa fa-plus"> Add Site</i></a>
	<a href="edit_site_name.php" title="Add a Site">
	<i class="fa fa-magic"> Edit Site Name</i></a>
	<a href="edit_site_num.php" title="Add a Site">
	<i class="fa fa-magic"> Edit Site Number</i></a>
    </div>
  </div>
	<a href="instructions.html" title="Instructions">
	<i class="fa fa-question-circle"> Instructions</i></a>
</div><br>

<div class="w3-container"> 
	<div class="w3-card-4 w3-dark-grey w3-padding">
	<h2><font color="black">Freight Book V1.0</font></h2>
		<form id="add_feight" action="add_freight.php" target="freight_frame" method="POST">
			<br>
                        Con Note #:
                        <input name="con_note" type="text">
                                                
			Company:
			<select name="company">
				<option value="tnt">TNT</option>
				<option value="freight_shop">Freight Shop</option>				
			</select>
			
			Destination:
                        <input name="destination" type="text">
			
			Movement Number:
                        <input name="movement" type="text">
                        <br><br>
                        
                        Weight:
                        <input name="weight" type="number">
                        
                        Number of items:
                        <input name="num_items" type="number">
                        
                        Sender:
                        <input name="sender" type="text">
                        <br><br>
                        
                        Details:
                        <textarea rows="4" cols="50" id="details" name="details"></textarea>

			<div class="w3-container w3-margin w3-text-orange">
			<button class="btn" type="submit"><i class="fa fa-cogs"></i> Add Freight</button>
			</div>
		</form>	
	</div><br>
</div>
<div class="w3-card-4">
    <iframe name="fault_frame" id="freight_frame" height="1400px" width="100%"></iframe>
</div>
	
</body>
</html>
