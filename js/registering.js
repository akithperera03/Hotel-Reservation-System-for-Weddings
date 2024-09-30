function checkPassword()
{
	var passwordd = document.getElementById("pwd").value;
	var confirmpassword = document.getElementById("repwd").value;
	
	if (passwordd !== confirmpassword)
	{
		
		alert("Password Missmatch!!");
		return false;
		
	}
	else
	{
		
		alert("Success!!");
		return true;
			
	}
}

function enableButton()
{
	 var checkboxx = document.getElementById("acceptTerms");
	 var submitButtonn = document.getElementById("submitBtn");
	 
	 if(checkboxx.checked)
	 {
		 submitButtonn.disabled = false;
	 }
	 else
	 {
		 submitButtonn.disabled = true;
	 }
	
	
	
}