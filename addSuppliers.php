﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Add Customers | "Xhesi" Shop Inventory Management SystemSystem</title>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
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
  <div class="dock-container">
  <a class="dock-item" href="index1.php"><img src="images/home.png" alt="home" /><span>Home</span></a> 
  <a class="dock-item" href="products.php"><img src="images/products.png" alt="contact" /><span>Products</span></a> 
  <a class="dock-item" href="customers.php"><img src="images/customer.png" alt="portfolio" /><span>Customers</span></a> 
  <a class="dock-item" href="employers.php"><img src="images/employer.png" alt="music" /><span>Employers</span></a> 
  <a class="dock-item" href="suppliers.php"><img src="images/supplier.png" alt="video" /><span>Suppliers</span></a> 
  <a class="dock-item" href="generalReport.php"><img src="images/report.png" alt="history" /><span>Report</span></a> 
</div>
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
				<li><a href="addSuppliers.html">Add suppliers</a></li>
				<li><a href="deleteSuppliers.html">Delete suppliers</a></li>
				<li><a href="modifySuppliers.html">Update suppliers</a></li>
				<li><a href="listSuppliers.php">List suppliers</a></li>
				

			</ul>
				
			</div>
			<div id="stuff">
            <?php

$con = mysqli_connect("localhost","root","","xhesishopinventory" );


$sql="INSERT INTO suppliers (supplierID, supplierName, supplierGender, supplierAddress, supplierCity, supplierState, supplierEmail,supplierPhone) VALUES ('$_POST[supplierID]','$_POST[supplierName]','$_POST[supplierGender]','$_POST[supplierAddress]','$_POST[supplierCity]','$_POST[supplierState]','$_POST[supplierEmail]','$_POST[supplierPhone]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error());
  }
echo "<b>One supplier is stored into database!</b>";

mysqli_close($con)

?> <img src="images/smile.jpg" />

			</div>
            
		</div>
		<div id="bottom">
		</div>
	</div>
</body>
</html>