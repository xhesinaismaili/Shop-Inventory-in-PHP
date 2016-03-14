<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
  
  
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Update Customers | "Xhesi" Shop Inventory Management SystemSystem</title>
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
				<li><a href="addCustomers.html">Add Customers</a></li>
				<li><a href="deleteCustomers.html">Delete Customers</a></li>
				<li><a href="modifyCustomers.html">Update Customers</a></li>
				<li><a href="listCustomers.php">List Customers</a></li>
				

			</ul>
				
			</div>
			<div id="stuff">
            
            
              <?php

$con = mysqli_connect("localhost","root","","xhesishopinventory" );


$id=$_POST["customerID"];
$resQuery="select * from customers where customerID='".$id."'";

$res1=mysqli_query($con,$resQuery);

while($row = mysqli_fetch_array($res1))
  {
	  $id=$row['customerID'];
	  $name=$row['customerName'];
	  $gener=$row['customerGender'];
	  $address=$row['customerAddress'];
	  $city=$row['customerCity'];
	  $state=$row['customerState'];
	  $email=$row['customerEmail'];
	  $phone=$row['customerPhone'];

?>  
            
            <form name="myform" method="post" action="modifyCustomers1.php" onsubmit="return true">
            <table>
             <tr>
            <div id="menu" align="center"><ul>
					<li><a href="#">Update Customers</a></li></ul></div>
                    <br/>
                    <br/>
                    <br/>
                                        
            </tr>
            <tr>
            <td>Customers ID: </td>
            <td><input name="customerID" type="text" size="29" value="<?php  echo $id; ?>"/></td>
            </tr>
            <tr>
            <td>Name: </td>
            <td><input name="customerName" type="text" size="29" value="<?php  echo $name; ?>"/></td>
            </tr>
            <tr>
            <td>Gender </td>
            <td><select name="customerGender" value="<?php  echo $gender; ?>">
            <option>Male</option>
            <option>Female</option>
            </select></td>
            </tr>
            <tr>
            <td>Address: </td>
            <td><textarea name="customerAddress" rows="6" value="<?php  echo $address; ?>"> </textarea></td>
            </tr>
            <tr>
            <td>City </td>
            <td><input name="customerCity" type="text" size="29" value="<?php  echo $city; ?>"/></td>
            </tr>
            <tr>
            <td>State: </td>
            <td><input name="customerState" type="text" size="29" value="<?php  echo $state; ?>"/></td>
            </tr>
            <tr>
            <td>Email: </td>
            <td><input name="customerEmail" type="text" size="29" value="<?php  echo $email; ?>"/></td>
            </tr>
            <tr>
            <td>Phone: </td>
            <td><input name="customerPhone" type="text" size="29" value="<?php  echo $phone; ?>"/></td>
            </tr>
            <tr>
            <td></td>
            <td><input type="submit" name="buttonRuaj" value="Update Customer" /></td>
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