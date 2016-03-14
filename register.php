<?php
 session_start();session_destroy();
 session_start();
if($_GET["regname"] && $_GET["regemail"] && $_GET["regpass1"] && $_GET["regpass2"] )
{
	if($_GET["regpass1"]==$_GET["regpass2"])
	{
	$con = mysqli_connect("localhost","root","","xhesishopinventory" );

    $sql="insert into users (name,email,password)values('$_GET[regname]','$_GET[regemail]','$_GET[regpass1]')";
    $result=mysqli_query($con,$sql) or die(mysqli_error());		
    print "<h1>You have registered sucessfully</h1>";
   
    print "<a href='indexx.php'>Go to Login page</a>";
	}
	else print "Passwords doesn't match";
}
else print"Invalid input data";

?>