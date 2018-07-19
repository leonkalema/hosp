<?php

	@session_start();
	
	require_once("../includes/func_list.php");
	
	///DATA
	$subsresult = $_POST['subsresult'];
	
	$id = $_POST['pictureid'];
	
	if($subsresult == true)
	{
		$feat = 1;
	}
	else
	{
		$feat = 0;
	}
	
	$update = mysql_query("UPDATE tbl_slideshow SET featured = '".$feat."' WHERE id = '".$id."'");
	
	if($update)
	{
		echo "Successful";
	}
	else
	{
		echo "Unsuccessful, please retry!";
	}

?>