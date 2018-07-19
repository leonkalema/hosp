<?php

	@session_start();
	
	require_once("../includes/func_list.php");
	
	$homepage = mysql_fetch_array(mysql_query("SELECT content FROM tbl_website WHERE location = 'onlinebooking'"));
	
	$contactpage = mysql_fetch_array(mysql_query("SELECT content FROM tbl_website WHERE location = 'contact_us'"));
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Hotel Catherine - Online Booking</title>
    <script type="text/javascript" language="javascript" src="../ink_js/jquery.js">
	</script>
    <script type="text/javascript" language="javascript" src="../ink_js/sitej.js">
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
                                                	<table border="0" width="100%" cellpadding="0" cellspacing="0">
                                                    	<tr>
                                                        	<td height="130px" valign="top" align="right">
                                                            	<a href="#" title="Hotel Catherine - Facebook Page" class="nostyle"><img src="../images/fb.gif" width="43" height="44" /></a>
                                                                <a href="#" title="Hotel Catherine - Twitter Page" class="nostyle"><img src="../images/twitter.gif" width="43" height="44" /></a>
                                                                <a href="#" title="Hotel Catherine - Google+ Page" class="nostyle"><img src="../images/google.gif" width="43" height="44" /></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                        	<td align="right">
                                                            	<?php require_once("../includes/menu.php"); ?>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                            	<td colspan="3" style="padding-top:10px; padding-bottom:10px;">
                                                	<hr style="size:2; color:#04578B;">
                                                </td>
                                            </tr>
                                            <tr>
                                            	<td colspan="3" style="padding-top:10px; padding-bottom:10px;">
                                                	<?php require_once("../includes/middle.php"); ?>
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
            	<?php require_once("../includes/footer.php"); ?>
            </td>
        </tr>
    </table>
</body>
</html>