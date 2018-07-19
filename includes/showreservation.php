<?php

	@session_start();
	
	require_once("../includes/func_list.php"); 
	
	///DATA
	$accountbalanceid = $_POST['accountbalanceid'];
	
	$startdate = $_POST['startdate'];
	
	$noofdays = $_POST['noofdays'];
	
	$roomtypeid = $_POST['roomtypeid'];
	
	$m = substr($startdate,0,2);
	
	$d = substr($startdate,3,2);
	
	$y = substr($startdate,6,4);
	
	$starttimestamp = mktime(0, 0, 0, $m, $d, $y);
	
	$accountbalance = mysql_fetch_array(mysql_query("SELECT amount FROM tbl_accounts WHERE id = '".$accountbalanceid."'"));
	
	$roomrate = mysql_fetch_array(mysql_query("SELECT roomrate FROM tbl_roomtypes WHERE id = '".$roomtypeid."'"));
	
	$roomrateandduration = $roomrate['roomrate'] * $noofdays;
	
	$deduction = $accountbalance['amount'] - $roomrateandduration;
	
?>
<table border="1" width="100%" cellpadding="0" cellspacing="0">
	<tr>
    	<td width="15%" style="padding-top:15px;" align="right">
        	Room Availability: &nbsp;
        </td>
        <td style="padding-top:15px;">
        	x
        </td>
    </tr>
    <tr>
    	<td style="padding-top:15px;" align="right">
        	Total Deduction: &nbsp;
        </td>
        <td style="padding-top:15px;">
        	<?php echo "Ugx ".number_format($roomrateandduration, "0", "", ",")."/="; ?>
        </td>
    </tr>
    <tr>
    	<td style="padding-top:15px;" align="right">
        	<b>Balance:</b> &nbsp;
        </td>
        <td style="padding-top:15px;">
        	<?php echo "Ugx ".number_format($deduction, "0", "", ",")."/="; ?>
        </td>
    </tr>
</table>