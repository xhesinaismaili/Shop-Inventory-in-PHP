// JavaScript Document<script language = "Javascript">
  
function Validate()
{
    if (document.form1.regname.value == '') 
    {
        alert('Please fill in your First Name!');
        return false;
    }
    if (document.form1.regemail.value == '') 
    {
       alert('Please fill in your Email Address!');
       return false;
    }
	if (document.form1.regpass1.value == '') 
    {
       alert('Please fill in your Password!');
       return false;
	}

    if (document.form1.regpass2.value == '') 
    {
       alert('Please fill in your Reset Password!');
      return false;
    }
   
    return true;
}