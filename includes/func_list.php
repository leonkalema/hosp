<?php

	require_once("../includes/site_file.php");
	
	$page = $_SERVER['SCRIPT_NAME'];
	
	$thispage = explode("/", $page, 6); //print_r($thispage);
	
	//Function to clean user input
	function inputCleaner($item)
	{
		//strip white space
		$step1 = trim($item);
		
		//remove tags
		$step2 = strip_tags($step1);
		
		$step3 = str_replace("?", "",$step2);
		
		$step3 = str_replace("?", "",$step3);
		
		$step3 = str_replace("?", "",$step3);
		
		$step3 = str_replace("?", "",$step3);
		
		$step3 = str_replace("?", "",$step3);
		
		$step3 = str_replace("?", "",$step3);
		
		$step3 = str_replace("?", "",$step3);
		
		$step3 = str_replace("$", "",$step3);
		
		$step3 = str_replace("%", "",$step3);
		
		$step3 = str_replace("*", "",$step3);
				
		$step3 = str_replace("&&", "",$step3);
		
		$step3 = str_replace("{", "",$step3);
		
		$step3 = str_replace("[", "",$step3);
		
		$step3 = str_replace("]", "",$step3);
		
		$step3 = str_replace("}", "",$step3);
		
		$step3 = str_replace("\"", "",$step3);
		
		$step3 = str_replace("|", "",$step3);
		
		$step3 = str_replace(";", "",$step3);
		
		$step3 = str_replace(":", "",$step3);
		
		$step3 = str_replace(",", "",$step3);
		
		$step3 = str_replace("/", "",$step3);
		

		$step3 = stripslashes($step3);
		
		//clean for DB
		$clean = mysql_real_escape_string($step3);
		
		return $step3;
	}
	
	//Function
	function getThisRand()
	{
		$random = mt_rand(1,1987654320);
		
		$randomstring = substr($random,0,6);
		
		return $randomstring;
	}

	function getExtension($str) 
	{
		$i = strrpos($str,".");
        
		if (!$i) 
		{ 
			return ""; 
		} 

        $l = strlen($str) - $i;
        
		$ext = substr($str,$i+1,$l);
        
		return $ext;
 	}
	
	//Session Time Function
	function time_stamp($session_time)
	{
		$time_difference = time() - $session_time ;
		
		$seconds = $time_difference ;
		$minutes = round($time_difference / 60 );
		$hours = round($time_difference / 3600 );
		$days = round($time_difference / 86400 );
		$weeks = round($time_difference / 604800 );
		$months = round($time_difference / 2419200 );
		$years = round($time_difference / 29030400 );
		// Seconds
		if($seconds == 0)
		{
		echo "Just now";
		}
		elseif($seconds > 0 && $seconds <= 60)
		{
		echo "$seconds seconds ago";
		}
		//Minutes
		else if($minutes <=60)
		{
		
		   if($minutes==1)
		  {
		   echo "one minute ago";
		   }
		   else
		   {
			echo "$minutes minutes ago";
		   }
		
		}
		//Hours
		else if($hours <=24)
		{
		
		   if($hours==1)
		  {
		   echo "one hour ago";
		  }
		  else
		  {
		   echo "$hours hours ago";
		  }
		
		}
		//Days
		else if($days <= 7)
		{
		
		  if($days==1)
		  {
		   echo "one day ago";
		  }
		  else
		  {
		   echo "$days days ago";
		   }
		
		}
		//Weeks
		else if($weeks <= 4)
		{
		
		   if($weeks==1)
		  {
		   echo "one week ago";
		   }
		  else
		  {
		   echo "$weeks weeks ago";
		  }
		
		}
		//Months
		else if($months <=12)
		{
		
		   if($months==1)
		  {
		   echo "one month ago";
		   }
		  else
		  {
		   echo "$months months ago";
		   }
		
		}
		//Years
		else
		{
		
		   if($years==1)
		   {
			echo "one year ago";
		   }
		   else
		  {
			echo "$years years ago";
		   }
		
		}
	
	}
	
	//File size
	function getFileSize($filename, $directory)
	{
		$getsize = @filesize($directory.$filename);
		
		$sizes = array(" Bytes", " KB", " MB", " GB", " TB", " PB", " EB", " ZB", " YB");
     	
		if ($getsize == 0) 
		{
			return('0 Bytes'); 
		} 
		else 
		{
      		return (round($getsize/pow(1024, ($i = floor(log($getsize, 1024)))), $i > 1 ? 2 : 0) . $sizes[$i]); 
		}
	}

?>