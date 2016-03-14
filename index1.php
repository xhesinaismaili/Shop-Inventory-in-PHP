<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<script type="text/javascript">
    function getVote(int) {
        if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("poll").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "vote.php?vote=" + int, true);
        xmlhttp.send();
    }
</script>

<title>"Xhesi" Shop Inventory Management System</title>
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
 <b><h2><font color="#000066"><center>"Xhesi" Shop Inventory Management System!</center></font></h2></b>
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
				<h2><font color="#5454AB">Current Time</font></h2> <INPUT TYPE="text" name="clockspot" size="15">
			</FORM><a href='logout.php'>Logout</a>
			&nbsp;
			
            <ul>
				<li><a href="index1.php">Home</a></li>
				<li><a href="products.php">Manage Products</a></li>
				<li><a href="customers.php">Manage Customers</a></li>
				<li><a href="employers.php">Manage Employers</a></li>
				<li><a href="suppliers.php">Manage Suppliers</a></li>
				<li><a href="generalReport.php">View Report</a></li>

			</ul>
				
				<div id="poll">

</div>
			</div>

			<div id="stuff">
<table>
<tr>
<td>

</td>
</tr>

<tr>
<td><img src="images/bodyShop.jpg" width="450" height="260"/> </td>
</tr>
</table>
			</div>
		</div>
		<div id="bottom">
		</div>
	</div>
	
</body>

</html>