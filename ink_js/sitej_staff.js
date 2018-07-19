// HRS JavaScript Document

//Check empty fields
function Empty(param1, message, location)
{
	var itemid = $("#"+param1).val();
	
	if(itemid == null || itemid == "")
	{
		$("#"+location).html("<font color = \"red\">"+message+"</font>");
		
		$("#"+param1).focus();
		
		return false;
	}
	else
	{
		$("#"+location).html("");
		
		return true;	
	}
}

function deleteEntity(url, entity) 
{
	message = "Allow System to delete "+entity+"?";
	
	if (window.confirm(message))
	{
		window.location.href = url;
	}
}

function submitDeposit(url, entity) 
{
	message = "Allow System to Submit Deposit "+entity+" - to Management of Hotel Catherine?";
	
	if (window.confirm(message))
	{
		window.location.href = url;
	}
}

function approvePayment(url, entity) 
{
	message = "Allow System to Approve Payment "+entity+"?";
	
	if (window.confirm(message))
	{
		window.location.href = url;
	}
}

function cancelPayment(url, entity) 
{
	message = "Allow System to Cancel Payment "+entity+"?";
	
	if (window.confirm(message))
	{
		window.location.href = url;
	}
}

//Function
function closeThis(thisitem)
{
	document.getElementById(thisitem).innerHTML = "";	
}

//Only numbers
function onlyNumbers(enteredkey, location)
{
	$("#"+enteredkey).keypress(function (e){
	  var charCode = (e.which) ? e.which : e.keyCode;
	  if (charCode > 31 && (charCode < 48 || charCode > 57)) {
		$("#"+location).html("<font color = 'red'>Only numeric values are allowed!</font>");
		return false;
	  }
	  else
	  {
		$("#"+location).html("");
	  }
	});
}

//Function
function showContent(task, contentid, location)
{
	$("#"+location).html("<font color = \"#008101\">Processing . . . </font><img src='../images/loader.gif' name = 'img1' align = 'absmiddle' width='16' height = '11' alt='loading'>");
		
	$.post("../includes/showcontent.php",
	{ task: task, contentid: contentid },
		function(data){
			
		$("#"+location).html(data);
	}
	);
	
	return false;
}

//Function
function checkPwLength(passwd, location)
{
	password = $("#"+passwd).val();
	
	len = password.length;
	
	document.getElementById("addoreditbutton").disabled = true;
	
	if(len < 6)
	{
		$("#passwd").focus();
		
		$("#"+location).html("<font color = 'red'>Password entered is too short, minimum allowed characters is 6 (SIX)</font>");
		
		return false;		
	}
	else
	{
		document.getElementById("addoreditbutton").disabled = false;
		
		if(len == 6)
		{
			$("#"+location).html("<font color = 'green'>Password strength <b>WEAK</b></font>");
		}
		else if(len > 6 && len <= 12)
		{
			$("#"+location).html("<font color = 'green'>Password strength <b>STRONG</b></font>");
		}
		else
		{
			$("#"+location).html("<font color = 'green'>Password strength <b>VERY STRONG</b></font>");
		}
		
		return true;	
	}
}

//Function
function addoreditDeposits(refno, amount, transactionfees, location)
{
	refno = $("#"+refno).val();
	
	amount = $("#"+amount).val();
	
	transactionfees = $("#"+transactionfees).val();
	
	$("#"+location).html("<font color = \"#008101\">Processing . . . </font><img src='../images/loader.gif' name = 'img1' align = 'absmiddle' width='16' height = '11' alt='loading'>");
		
	$.post("../includes/addoreditdeposits.php",
	{ refno: refno, amount: amount, transactionfees: transactionfees },
		function(data){
		
		if(data == 100)
		{
			$("#"+location).html("<font color = 'green'>Deposit added successfully!</font>");
			
			$("#amount").val("");
		}
		else
		{
			$("#"+location).html(data);
		}
	}
	);
	
	return false;		
}