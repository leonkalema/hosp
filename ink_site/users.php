<?php

	@session_start();
	
	require_once("../includes/func_list.php");
	
	$editpage = mysql_fetch_array(mysql_query("SELECT * FROM tbl_website WHERE location = 'terms_and_conditions'"));
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Hotel Catherine - Welcome to our website</title>
        <script type="text/javascript" language="javascript" src="../ink_js/jquery.js">
        </script>
        <script type="text/javascript" language="javascript" src="../ink_js/sitej_cp.js">
        </script>
        <link rel="stylesheet" type="text/css" href="../ink_css/sitef.css" />
        <script language="javascript" type="text/javascript">
			<!--
			function startUpload()
			{
				$("#error_msg").html("<font color = \"#32B444\">Processing, please wait . . . </font><img src='../images/loader.gif' name = 'img1' align = 'absmiddle' width='16' height = '11' alt='loading'>");
				  
				return true;
			}
			
			function stopUpload(success)
			{
			 	
				names = $("#names").val();
				
				username = $("#usern").val();
				
				var result = '';
			  
			  	if (success == 10)
			  	{
					$("#error_msg").html("<font color = 'green'>User <b>"+names+"</b> added successfully</font><img src='../images/yes.gif' name = 'img1' align = 'absmiddle' width='18' height = '18' alt='image'>");
			  		
					$("#names").val("");
					
					$("#usern").val("");
					
					$("#usern_error").html("");
					
					$("#passwd").val("");
					
					$("#passwd_error").html("");
					
					$("#names").focus();
					
				}
				else if (success == 11)
			  	{
					$("#error_msg").html("<font color = 'red'>Unable to add User <b>"+names+"</b>, please retry <img src='../images/no.gif' name = 'img1' align = 'absmiddle' width='18' height = '18' alt='image'>");
			  	
					$("#usern").focus();
				}
				else if (success == 12)
			  	{
					$("#error_msg").html("<font color = 'red'>Username <b>"+username+"</b> already in use </font><img src='../images/no.gif' name = 'img1' align = 'absmiddle' width='18' height = '18' alt='image'>");
			  	
					$("#usern").focus();
				}
				
				else if (success == 30)
			  	{
					$("#error_msg").html("<font color = 'red'>Please select atleast one 'User Page' <img src='../images/no.gif' name = 'img1' align = 'absmiddle' width='18' height = '18' alt='image'>");
			  	
					$("#page1").focus();
				}
			  	else 
			  	{
					$("#showerror").html("<font color = 'red'>System Error </font>");
			  	}
					
			  	return true;   
			}
		//-->
		</script> 
    </head>    
    <body>
        <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td align="center">
                	<table border="0" width="1009px" cellpadding="0" cellspacing="0">
                	<tr>
                    	<td>
                        	<table border="0" width="100%" cellpadding="0" cellspacing="0">
                            	<tr>
                                	<td>
                                    	<table border="0" width="100%" cellpadding="0" cellspacing="0">
                                        	<tr>
                                            	<td width="412px">
                                                	<img src="../images/logo2.gif" width="408" height="186" alt="Hotel Catherine Logo" />
                                                </td>
                                                <td width="2px">
                                                </td>
                                                <td>
                                                	
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                	<td>
                                    	
                                    </td>
                                </tr>
                                <tr>
                                	<td>
                                    	
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <?php require_once("../includes/middle_section_cp.php"); ?>
                </td>
            </tr>
            <tr>
        	<td align="center" style="height:40px; background-color:#000;">
            	<table border="0" width="1009px" cellpadding="0" cellspacing="0">
                	<tr>
                    	<td align="center">
                        	
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
        	<td align="center" style="padding-bottom:30px; padding-top:30px;">
            	<?php require_once("../includes/footer_cp.php"); ?>
            </td>
        </tr>
    </table>
</body>
</html>