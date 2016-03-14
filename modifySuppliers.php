<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
  
  
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Update suppliers | "Xhesi" Shop Inventory Management SystemSystem</title>
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
			<div id="stuff">
            
            
              <?php

$con = mysqli_connect("localhost","root","","xhesishopinventory" );


$id=$_POST["supplierID"];
$resQuery="select * from suppliers where supplierID='".$id."'";

$res1=mysqli_query($con,$resQuery);

while($row = mysqli_fetch_array($res1))
  {
	  $id=$row['supplierID'];
	  $name=$row['supplierName'];
	  $gender=$row['supplierGender'];
	  $address=$row['supplierAddress'];
	  $city=$row['supplierCity'];
	  $state=$row['supplierState'];
	  $email=$row['supplierEmail'];
	  $phone=$row['supplierPhone'];

?>  
            
            <form name="myform" method="post" action="modifySuppliers1.php" onsubmit="return true">
            <table>
             <tr>
            <div id="menu" align="center"><ul>
					<li><a href="#">Update suppliers</a></li></ul></div>
                    <br/>
                    <br/>
                    <br/>
                                        
            </tr>
            <tr>
            <td>suppliers ID: </td>
            <td><input name="supplierID" type="text" size="29" value="<?php  echo $id; ?>"/></td>
            </tr>
            <tr>
            <td>Name: </td>
            <td><input name="supplierName" type="text" size="29" value="<?php  echo $name; ?>"/></td>
            </tr>
            <tr>
            <td>Gender </td>
            <td><select name="supplierGender" value="<?php  echo $gender; ?>">
            <option>Male</option>
            <option>Female</option>
            </select></td>
            </tr>
            <tr>
            <td>Address: </td>
            <td><textarea name="supplierAddress" rows="6" value="<?php  echo $address; ?>"> </textarea></td>
            </tr>
            <tr>
            <td>City </td>
            <td><input name="supplierCity" type="text" size="29" value="<?php  echo $city; ?>"/></td>
            </tr>
            <tr>
            <td>State: </td>
            <td><input name="supplierState" type="text" size="29" value="<?php  echo $state; ?>"/></td>
            </tr>
            <tr>
            <td>Email: </td>
            <td><input name="supplierEmail" type="text" size="29" value="<?php  echo $email; ?>"/></td>
            </tr>
            <tr>
            <td>Phone: </td>
            <td><input name="supplierPhone" type="text" size="29" value="<?php  echo $phone; ?>"/></td>
            </tr>
            <tr>
            <td></td>
            <td><input type="submit" name="buttonRuaj" value="Update supplier" /></td>
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