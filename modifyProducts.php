<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
  
  
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Update Products | "Xhesi" Shop Inventory Management SystemSystem</title>
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
			<div id="stuff">
            
            
              <?php

$con = mysqli_connect("localhost","root","","xhesishopinventory" );

$id=$_POST["productID"];
$resQuery="select * from products where productID='".$id."'";

$res1=mysqli_query($con,$resQuery);

while($row = mysqli_fetch_array($res1))
  {
	  $id=$row['productID'];
	  $emri=$row['productName'];
	  $kategoria=$row['productCategory'];
	  $pershkrimi=$row['productDescription'];
	  $sasia=$row['productAmount'];
	  $cmimi=$row['productCost'];
	  //$totali=$row['totali'];
	  $data=$row['productRegistrationDate'];

?>  
            
            <form name="myform" method="post" action="modifyProducts1.php" onsubmit="return true">
            <table>
             <tr>
            <div id="menu" align="center"><ul>
					<li><a href="#">Update Products</a></li></ul></div>
                    <br/>
                    <br/>
                    <br/>
                                        
            </tr>
            <tr>
            <td>Product ID: </td>
            <td><input name="productID" type="text" size="29" value="<?php  echo $id; ?>"/></td>
            </tr>
            <tr>
            <td>Product Name: </td>
            <td><input name="productName" type="text" size="29" value="<?php  echo $emri; ?>"/></td>
            </tr>
            <tr>
            <td>Product Category: </td>
            <td><select name="productCategory" value="<?php  echo $kategoria; ?>">
            <option>Bath & Body</option>
            <option>Skin Care</option>
            </select></td>
            </tr>
            <tr>
            <td>Product Description: </td>
            <td><textarea name="productDescription" rows="6" value="<?php  echo $pershkrimi; ?>"> </textarea></td>
            </tr>
            <tr>
            <td>Product Amount (Total): </td>
            <td><input name="productAmount" type="text" size="29" value="<?php  echo $sasia; ?>"/></td>
            </tr>
            <tr>
            <td>Product Cost: </td>
            <td><input name="productCost" type="text" size="29" value="<?php  echo $cmimi; ?>"/></td>
            </tr>
            <tr>
            <td>Product Date Registration: </td>
            <td><input name="productRegistrationDate" type="text" size="29" value="<?php  echo $data; ?>"/></td>
            </tr>
            <tr>
            <td></td>
            <td><input type="submit" name="buttonRuaj" value="Update Product" /></td>
            </tr>
            </table>
            </form><?php } ?>

			</div>
            
		</div>
		<div id="bottom">
		</div>
	</div>
</body>
</html>