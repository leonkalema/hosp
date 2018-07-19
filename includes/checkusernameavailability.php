<?php

	@session_start();
	
	require_once("../includes/func_list.php");
	
	///DATA
	$username = inputCleaner($_POST['username']);
	
	$qry = mysql_query("SELECT id FROM tbl_users WHERE usern = '".$username."' && usern != 'root' && usern != 'administrator' && usern != 'admin' && usern != 'hrsadmin'");
	
	if(mysql_num_rows($qry) == 0)
	{
		echo 101;	
	}
	else
	{
		echo 202;
	}
	
?>