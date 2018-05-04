function validateForm ()
	{
		var errorCheck = false;
		var error ="";
		
		var name = "";
			name = document.getElementById("txtName").value;
			
		var address = "";
			address = document.getElementById("txtAddress").value;
			
		var city = "";
			city = document.getElementById("txtCity").value;
			
		var prov = "";
			prov = document.getElementById("txtProv").value;
			
		var postCode = "";
			postCode = document.getElementById("txtPostCode").value;
			
			
			//document.getElementById("error").innerHTML = name + ", " + address + ", " + city + ", " + prov + ", " + postCode;
			
	
			if (name === null | name == "" | name.length <= 3)
			{
				error +="Name must be greater then 3 characters.<br>";
				errorCheck= true;
				document.getElementById("txtName").focus();	
			}
			
			if(address === null | address == "")
			{
				error +="Please Enter your address.<br>";
				errorCheck= true;
				document.getElementById("txtAddress").focus();	
			}
			
			if(city === null | city == "")
			{
				error +="A city is needed.<br>";
				errorCheck= true;
				document.getElementById("txtCity").focus();		
			}
			
			if(prov === null | prov == "")
			{
				error +="Must enter a province.<br>";
				errorCheck= true;	
				document.getElementById("txtProv").focus();	
			}
			
			if(postCode === null | postCode == "")
			{
				error +="Postercode Needed.<br>";
				errorCheck= true;
				document.getElementById("txtPostcode").focus();		
			}
			if(postCode === null | postCode == "")
			{
				error +="Postercode Needed.<br>";
				errorCheck= true;
				document.getElementById("txtPostcode").focus();		
			}
			if (errorCheck)
			{
				document.getElementById("error").innerHTML = error;
			
			}
		
			return !errorCheck;
		
	}
	

