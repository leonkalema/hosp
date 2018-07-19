<?php

	@session_start();
	
	require_once("../includes/func_list.php");
	
	///DATA
	$roomnumber = inputCleaner($_POST['roomnumber']);
	
	$roomtypeid = inputCleaner($_POST['roomtypeid']);
	
	$editid = inputCleaner($_POST['editid']);

	if($editid == 0)
	{
		$qry = mysql_query("SELECT id FROM tbl_rooms WHERE roomtypeid = '".$roomtypeid."' && roomnumber = '".$roomnumber."'");
		
		if(mysql_num_rows($qry) == 0)
		{
			$insert = mysql_query("INSERT INTO tbl_rooms (roomtypeid, roomnumber) VALUES ('".$roomtypeid."', '".$roomnumber."')");
			
			if($insert)
			{
				echo "<font color = 'green'>Hotel Room added successfully!</font>";
			}
			else
			{
				echo "<font color = 'red'>Unable to add Hotel Room, please retry!</font>";
			}
		}
		else
		{
			echo "<font color = 'red'>Specified Hotel Room is already registered, please enter another!</font>";
		}
	}
	else
	{
		$qry = mysql_query("SELECT id FROM tbl_rooms WHERE roomtypeid = '".$roomtypeid."' && roomnumber = '".$roomnumber."' && id != '".$editid."'");
		
		if(mysql_num_rows($qry) == 0)
		{
			$update = mysql_query("UPDATE tbl_rooms SET roomtypeid = '".$roomtypeid."', roomnumber = '".$roomnumber."' WHERE id = '".$editid."'");
			
			if($update)
			{
				echo "<font color = 'green'>Hotel Room updated successfully!</font>";
			}
			else
			{
				echo "<font color = 'red'>Unable to save changes, please retry!</font>";
			}
		}
		else
		{
			echo "<font color = 'red'>Specified Hotel Room is already registered, please enter another!</font>";
		}	
	}
?>