//HRS JavaScript 

//Function
function isValidEmailAddress(emailAddress) 
{
	var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
	
	return pattern.test(emailAddress);
}

//Function
function validateEmailAddress(thisemail, location)
{
	var email = $("#"+thisemail).val();
	 
	if(email != 0)
	{
		if(isValidEmailAddress(email))
		{
			$("#"+location).html("");
		
			return true;		 
		} 
		else 
		{
	 		$("#"+location).html("<font color = \"red\">Please provide a valid email address</font><img src='../images/no.gif' name = 'img1' align = 'absmiddle' width='18' height = '18' alt='image'>");
		
			$("#"+thisemail).focus();
			
			return false;
		}
	} 
}

//Function
function onlyNumbers(enteredkey, location)
{
	$("#"+enteredkey).keypress(function (e){
	  var charCode = (e.which) ? e.which : e.keyCode;
	  if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode != 43) {
		$("#"+location).html("<font color = 'red'>Only numeric values are allowed!</font>");
		return false;
	  }
	  else
	  {
		$("#"+location).html("");
	  }
	});
}


//Check empty fields
function Empty(param1, message, location)
{
	var itemid = $("#"+param1).val();
	
	if(itemid == null || itemid == "")
	{
		$("#"+location).html("<font color = \"red\">"+message+"</font><img src='../images/no.gif' name = 'img1' align = 'absmiddle' width='18' height = '18' alt='image'>");
		
		$("#"+param1).focus();
		
		return false;
	}
	else
	{
		$("#"+location).html("");
		
		return true;	
	}
}

//Function 
function registerUser(names, phoneno, location)
{
	names = $("#"+names).val();
	
	phoneno = $("#"+phoneno).val();
	
	$("#"+location).html("<font color = \"#008101\">Registering . . . </font><img src='../images/loader.gif' name = 'img1' align = 'absmiddle' width='16' height = '11' alt='loading'>");
		
	$.post("../includes/process_registration.php",
	{ names: names, phoneno: phoneno },
		function(data){
		
		if(data == 10)
		{
			$("#"+location).html("<font color = \"green\">Thank you <b>"+names+"</b>, your registration was successful, please log in using the form on the right </font><img src='../images/yes.gif' name = 'img1' align = 'absmiddle' width='18' height = '18' alt='image'>");
			
			$("#names").val("");
			
			$("#phoneno").val("");
		}
		else if(data == 11)
		{
			$("#"+location).html("<font color = \"red\">Unable to complete registration, please retry later </font><img src='../images/no.gif' name = 'img1' align = 'absmiddle' width='18' height = '18' alt='image'>");
		}
		else if(data == 12)
		{
			$("#"+location).html("<font color = \"red\">Phone Number is already registered in Our System</font><img src='../images/no.gif' name = 'img1' align = 'absmiddle' width='18' height = '18' alt='image'>");		
		}
		else
		{
			$("#"+location).html("<font color = \"red\">System error </font><img src='../images/no.gif' name = 'img1' align = 'absmiddle' width='18' height = '18' alt='image'>");
		}
	}
	);
	
	return false;
}

//Login users
function loginUser(username, password, location)
{
	value1 = $("#"+username).val();
	
	value2 = $("#"+password).val();
	
	task = "expire";
	
	$("#"+location).html("<font color = \"#008101\">Logging in . . . </font><img src='../images/loader.gif' name = 'img1' align = 'absmiddle' width='16' height = '11' alt='loading'>");
		
	$.post("../includes/process_login.php",
	{ user: value1, pass: value2},
		function(data){
		
		if(data == 80)
		{
			window.location.href = "../ink_site/index.php" ;
		}
		else if(data == 60)
		{
			window.location.href = "../ink_managers/index.php" ;
		}
		else if(data == 40)
		{
			window.location.href = "../ink_frontdesk/index.php" ;
		}
		else if(data == 20)
		{
			window.location.href = "../ink_guest/index.php" ;
		}
		else
		{
			$("#"+location).html("<font color = \"red\">Invalid username and password</font><img src='../images/no.gif' name = 'img1' align = 'absmiddle' width='18' height = '18' alt='image'>");
		}
	}
	);
	
	return false;
}

//Send us a message
function sendMessage(names, email, message, security_txt, location)
{
	names = $("#"+names).val();
	email = $("#"+email).val();
	message = $("#"+message).val();
	security_txt = $("#"+security_txt).val();
		
	$("#"+location).html("<font color = \"#008101\">Processing . . . </font><img src='../images/loader.gif' name = 'img1' align = 'absmiddle' width='16' height = '11' alt='loading'>");
		
	$.post("../includes/sendmessage.php",
	{ names: names, email: email, message: message, security_txt: security_txt },
		function(data){
			
		if(data == 60)
		{
			$("#"+location).html("<font color = 'green'>Message sent successfully!</font> <img src='../images/message_sent.png' name = 'img1' align = 'absmiddle' width='33' height = '33'>");
			
			document.getElementById("names").value = "";
			
			document.getElementById("email").value = "";
			
			document.getElementById("message").value = "";
		}
		else if (data == 50)
		{
			$("#"+location).html("<font color = 'red'>Unable to send message!</font> <img src='../images/message_notsent.png' name = 'img1' align = 'absmiddle' width='33' height = '33'>");
		}
		else
		{
			$("#"+location).html("<font color = 'red'>Incorrect security text entered </font><img src='../images/no.gif' name = 'img1' align = 'absmiddle' width='18' height = '18' alt='image'>");
		}
	}
	);
	
	return false;
}
