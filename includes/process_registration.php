<?php

	@session_start();
	
	require_once("../includes/func_list.php");
	
	//DATA
	$names = mysql_real_escape_string(inputCleaner($_POST['names']));
	
	$phoneno = inputCleaner($_POST['phoneno']);
	
	$access_level = 2;
	
	$now = mktime();
	
	$q = mysql_query("SELECT id FROM tbl_users WHERE usern = '".$phoneno."'");
			
	if(mysql_num_rows($q) == 0)
	{
		$insert = mysql_query("INSERT INTO tbl_users (usern, passwd, rights) VALUES ('".$phoneno."', '".sha1($phoneno)."', '".$access_level."')");
						
		if($insert)
		{
			$insertid = mysql_insert_id();
							
			mysql_query("INSERT INTO tbl_users_guests (userid, names, date_added) VALUES ('".$insertid."' , '".$names."', '".$now."')");
				
			echo 10;
		}
		else
		{
			echo 11;
		}
	}
	else
	{
		echo 12;
	}
?>