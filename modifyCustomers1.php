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
            
            <table width="300" height="300">
            <tr><td>
            
             <?php
			
$con = mysqli_connect("localhost","root","","xhesishopinventory" );



$id=$_POST["customerID"];
$name=$_POST["customerName"];
$gender=$_POST["customerGender"];
$address=$_POST["customerAddress"];
$city=$_POST["customerCity"];
$state=$_POST["customerState"];
$email=$_POST["customerEmail"];
$phone=$row["customerPhone"];

$sql="update customers SET customerID=$id,customerName='$name',customerGender='$gender',customerAddress='$address',customerCity='$city',customerState='$state',customerEmail='$email',customerPhone='$phone' where customerID=$id ";

$dbResult=mysqli_query($con,$sql) or die("Error, Listing of customers FAILED... press the browser button to go BACK!");

if(!mysqli_query($con,$sql)){
    echo ("<b><h1>Error, customers Listing did not proceed correctly...press the browsers button to go BACK!</h1></b>");
}
echo "<b>Customers Record is updated successfully!!!</b> ";

mysqli_close($con)


?>  <img src="images/smile.jpg" />
  
  </td>
  </tr>
  </table>
    
			</div>
            
		</div>
		<div id="bottom">
		</div>
	</div>
</body>
</html>