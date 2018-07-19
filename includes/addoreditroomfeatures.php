<?php
	
	@session_start();
	
	require_once("../includes/func_list.php");
	
	//DATA
		
	$roomid = inputCleaner($_POST['roomid']);
	
	$featurecount = inputCleaner($_POST['featurecount']);
	
	$value = 0;
	
	for($i = 1; $i <= $featurecount; $i++)
	{
		if($_POST['feature'.$i] != "")
		{
			$value = $_POST['feature'.$i];
		}
	}
	
	if($value == 0)
	{
		$result = 30;
	}
	else
	{
		mysql_query("DELETE FROM tbl_roomfeatures WHERE roomid = '".$roomid."'");
		
		for($x = 1; $x <= $featurecount; $x++)
		{
			if($_POST['feature'.$x] != 0)
			{
				$insert = mysql_query("INSERT INTO tbl_roomfeatures (roomid, featureid) VALUES ('".$roomid."', '".$_POST['feature'.$x]."')");
			}
		}
						
		if($insert)
		{
			$result = 10;
		}
		else
		{
			$result = 11;
		}
	}
	
	
?>
<script language="javascript" type="text/javascript">window.top.window.stopUpload(<?php echo $result; ?>);</script>