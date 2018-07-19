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
	message = "Allow control panel to delete "+entity+"?";
	
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

//function to check for the file type of uploaded image
function checkImage(param1, param2)
{
	var s_pic = $("#"+param1).val();
	
	var xxx = s_pic.split(".");
	
	if(xxx[1] != "jpg" && xxx[1] != "pjpeg" && xxx[1] != "jpeg" && xxx[1] != "png" && xxx[1] != "gif")
	{
		$("#"+param2).html("<font color = 'red'>Invalid file browsed, please browse for file with types .gif or .png or .jpg</font>");
		
		$("#"+param1).focus();
	}
	else
	{
		$("#"+param2).html("<font color = 'green'>File format is supported.</font>");
	}
	
	return false;
}

//function to check for the file type of uploaded image
function checkFile(param1,param2)
{
	var s_pic = $("#"+param1).val();
	
	var xxx = s_pic.split(".");
	
	if(xxx[1] != "pdf" && xxx[1] != "xls" && xxx[1] != "xlsx" && xxx[1] != "doc" && xxx[1] != "docx")
	{
		$("#"+param2).html("<font color = 'red'>Invalid file browsed, please browse for a MS Word or MS Excel or Adobe PDF document</font>");
		
		$("#"+param1).focus();
	}
	else
	{
		$("#"+param2).html("<font color = 'green'>File format is supported.</font>");
	}
	
	return false;
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


//Save webpage
function saveWebPage(pagecontent, editid, location)
{
	pagecontent = $("#"+pagecontent).val();
	
	editid = $("#"+editid).val();
	
	$("#"+location).html("<font color = \"#008101\">Processing . . . </font><img src='../images/loader.gif' name = 'img1' align = 'absmiddle' width='16' height = '11' alt='loading'>");
		
	$.post("../includes/savepage.php",
	{ pagecontent: pagecontent, editid: editid},
		function(data){
		
		$("#"+location).html(data);
	}
	);
	
	return false;
}


//Function
function featurePicture(pictureid, title, location)
{
	subsresult = $('input[name='+location+']').attr('checked');
	
	if(subsresult == true)
	{
		task = "This picture will appear on the home page slideshow, feature";	
	}
	else
	{
		task = "This picture is showing on the home page slideshow, unfeature";	
	}
	
	var message = task+" picture - "+title+"?";
	
	if(window.confirm(message))
	{
		$.post("../includes/feature_picture.php",
		{ subsresult: subsresult, pictureid: pictureid },
			function(data){
				
			alert(data);//$("#"+location).html(data);
		}
		);
		
		return true;
	}
	
	return false;
}


//function
function checkUsername(username, editid, location)
{
	username = $("#"+username).val();
	
	editid = $("#"+editid).val();
	
	$("#"+location).html("<font color = \"#85B525\">Checking . . . </font><img src='../images/loader.gif' name = 'img1' align = 'absmiddle' width='16' height = '11' alt='loading'>");
		
	$.post("../includes/checkusernameavailability.php",
	{ username: username, editid: editid },
		function(data){
		
		if(data == 101)
		{
			$("#usern_available").val(1);
			
			$("#"+location).html("<font color = 'green'>Username <b>"+username+"</b> is available</font>");
			
			$("#passwd").focus();
		}
		else
		{
			$("#usern_available").val(2);
			
			$("#"+location).html("<font color = 'red'>Username <b>"+username+"</b> is already in use, try another!</font>");	
			
			$("#usern").focus();
		}
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
function addoreditSystemUser(names, usern, passwd, phoneno, email, editid, location)
{
	names = $("#"+names).val();
	
	usern = $("#"+usern).val();
	
	passwd = $("#"+passwd).val();
	
	phoneno = $("#"+phoneno).val();
	
	email = $("#"+email).val();
		
	editid = $("#"+editid).val();
	
	usern_available = $("#usern_available").val();
	
	phonenumlen = phoneno.length;
	
	if(usern_available == 1)
	{
		if(phonenumlen == 10)
		{
			$("#"+location).html("<font color = \"#85B525\">Processing . . . </font><img src='../images/loader.gif' name = 'img1' align = 'absmiddle' width='16' height = '11' alt='loading'>");
			
			$.post("../includes/addoreditusers.php",
			{ names: names, usern: usern, passwd: passwd, phoneno: phoneno, email: email, editid: editid },
				function(data){
				
				if(data == 100)
				{
					$("#"+location).html("<font color = \"green\">User added successfully!</font>");
					
					$("#names").val("");
					$("#names_error").html("");
					
					$("#usern_available").val("");
					
					$("#usern").val("");
					$("#usern_error").html("");
					
					$("#passwd").val("");
					$("#passwd_error").html("");
					
					$("#phoneno").val("");
					$("#phoneno_error").html("");
					
					$("#email").val("");
					$("#email_error").html("");
					
				}
				else
				{
					$("#"+location).html(data);
				}
			}
			);
		}
		else
		{
			$("#phoneno_error").html("<font color = 'red'>Phone number entered my have 7 digits!</font>");	
			
			$("#phoneno").focus();
		}
	}
	else
	{
		$("#usern_error").html("<font color = 'red'>Username <b>"+usern+"</b> is already in use, try another!</font>");	
			
		$("#usern").focus();
	}
	
	return false;
}

//Function
function addoreditRoomTypes(names, roomrate, editid, location)
{
	names = $("#"+names).val();
	
	roomrate = $("#"+roomrate).val();
	
	editid = $("#"+editid).val();
	
	$("#"+location).html("<font color = \"#008101\">Processing . . . </font><img src='../images/loader.gif' name = 'img1' align = 'absmiddle' width='16' height = '11' alt='loading'>");
		
	$.post("../includes/addoreditroomtypes.php",
	{ names: names, roomrate: roomrate, editid: editid},
		function(data){
		
		$("#"+location).html(data);
	}
	);
	
	return false;		
}

//Function
function addoreditRooms(roomnumber, roomtypeid, editid, location)
{
	roomnumber = $("#"+roomnumber).val();
	
	roomtypeid = $("#"+roomtypeid).val();
	
	editid = $("#"+editid).val();
	
	$("#"+location).html("<font color = \"#008101\">Processing . . . </font><img src='../images/loader.gif' name = 'img1' align = 'absmiddle' width='16' height = '11' alt='loading'>");
		
	$.post("../includes/addoreditrooms.php",
	{ roomnumber: roomnumber, roomtypeid: roomtypeid, editid: editid},
		function(data){
		
		$("#"+location).html(data);
	}
	);
	
	return false;		
}