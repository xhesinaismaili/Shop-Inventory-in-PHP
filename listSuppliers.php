<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>List Suppliers | "Xhesi" Shop Inventory Management SystemSystem</title>
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
			<div id="stuff" style="overflow: auto; width: 530px; height: 600px; ">
            <img src="images/supplierBanner.jpg" width="550" height="100" />
            
            <?php
$con = mysqli_connect("localhost","root","","xhesishopinventory" );



$result = mysqli_query($con,"SELECT * FROM suppliers");

echo "<table border=\"1\" bordercolor=\"#2A1FAA\" style=\" height: 150; \">";
echo "<tr>";
echo "<th>supplier ID</th>";
echo "<th>supplier Name</th>";
echo "<th>supplier Gender</th>";
echo "<th>supplier Address</th>";
echo "<th>supplier City</th>";
echo "<th>supplier State</th>";
echo "<th>supplier Email</th>";
echo "<th>supplier Phone</th>";
echo "</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td height=\"30\">" . $row['supplierID'] . "</td>";
  echo "<td >" . $row['supplierName'] . "</td>";
  echo "<td>" . $row['supplierGender'] . "</td>";
  echo "<td>" . $row['supplierAddress'] . "</td>";
  echo "<td>" . $row['supplierCity'] . "</td>";
  echo "<td>" . $row['supplierState'] . "</td>";
  echo "<td>" . $row['supplierEmail'] . "</td>";
  echo "<td width=\"50\">" . $row['supplierPhone'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>
           
			</div>
            
		</div>
		<div id="bottom">
		</div>
	</div>
</body>
</html>