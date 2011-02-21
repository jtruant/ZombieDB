<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<head>
<title>Suggest information on a weapon for your fellow survivors</title>
</head>
<!-- start header -->
<?php
	include 'submissionHeader.php';
	include 'dbconnect.php';
?>
<!-- end header -->
<!-- start page -->
<div id="page">
	<!-- start content -->
	
	
	
	<div id="content">
		<div class="post">
		
		<p><b>Provide us(and by extension, your fellow survivors) with a little information regarding a tool
	for agressive negotiation with the ambassadors of the undead. Please specify name, type(firearm,blade,explosive,etc)
	and the other requested information below.</b></p>
	<BR>
	<BR>
<form>  
<p><label for="weaponName">Weapon Name:</label> <input type="text" name=weaponName id="weaponName"/></p>
<p><label for="weaponType">Weapon Type:</label><input type="text" name=weaponType id="weaponType"/></p>
<p><label for="weaponProvider">Weapon Provider:</label> <input type="text" name=weaponProvider id="weaponProvider"/></p>
</br>

Weapon Usage Info:<BR>
<TEXTAREA NAME="weaponUsage" COLS=40 ROWS=6>

</TEXTAREA></p>

Weapon Maintenance:<BR>
<TEXTAREA NAME="weaponMain" COLS=40 ROWS=6>

</TEXTAREA></p>

<tr><td>Weapon Durability:</td><td>1<input type="range" name="weaponDurability" min="1" max="100" step="5" value="5"/>100</td></tr>

<p class ="submit"><input type ="submit" value="Submit" />
</form>
			</div>
		</div>
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	<?php
		include "sidebar.php";
	?>
	<!-- end sidebar -->
</div>
</div>
<!-- end page -->

