<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Add Customers | "Xhesi" Shop Inventory Management SystemSystem</title>
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
				<li><a href="addEmployers.html">Add Employers</a></li>
				<li><a href="deleteEmployers.html">Delete Employers</a></li>
				<li><a href="modifyEmployers.html">Update Employers</a></li>
				<li><a href="listEmployers.php">List Employers</a></li>
				

			</ul>
				
			</div>
			<div id="stuff">
            <?php

$con = mysqli_connect("localhost","root","","xhesishopinventory" );


$sql="INSERT INTO employers (employerID, employerName, employerGender, employerAddress, employerCity, employerState, employerEmail,employerPhone) VALUES ('$_POST[employerID]','$_POST[employerName]','$_POST[employerGender]','$_POST[employerAddress]','$_POST[employerCity]','$_POST[employerState]','$_POST[employerEmail]','$_POST[employerPhone]')";

if (!mysqli_query($con, $sql))
  {
  die('Error: ' . mysqli_error());

  }
echo "<b>One employer is stored into database!</b>";

mysqli_close($con)

?> <img src="images/smile.jpg" />

			</div>
            
		</div>
		<div id="bottom">
		</div>
	</div>
</body>
</html>