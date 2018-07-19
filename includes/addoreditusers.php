<?php

	@session_start();
	
	require_once("../includes/func_list.php");
	
	//DATA
	$names = mysql_real_escape_string(inputCleaner($_POST['names']));
	
	$usern = inputCleaner($_POST['usern']);
	
	$passwd = inputCleaner($_POST['passwd']);
	
	$access_level = inputCleaner($_POST['access_level']);
	
	$phoneno = inputCleaner($_POST['phoneno']);
	
	$task = mysql_real_escape_string($_POST['task']);
	
	$email = mysql_real_escape_string($_POST['email']);
	
	$editid = inputCleaner($_POST['editid']);

	$now = mktime();
	
	if($editid == 0)
	{
		$q = mysql_query("SELECT id FROM tbl_users WHERE usern = '".$usern."'");
			
		if(mysql_num_rows($q) == 0)
		{
			$insert = mysql_query("INSERT INTO tbl_users (usern, passwd, rights) VALUES ('".$usern."', '".sha1($passwd)."', '".$access_level."')");
						
			if($insert)
			{
				$insertid = mysql_insert_id();
							
				mysql_query("INSERT INTO tbl_users_details (userid, names, phoneno, email, date_added) VALUES ('".$insertid."' , '".$names."', '".$phoneno."',  '".$email."', '".$now."')");
					
				$result = 10;
			}
			else
			{
				$result = 11;
			}
		}
		else
		{
			$result = 12;
		}
	}
	else
	{
		
	}
	
	
?>
<script language="javascript" type="text/javascript">window.top.window.stopUpload(<?php echo $result; ?>);</script>