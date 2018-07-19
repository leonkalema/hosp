<?php

	@session_start();
	
	require_once("../includes/func_list.php");
	
	if($_GET['d'])
	{
		$id = base64_decode($_GET['d']);
		
		$pic = mysql_fetch_array(mysql_query("select picture FROM tbl_slideshow WHERE id = '".$id."'"));
		
		unlink("../file_loads/".$pic[0]);
		
		mysql_query("DELETE FROM tbl_slideshow WHERE id = '".$id."'");
		
		$url = "../ink_site/slideshow.php?t=view";
		
		header("location: ".$url);
		
		exit;
	}
	
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
    <script language="javascript" type="text/javascript">
			<!--
			function startUpload()
			{
				  $("#showerror").html("<font color = \"#008101\">Processing . . . </font><img src='../images/loader.gif' name = 'img1' align = 'absmiddle' width='16' height = '11' alt='loading'>");
				  
				  return true;
			}
			
			function stopUpload(success)
			{
			 	
				var result = '';
			  
			  	if (success == 1)
			  	{
				 	$("#showerror").html("<font color = 'red'>Invalid file browsed, please browse for file with types .gif or .png or .jpg</font>");
			  	}
			  else if (success == 2)
			  {
				 $("#showerror").html("<font color = 'red'>Please browse for a file less than 2MB in size.</font>");
			  }
			   else if (success == 3)
			  {
				 $("#showerror").html("<font color = 'red'>Please browse for a picture of width 1009px and height 376px</font>");
			  }
			  else if (success == 4)
			  {
				 $("#showerror").html("<font color = 'green'>Picture added successfully!</font>");
			  }
			  else if (success == 5)
			  {
				 $("#showerror").html("<font color = 'red'>Unable to add picture, please retry.</font>");
			  }	
			   else if (success == 6)
			  {
				 $("#showerror").html("<font color = 'green'>Picture updated successfully!</font>");
			  }	
			   else if (success == 7)
			  {
				 $("#showerror").html("<font color = 'red'>Picture title is already registered for selected gallery!</font>");
			  }		  
			  else 
			  {
				 $("#showerror").html("<font color = 'red'>Unhandled error occurred!</font>");
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