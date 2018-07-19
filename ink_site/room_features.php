<?php

	@session_start();
	
	require_once("../includes/func_list.php");
	
	if($_GET['d'])
	{
		$roomid = $_GET['r'];
		
		$id = base64_decode($_GET['d']);
		
		mysql_query("DELETE FROM tbl_roomfeatures WHERE id = '".$id."'");
		
		$url = "../ink_site/room_features.php?r=".$roomid."&t=view";
		
		header("location: ".$url);
		
		exit;
	}
	
	$roomid = base64_decode($_GET['r']);
	
	$r_qry = mysql_query("SELECT roomnumber FROM tbl_rooms WHERE id = '".$roomid."'");
	
	$room = mysql_fetch_array($r_qry);
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Hotel Catherine - Manage Room Features</title>
    <script type="text/javascript" language="javascript" src="../ink_js/jquery.js">
	</script>
    <script type="text/javascript" language="javascript" src="../ink_js/sitej_cp.js">
	</script>
    <script language="javascript" type="text/javascript">
			<!--
			function startUpload()
			{
				$("#showerror").html("<font color = \"#32B444\">Processing, please wait . . . </font><img src='../images/loader.gif' name = 'img1' align = 'absmiddle' width='16' height = '11' alt='loading'>");
				  
				return true;
			}
			
			function stopUpload(success)
			{
			 	
				var result = '';
			  
			  	if (success == 10)
			  	{
					$("#showerror").html("<font color = 'green'>Room Feature(s) updated successfully!</font>");
			  	}
				else if (success == 11)
			  	{
					$("#showerror").html("<font color = 'red'>Unable to add Room Feature, please retry!</font>");
			  	}
				else if (success == 12)
			  	{
					$("#showerror").html("<font color = 'red'>Room Feature already added! </font>");
			  	}
				
				else if (success == 30)
			  	{
					$("#showerror").html("<font color = 'red'>Please select atleast one 'Room Feature'");
			  	}
			  	else 
			  	{
					$("#showerror").html("<font color = 'red'>System Error </font>");
			  	}
					
			  	return true;   
			}
		//-->
		</script> 
    <link rel="stylesheet" type="text/css" href="../ink_css/sitef.css" />
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