<?php

	@session_start();
	
	require_once("../includes/func_list.php");
	
	///DATA
	$content = mysql_real_escape_string(nl2br($_POST['pagecontent']));
	
	$editid = $_POST['editid'];
	
	if($editid != 0)
	{
		$update = mysql_query("UPDATE tbl_website SET content = '".$content."' WHERE id = '".$editid."'");
		
		if($update)
		{
			echo "<font color = 'green'>Information saved successfully!</font>";
		}
		else
		{
			echo "<font color = 'red'>Unable to save changes made, please retry!</font>";
		}
	}
	else
	{
		echo "<font color = 'red'>Unexpected error occured, please contact Development Team!</font>";
	}
	
?>