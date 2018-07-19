<?php

	@session_start();
	
	require_once("../includes/func_list.php");
	
	///DATA
	$names = inputCleaner($_POST['names']);
	
	$roomrate = inputCleaner($_POST['roomrate']);
	
	$editid = inputCleaner($_POST['editid']);

	if($editid == 0)
	{
		$qry = mysql_query("SELECT id FROM tbl_roomtypes WHERE names = '".$names."'");
		
		if(mysql_num_rows($qry) == 0)
		{
			$insert = mysql_query("INSERT INTO tbl_roomtypes (names, roomrate) VALUES ('".$names."', '".$roomrate."')");
			
			if($insert)
			{
				echo "<font color = 'green'>Room Type added successfully!</font>";
			}
			else
			{
				echo "<font color = 'red'>Unable to add Room Type, please retry!</font>";
			}
		}
		else
		{
			echo "<font color = 'red'>Specified Room Type is already registered, please enter another!</font>";
		}
	}
	else
	{
		$qry = mysql_query("SELECT id FROM tbl_roomtypes WHERE names = '".$names."' && id != '".$editid."'");
		
		if(mysql_num_rows($qry) == 0)
		{
			$update = mysql_query("UPDATE tbl_roomtypes SET names = '".$names."', roomrate = '".$roomrate."' WHERE id = '".$editid."'");
			
			if($update)
			{
				echo "<font color = 'green'>Room Type updated successfully!</font>";
			}
			else
			{
				echo "<font color = 'red'>Unable to save changes, please retry!</font>";
			}
		}
		else
		{
			echo "<font color = 'red'>Specified Room Type is already registered, please enter another!</font>";
		}	
	}
?>