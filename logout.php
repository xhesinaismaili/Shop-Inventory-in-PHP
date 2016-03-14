<?php
session_start(); 
if(session_destroy())
{
print"<h2><font color='#FFFFFF'>you have logged out successfully</font></h2>";
print "<h3>you have logged out successfully .....<a href='index.htm'>back to main page</a></h3>";
}

?>