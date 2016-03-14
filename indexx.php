<?php
error_reporting(0);
session_start();

if( $_SESSION["logging"] && $_SESSION["logged"])
{
	 
}
else {
    if(!$_SESSION["logging"])
    {  
    $_SESSION["logging"]=true;
    loginform();
    }
       else if($_SESSION["logging"])
       {
         $number_of_rows=checkpass();
         if($number_of_rows==1)
            {	
	         $_SESSION[user]=$_GET[userlogin];
	         $_SESSION["logged"]=true;
			 header("Location: index1.php");
			 
	         print_secure_content();
            }
            else{
               	print "Wrong password or Username... Please try again!";	
                loginform();
            }
        }
     }
     ?>
<html>
<head>
<title>Login page|"Xhesi" Shop Inventory Management System</title>
</head>
<body >
<?php
function loginform()
{
print 	("<form action='indexx.php' method='get'><h1 align='center' style='color:#006' >Welcome to Xhesi Shop Inventory Management System </h1>");

print (" Please enter your login information to proceed with my inventory system");
print("<center>");
print("<table width='508' border='1' align='right' bgcolor='#999999'><tr><td align='right'><center><font color='#004080'><h2>Xhesi Shop Inventory Management System</h2></font></center></td></tr></table>");
print ("<table width='508' border='0' bgcolor='#0080C0'><tr><td colspan='2'><font color='#FF0000'>**</font>Fill all the fields below in order to login into Inventory System</td></tr><tr><th colspan='2'><h1><font color='#FF0000'>**</font><strong>Sign In</strong></h1></th></tr><tr><td>Username</td><td><input type='text' name='userlogin' size'20'></td></tr><tr><td>Password</td><td><input type='password' name='password' size'20'></td></tr><tr><td></td><td><input type='submit' ><input type='reset' ><a href='registerform.php'>  <font color='#ffffff'>Register now!</font></a></td></tr></table>");	
print("</center>");
}

function checkpass()
{
$con = mysqli_connect("localhost","root","","xhesishopinventory" );

$sql="select * from users where name='$_GET[userlogin]' and password='$_GET[password]'";
$result=mysqli_query($con,$sql) or die(mysqli_error());
return  mysqli_num_rows($result);
}

?>

</form>
</body>
</html>