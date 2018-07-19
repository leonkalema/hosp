<?php

	@session_start();
	
	require_once("../includes/func_list.php");

	//echo "<pre>"; print_r($_SESSION);
	
	if($_SESSION['refno'] == "")
	{
		$random = mt_rand(0,1987654320);
		
		$randomno = substr($random,0,6);
		
		$order = "HCB".$randomno;	
				
		//Check if Order Number doesnt exist
		$qry = mysql_query("SELECT refno FROM tbl_payments WHERE refno = '".$order."'");
			
		if(mysql_num_rows($qry) == 0)
		{
			$orderno = $order;
			
			$_SESSION['refno'] = $orderno;
					
			echo  $orderno;
			
            ?>
            <input type="hidden" name="refno" id="refno" value="<?php echo $orderno; ?>" />
            <?php
		}
		else
		{
			$random = mt_rand(0,1987654320);
			$randomno = substr($random,0,6);
			$order = "HCB".$randomno;	
			$orderno = $order;
			
			$_SESSION['refno'] = $orderno;
						
			echo  $orderno;
			
			?>
            <input type="hidden" name="refno" id="refno" value="<?php echo $orderno; ?>" />
            <?php	
				
		}
	}
	else
	{
		echo $_SESSION['refno'];
		
		?>
            <input type="hidden" name="refno" id="refno" value="<?php echo $_SESSION['refno']; ?>" />
        <?php
	}
	
?>