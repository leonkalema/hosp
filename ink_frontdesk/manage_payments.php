<?php

	@session_start();
	
	require_once("../includes/func_list.php"); 
	
	if($_GET['d'])
	{
		$id = base64_decode($_GET['d']);
		
		mysql_query("DELETE FROM tbl_payments WHERE id = '".$id."'");
		
		if($_GET['r'] == "pending")
		{
			$path = "?t=pending";
		}
		else
		{
			$path = "?t=approved";
		}
		
		$url = "../ink_frontdesk/manage_payments.php".$path;
		
		header("location: ".$url);
		
		exit;
	}
	
	if($_GET['a'])
	{
		$id = base64_decode($_GET['a']);
		
		mysql_query("UPDATE tbl_payments SET status = 1 WHERE id = '".$id."'");
		
		if($_GET['r'] == "pending")
		{
			$path = "?t=pending";
		}
		else
		{
			$path = "?t=approved";
		}
		
		$url = "../ink_frontdesk/manage_payments.php".$path;
		
		header("location: ".$url);
		
		exit;
	}
	
	if($_GET['c'])
	{
		$id = base64_decode($_GET['c']);
		
		mysql_query("UPDATE tbl_payments SET status = 0 WHERE id = '".$id."'");
		
		if($_GET['r'] == "pending")
		{
			$path = "?t=pending";
		}
		else
		{
			$path = "?t=approved";
		}
		
		$url = "../ink_frontdesk/manage_payments.php".$path;
		
		header("location: ".$url);
		
		exit;
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Hotel Catherine - View Hotel Rooms</title>
    <link rel="stylesheet" type="text/css" href="../ink_css/sitef.css" />
    <script type="text/javascript" language="javascript" src="../ink_js/jquery.js">
	</script>
    <script type="text/javascript" language="javascript" src="../ink_js/sitej_staff.js">
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
                    <?php require_once("../includes/middle_section_frontdesk.php"); ?>
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
            	<?php require_once("../includes/footer_all.php"); ?>
            </td>
        </tr>
    </table>
</body>
</html>