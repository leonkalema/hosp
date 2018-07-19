<?php

	@session_start();
	
	require_once("../includes/func_list.php");
	
	///DATA
	$rawuser = $_POST['user'];
	
	$rawpass = $_POST['pass'];
	
	$qry = mysql_query("SELECT id, usern, rights FROM tbl_users WHERE usern = '".$rawuser."' && passwd = '".sha1($rawpass)."'");
	
	if(mysql_num_rows($qry) > 0)
	{
		$user = mysql_fetch_array($qry);
		
		$_SESSION['pid'] = $user['id'];
		
		$_SESSION['rights'] = $user['rights'];
		
		if($user['rights'] == 6 || $user['rights'] == 4)
		{
			//Get user details
			
			$details = mysql_fetch_array(mysql_query("SELECT * FROM tbl_users_details WHERE userid = '".$user['id']."'"));
			
			$_SESSION['websitename'] = $details['names'];
			
			$_SESSION['phoneno'] = $details['phoneno']; 
			
			$_SESSION['email'] = $details['email']; 	 
			
		}
		elseif($user['rights'] == 2)
		{
			//Get user details
			
			$details = mysql_fetch_array(mysql_query("SELECT * FROM tbl_users_guests WHERE userid = '".$user['id']."'"));
			
			$_SESSION['websitename'] = $details['names'];
			
			$_SESSION['phoneno'] = $user['usern']; 	 
			
		}
		
		if($user['rights'] == 8)
		{
			$_SESSION['websitename'] = "Website Master";
			
			echo "80";
		}
		elseif($user['rights'] == 6)
		{
			echo "60";
		}
		elseif($user['rights'] == 4)
		{
			echo "40";
		}
		elseif($user['rights'] == 2)
		{
			echo "20";
		}
	}
	else
	{
		echo "90";
	}

?>