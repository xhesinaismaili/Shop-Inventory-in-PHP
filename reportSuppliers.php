﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Report suppliers | "Xhesi" Shop Inventory Management SystemSystem</title>
<link rel="stylesheet" type="text/css" href="style.css" />

<SCRIPT language="JavaScript" SRC="validation.js"></SCRIPT>
<SCRIPT language="JavaScript" SRC="startClock.js"></SCRIPT>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/interface.js"></script>


<link href="style1.css" rel="stylesheet" type="text/css" />


</head>
<body onLoad="startclock()">
	<div id="wrapper">
		<div id="top"><center>Prepared By Xhesi Ismaili</center>
		</div>
		<div id="content">
		<div id="header">
		</div>
<div class="dock" id="dock">
  <b><h2><font color="#000066"><center>"Xhesi" Shop Inventory Management SystemSystem!</center></font></h2></b>
</div>
<script type="text/javascript">

    $(document).ready(
		function () {
		    $('#dock').Fisheye(
				{
				    maxWidth: 50,
				    items: 'a',
				    itemsText: 'span',
				    container: '.dock-container',
				    itemWidth: 40,
				    proximity: 90,
				    halign: 'center'
				}
			)
		}
	);

</script>
			<div id="menu">
            
            <FORM name="clockform">
				<h2><font color="#5454AB">Current Time</font></h2> <INPUT TYPE="text" name="clockspot" size="15"><font size="3"><a href='logout.php'>Logout</a></font>
			</FORM>
			&nbsp;
            <ul>
				<li><a href="index1.php">Home</a></li>
				<li><a href="addSuppliers.html">Add Suppliers</a></li>
				<li><a href="deleteSuppliers.html">Delete Suppliers</a></li>
				<li><a href="modifySuppliers.html">Update Suppliers</a></li>
				<li><a href="listSuppliers.php">List Suppliers</a></li>
				

			</ul>
				
			</div>
			<div id="stuff">
            <table>
            <table>
            <tr>
            <div id="menu" align="center"><ul>
					<li><a href="#">   *** Report suppliers ***</a></li></ul></div>
                    <br/>
                    <br/>
                    <br/>
                                        
            </tr>
            </table>
            <table>
            <p><img src="images/intimoLogo.jpg" width="100"/></p>
            
<?php

$con = mysqli_connect("localhost","root","","xhesishopinventory" );


$res= "select count(*) from suppliers";
	$query=mysqli_query($con,$res);

	while($row = mysqli_fetch_array($query)){
		echo "<b>Total suppliers</b> of Xhesi Shop Inventory Management System= ".$row;
	}
	
	echo "<br/>";
	echo "<hr/>";

	
	?>
</table>
</table>

			</div>
            
		</div>
		<div id="bottom">
		</div>
	</div>
</body>
</html>