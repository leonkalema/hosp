<?php

	@session_start();
	
	require_once("../includes/func_list.php");
	
	///DATA
	$title = $_POST['title'];
	
	$editid = $_POST['editid'];
	
	$thispic = mktime();
	
	if($editid == 0)
	{
		$qry = mysql_query("SELECT id FROM tbl_slideshow WHERE title = '".$title."'");
		
		if(mysql_num_rows($qry) == 0)
		{
			if($_FILES['user_img']['name'] != "")
			{
				$file = strtolower($_FILES['user_img']['name']);
			
				$file_type = explode(".",$file,"2");
						
				if(($file_type[1] != "jpeg") && ($file_type[1] != "jpg") && ($file_type[1] != "pjpeg") && ($file_type[1] != "gif") && ($file_type[1] != "png"))
				{
					$result = "1";
				}
				/*elseif($_FILES['user_img']['size'] == 0)
				{
					$result = "2"; 
				}*/
				else
				{
					$image = getimagesize($_FILES['user_img']['tmp_name']);
					
					if($image[0] != 1009 && $image[1] != 376)
					{
						$result = "3";
					}
					else
					{
						$picture = $thispic.".".$file_type[1];
						
						$insert = mysql_query("INSERT INTO tbl_slideshow (title, picture) VALUES ('".$title."', '".$picture."')");
							
						if($insert)
						{
							copy($_FILES['user_img']['tmp_name'],"../file_loads/".$picture);
								
							$result = "4";
						}
						else
						{
							$result = "5";
						}
					}
				}
			}
		}
		else
		{
			$result = "7";
		}
	}
	else
	{
		$qry = mysql_query("SELECT id FROM tbl_slideshow WHERE title = '".$title."' && id != '".$editid."'");
		
		if(mysql_num_rows($qry) == 0)
		{
			if($_FILES['user_img']['name'] != "")
			{
				$file = strtolower($_FILES['user_img']['name']);
			
				$file_type = explode(".",$file,"2");
						
				if(($file_type[1] != "jpeg") && ($file_type[1] != "jpg") && ($file_type[1] != "pjpeg") && ($file_type[1] != "gif") && ($file_type[1] != "png"))
				{
					$result = "1";
				}
				/*elseif($_FILES['user_img']['size'] == 0)
				{
					$result = "2"; 
				}*/
				else
				{
					$image = getimagesize($_FILES['user_img']['tmp_name']);
					
					if($image[0] != 1009 && $image[1] != 376)
					{
						$result = "3";
					}
					else
					{
						$picture = $thispic.".".$file_type[1];
						
						$update = mysql_query("UPDATE tbl_slideshow SET title = '".$title."', picture = '".$picture."' WHERE id = '".$editid."'");
							
						if($update)
						{
							copy($_FILES['user_img']['tmp_name'],"../file_loads/".$picture);
								
							$result = "6";
						}
						else
						{
							$result = "5";
						}
					}
				}
			}
			else
			{
				$update = mysql_query("UPDATE tbl_slideshow SET title = '".$title."' WHERE id = '".$editid."'");
							
				if($update)
				{
					$result = "6";
				}
				else
				{
					$result = "5";
				}	
			}
		}
		else
		{
			$result = "7";
		}
	}
?>
<script language="javascript" type="text/javascript">window.top.window.stopUpload(<?php echo $result; ?>);</script>