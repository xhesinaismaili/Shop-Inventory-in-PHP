<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>List Products | "Xhesi" Shop Inventory Management SystemSystem</title>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />

<link rel="stylesheet" type="text/css" href="style.css" />
<link href="style1.css" rel="stylesheet" type="text/css" />

<SCRIPT language="JavaScript" SRC="validation.js"></SCRIPT>
<SCRIPT language="JavaScript" SRC="startClock.js"></SCRIPT>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/interface.js"></script>

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
				<li><a href="addProducts.html">Add Product</a></li>
				<li><a href="deleteProducts.html">Delete Product</a></li>
				<li><a href="modifyProducts.html">Update Product</a></li>
				<li><a href="listProducts.php">List Product</a></li>
				<li><a href="inventory.php">Report Product</a></li>

			</ul>
				
			</div>

			<div id="stuff" style="overflow: auto; width: 530px; height: 600px; ">
            <img src="images/cosmetic_banner2.jpg" width="550" height="100" />
            
            <?php
$con = mysqli_connect("localhost","root","","xhesishopinventory" );


$result = mysqli_query($con,"SELECT * FROM products");

echo "<table border=\"1\" bordercolor=\"#2A1FAA\" style=\" height: 150; \">";
echo "<tr>";
echo "<th>Product ID</th>";
echo "<th>Product Name</th>";
echo "<th>Product Category</th>";
echo "<th>Product Description</th>";
echo "<th>Product Amount (Total)</th>";
echo "<th>Product Cost</th>";
echo "<th>Product Total Cost</th>";
echo "<th>Date</th>";
echo "</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td height=\"30\">" . $row['productID'] . "</td>";
  echo "<td >" . $row['productName'] . "</td>";
  echo "<td>" . $row['productCategory'] . "</td>";
  echo "<td>" . $row['productDescription'] . "</td>";
  echo "<td>" . $row['productAmount'] . "</td>";
  echo "<td>" . $row['productCost'] . "</td>";
  echo "<td>" . $row['productTotalCost'] . "</td>";
  echo "<td width=\"50\">" . $row['productRegistrationDate'] . "</td>";
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