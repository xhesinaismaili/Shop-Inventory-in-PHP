// JavaScript Document

function checkForm() {
    
	
    if(myform.productID.value==""){
        alert("Write product's ID!!");    
		myform.productID.focus();
        return false;
    }
	if(myform.productName.value==""){
        alert("Write product's NAME!!");    
		myform.productName.focus();
        return false;
    }
	if(myform.productCategory.value==""){
        alert("Write product's Category!!");    
		myform.productCategory.focus();
        return false;
    }
	
	if(myform.productDescription.value==""){
        alert("Write product's Description !!");    
		myform.productDescription.focus();
        return false;
    }
	if(myform.productAmount.value==""){
        alert("Write product's Amount!!");    
		myform.productAmount.focus();
        return false;
    }
	if(myform.productCost.value==""){
        alert("Write product's Cost!!");    
		myform.productCost.focus();
        return false;
    }
	
	x=parseInt(document.myform.productAmount.value);
	
	if(isNaN(x)){
			 alert("Ju must enter a number into the product's amount text box");
			 document.myform.productAmount.focus();
			 return false;
			 }
			 
	x=parseInt(document.myform.productCost.value);
	
	if(isNaN(x)){
			 alert("Ju must enter a number into the product's cost text box");
			 document.myform.productCost.focus();
			 return false;
			 }
	
	if(window.confirm("Are you sure you want to add this product?"))
	return true;
	
	else
	
	return false;
}

