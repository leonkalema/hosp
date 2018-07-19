<?php

	@session_start();
	
	require_once("../includes/func_list.php");
	
	//DATA
	$refno = inputCleaner($_POST['refno']);
	
	$amount = inputCleaner($_POST['amount']);
	
	$transactionfees = inputCleaner($_POST['transactionfees']);
	
	$actual = $amount - $transactionfees;
	
	$dateposted = mktime();

	$qry = mysql_query("SELECT id FROM tbl_payments WHERE refno = '".$refno."' && userid = '".$_SESSION['pid']."'");
		
	if(mysql_num_rows($qry) == 0)
	{
		$insert = mysql_query("INSERT INTO tbl_payments (userid, refno, amount, transactionfees, dateposted) VALUES ('".$_SESSION['pid']."', '".$refno."', '".$amount."', '".$transactionfees."', '".$dateposted."')");
			
		if($insert)
		{
			$query = mysql_query("SELECT amount FROM tbl_accounts WHERE userid = '".$_SESSION['pid']."'");
			
			if(mysql_num_rows($query) != 0)
			{
				$account = mysql_fetch_array($query);
				
				$updatedamount = $actual + $account['amount'];
				
				mysql_query("UPDATE tbl_accounts SET amount = '".$updatedamount."' WHERE userid = '".$_SESSION['pid']."'");
			}
			else
			{
				mysql_query("INSERT INTO tbl_accounts (userid, amount) VALUES ('".$_SESSION['pid']."', '".$actual."')");
			}
			
			echo 100;
			
			$_SESSION['refno'] = "";
		}
		else
		{
			echo "<font color = 'red'>Unable to add Deposit, please retry later!</font>";
		}
	}
	else
	{
		echo "<font color = 'red'>Specified Reference Number is already saved!</font>";
	}
?>