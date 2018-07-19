<table border="0" width="1009px" cellpadding="0" cellspacing="0">
	<tr>
    	<td style="padding-top:10px; padding-bottom:10px;">
        	<?php require_once("../includes/topfile_cp.php"); ?>
        </td>
    </tr>
    <tr>
    	<td valign="top">
        	<table border="0" width="100%" cellpadding="0" cellspacing="0">
            	<tr>
					<td width="20%" style="border-right:solid #000000 2px; border-left:solid #000000 2px;" valign="top">
                    	<?php require_once("../includes/leftmenu_users.php"); ?>
          	        </td>
                    <td valign="top">
						<?php
                        if($thispage[3] == "index.php")
						{
						?>
                        <table border="0" width="100%" cellpadding="2" cellspacing="2">
                        	<tr>
                            	
                                <td valign="top">
                                	<table border="0" width="100%" cellpadding="2" cellspacing="2">
                                    	<tr>
                                        	<td align="left">
                                            	<b class="pagetitle">>> DashBoard</b>
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td style="padding-top:10px; text-align:left;">
                                            	<p>Welcome to the Dash Board of Hotel Catherine Website.</p>
                                            	<p>&nbsp;</p>
                                           	  <p>Please use the menu on the left to go to particular sections of the website to add or edit or delete website content.</p>
                                           	  <p>&nbsp;</p>
                                           	  <p>Please use caution as some actions cant be reversed when executed.</p>
                                           	  <p>&nbsp;</p>
                                           	  <p>Thank you,</p>
                                           	  <p>&nbsp;</p>
                                           	  <p>Development Team</p>
                                           	  <p>&nbsp;</p>
                                       	    </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <?php
						}
						elseif($thispage[3] == "hotel_rooms.php")
						{
						?>
                        <table border="0" width="100%" cellpadding="2" cellspacing="2">
                                            <tr>
                                                <td align="left">
                                                    <b class="pagetitle">>> View Hotel Rooms Status</b>
                                                </td>
                                            </tr>
                                            <?php
                                                $qry = mysql_query("SELECT * FROM tbl_rooms ORDER BY roomnumber");
                                                
                                                $num = mysql_num_rows($qry);
                                            ?>
                                           <tr>
                                                <td style="padding-top:15px;">
                                                    Number of entries: <b><?php echo $num; ?></b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top:15px;">
                                                    <table border="1" width="50%" cellpadding="0" cellspacing="0">
                                                    	<tr>
                                                        	<td width="8%">
                                                            	<b>KEY:</b>
                                                            </td>
                                                        	<td width="6%">
                                                            	<div style="width:15px; height:15px; background-color:#090;"></div>
                                                            </td>
                                                            <td>
                                                            	Un-occupied Rooms
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                        	<td colspan="3" height="10px">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                        	<td>
                                                            </td>
                                                            <td>
                                                            	<div style="width:15px; height:15px; background-color:#30C;;"></div>
                                                            </td>
                                                            <td>
                                                            	Booked/Pending Confirmation Rooms
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                        	<td colspan="3" height="10px">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                        	<td>
                                                            </td>
                                                            <td>
                                                            	<div style="width:15px; height:15px; background-color:#C00;"></div>
                                                            </td>
                                                            <td>
                                                            	Occupied Rooms
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <?php
                                            if($num != 0)
                                            {
                                            ?>
                                            <tr>
                                                <td style="padding-top:15px;">
                                                    <table border="1" width="100%" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td width="4%" class="tdheader" style="background-color:#000;">
                                                                #
                                                            </td>
                                                            <td class="tdheader" style="background-color:#000;">
                                                                All Hotel Rooms
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="tddata">
                                                                
                                                            </td>
                                                            <td>
                                                                <?php
                                                                
																echo "<table border=\"1\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">";
                                                                															
																$myx = 1;
																
																for($x = 1; $x <= $num; $x++)
																{
																	$rooms = mysql_fetch_array($qry);
																	
																	if($myx == 1)
																	{
																		echo "<tr>";
																			echo "<td colspan=\"12\" height=\"12px\">";
																			echo "</td>";
																		echo "</tr>";
																		echo "<tr>";
																		$roomclass = "occupied";
																		
																		echo "<td width=\"15%\" align=\"center\" class=\"".$roomclass."\">";
																		 echo $rooms['roomnumber'];
																		echo "</td>";
																		echo "<td>";
																		echo "</td>";
																		$myx = $myx + 1;
																	}
																	
																	if($myx <= 5)
																	{
																		$roomclass = "unoccupied";
																		
																		echo "<td width=\"15%\" align=\"center\" class=\"".$roomclass."\">";
																		 echo $rooms['roomnumber'];
																		echo "</td>";
																		
																		echo "<td>";
																		echo "</td>";
																		
																		$myx = $myx + 1; 
																	}
																	elseif($myx == 6)
																	{
																		$roomclass = "unoccupied";
																		
																		echo "<td width=\"15%\" align=\"center\" class=\"".$roomclass."\">";
																		 echo $rooms['roomnumber'];
																		echo "</td>";
																		
																		echo "</tr>";
																		echo "<tr>";
																			echo "<td colspan=\"12\" height=\"12px\">";
																			echo "</td>";
																		echo "</tr>";
																		
																		$myx = 1;
																	}
																}
																
                                                                echo "</table>";
																
																?>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>	
                                            </tr>
                                            <?php	
                                            }
                                            else
                                            {
                                            ?>
                                            <tr>
                                                <td style="padding-top:15px;">
                                                    <i>No rooms found!</i>
                                                </td>	
                                            </tr>
                                            <?php	
                                            }
                                            
                                            ?>
                                        </table>
                        <?php	
						}
						elseif($thispage[3] == "manage_payments.php")
						{
						?>
                        <table border="0" width="100%" cellpadding="2" cellspacing="2">
                                            <tr>
                                                <td align="left">
                                                    <b class="pagetitle">>> Manage Mobile Money Payments</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left">
                                                    <table border="1" width="41%" cellpadding="2" cellspacing="4">
                                                        <tr>
                                                            <td class="blacktd">
                                                                <a href="../ink_frontdesk/manage_payments.php?t=pending" class="whitelinks">View Pending Payments</a>
                                                            </td>
                                                            <td class="blacktd">
                                                                <a href="../ink_frontdesk/manage_payments.php?t=approved" class="whitelinks">View Approved Payments</a>
                                                            </td>
                                                        </tr>
                                                    </table> 
                                                </td>
                                            </tr>
                                            <?php
                                            if($_GET['t'] == "pending")
                                            {
                                                $qry = mysql_query("SELECT * FROM tbl_payments WHERE senddeposit = 1 && status = 0 ORDER BY dateposted DESC");
                                                
                                                $num = mysql_num_rows($qry);
                                            ?>
                                            <tr>
                                                <td>
                                                    <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td style="padding-top:10px;">
                                                                <b>View/Delete Pending Deposits</b>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top:15px;">
                                                    Number of entries: <b><?php echo $num; ?></b>
                                                </td>
                                            </tr>
                                            <?php
                                            if($num != 0)
                                            {
                                            ?>
                                            <tr>
                                                <td style="padding-top:15px;">
                                                    <table border="1" width="100%" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td width="5%" class="tdheader">
                                                                #
                                                            </td>
                                                            <td class="tdheader">
                                                                Payment By
                                                            </td>
                                                            <td width="13%" class="tdheader">
                                                                Ref No
                                                            </td>
                                                            <td width="17%" class="tdheader">
                                                                Deposit
                                                            </td>
                                                            <td width="15%" class="tdheader">
                                                                Transation Fees
                                                            </td>
                                                            <td width="8%" align="center" class="tdheader">
                                                                Approval
                                                            </td>
                                                            <td width="15%" class="tdheader">
                                                                Date Posted
                                                            </td>
                                                            <td width="5%" class="tdheader">
                                                                Delete
                                                            </td>
                                                        </tr>
                                                        <?php
                                                        
                                                        $counter = 1;
                                                        
                                                        while($result = mysql_fetch_array($qry))
                                                        {
                                                            if(($counter % 2) == 0)
                                                            {
                                                                $row = "evenrow";
                                                            }
                                                            else
                                                            {
                                                                $row = "oddrow";
                                                            }
															
															$deposited = $result['amount'] - $result['transactionfees'];
                                                        ?>
                                                        <tr class="<?php echo $row; ?>">
                                                            <td class="tddata">
                                                                <b><?php echo $counter; ?>.</b>
                                                            </td>
                                                            <td class="tddata">
                                                                <?php
																
																$paymentby = mysql_fetch_array(mysql_query("SELECT names FROM tbl_users_guests WHERE userid = '".$result['userid']."'"));
																
																echo $paymentby['names'];
																
																?>
                                                            </td>
                                                            <td class="tddata">
                                                                <?php echo $result['refno']; ?>
                                                            </td>
                                                            <td class="tddata">
                                                                <?php echo "Ugx ".number_format($deposited, "0", "", ",")."/="; ?>
                                                            </td>
                                                            <td class="tddata">
                                                                <?php echo "Ugx ".number_format($result['transactionfees'], "0", "", ",")."/="; ?>
                                                            </td>
                                                            <td align="center" class="tddata">
                                                                <a href="#" onclick="return approvePayment('../ink_frontdesk/manage_payments.php?r=pending&a=<?php echo base64_encode($result['id']); ?>', 'Payment - <?php echo $result['refno']; ?>');" title="Approve Payment - <?php echo $result['refno']; ?>" class="links">Approve</a>
                                                            </td>
                                                            <td class="tddata">
                                                                <?php echo date("jS/F/Y", $result['dateposted']); ?>
                                                            </td>
                                                            <td class="tddata">
                                                                <?php
																if($result['senddeposit'] != 1)
																{
																?>
																	<a href="#" onclick="return deleteEntity('../ink_frontdesk/manage_payments.php?r=pending&d=<?php echo base64_encode($result['id']); ?>', 'Deposit - <?php echo $result['refno']; ?>');" title="Delete Deposit - <?php echo $result['refno']; ?>" class="links">Delete</a>
                                                             	<?php
																}
																else
																{
																	echo "Delete";	
																}
																?>
                                                            </td>
                                                        </tr>
                                                        <?php	
                                                        
                                                        $counter++;
                                                        
                                                        }
                                                        
                                                        ?>
                                                    </table>
                                                </td>	
                                            </tr>
                                            <?php	
                                            }
                                            else
                                            {
                                            ?>
                                            <tr>
                                                <td style="padding-top:15px;">
                                                    <i>No payments found!</i>
                                                </td>	
                                            </tr>
                                            <?php	
                                            }
                                            }
											elseif($_GET['t'] == "approved")
                                            {
                                                $qry = mysql_query("SELECT * FROM tbl_payments WHERE senddeposit = 1 && status = 1 ORDER BY dateposted DESC");
                                                
                                                $num = mysql_num_rows($qry);
                                            ?>
                                            <tr>
                                                <td>
                                                    <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td style="padding-top:10px;">
                                                                <b>View Approved Deposits</b>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top:15px;">
                                                    Number of entries: <b><?php echo $num; ?></b>
                                                </td>
                                            </tr>
                                            <?php
                                            if($num != 0)
                                            {
                                            ?>
                                            <tr>
                                                <td style="padding-top:15px;">
                                                    <table border="1" width="100%" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td width="5%" class="tdheader">
                                                                #
                                                            </td>
                                                            <td class="tdheader">
                                                                Payment By
                                                            </td>
                                                            <td width="13%" class="tdheader">
                                                                Ref No
                                                            </td>
                                                            <td width="17%" class="tdheader">
                                                                Deposit
                                                            </td>
                                                            <td width="15%" class="tdheader">
                                                                Transation Fees
                                                            </td>
                                                            <td width="8%" align="center" class="tdheader">
                                                                Approved
                                                            </td>
                                                            <td width="15%" class="tdheader">
                                                                Date Posted
                                                            </td>
                                                            <td width="5%" class="tdheader">
                                                                Delete
                                                            </td>
                                                        </tr>
                                                        <?php
                                                        
                                                        $counter = 1;
                                                        
                                                        while($result = mysql_fetch_array($qry))
                                                        {
                                                            if(($counter % 2) == 0)
                                                            {
                                                                $row = "evenrow";
                                                            }
                                                            else
                                                            {
                                                                $row = "oddrow";
                                                            }
															
															$deposited = $result['amount'] - $result['transactionfees'];
                                                        ?>
                                                        <tr class="<?php echo $row; ?>">
                                                            <td class="tddata">
                                                                <b><?php echo $counter; ?>.</b>
                                                            </td>
                                                            <td class="tddata">
                                                                <?php
																
																$paymentby = mysql_fetch_array(mysql_query("SELECT names FROM tbl_users_guests WHERE userid = '".$result['userid']."'"));
																
																echo $paymentby['names'];
																
																?>
                                                            </td>
                                                            <td class="tddata">
                                                                <?php echo $result['refno']; ?>
                                                            </td>
                                                            <td class="tddata">
                                                                <?php echo "Ugx ".number_format($deposited, "0", "", ",")."/="; ?>
                                                            </td>
                                                            <td class="tddata">
                                                                <?php echo "Ugx ".number_format($result['transactionfees'], "0", "", ",")."/="; ?>
                                                            </td>
                                                            <td align="center" class="tddata">
                                                                  <a href="#" onclick="return cancelPayment('../ink_frontdesk/manage_payments.php?r=approved&c=<?php echo base64_encode($result['id']); ?>', 'Payment - <?php echo $result['refno']; ?>');" title="Cancel Payment - <?php echo $result['refno']; ?>" class="links">Cancel</a>
															</td>
                                                            <td class="tddata">
                                                                <?php echo date("jS/F/Y", $result['dateposted']); ?>
                                                            </td>
                                                            <td class="tddata">
                                                                <?php
																if($result['senddeposit'] != 1)
																{
																?>
																	<a href="#" onclick="return deleteEntity('../ink_frontdesk/manage_deposits.php?r=approved&d=<?php echo base64_encode($result['id']); ?>', 'Deposit - <?php echo $result['refno']; ?>');" title="Delete Deposit - <?php echo $result['refno']; ?>" class="links">Delete</a>
                                                             	<?php
																}
																else
																{
																	echo "Delete";	
																}
																?>
                                                            </td>
                                                        </tr>
                                                        <?php	
                                                        
                                                        $counter++;
                                                        
                                                        }
                                                        
                                                        ?>
                                                    </table>
                                                </td>	
                                            </tr>
                                            <?php	
                                            }
                                            else
                                            {
                                            ?>
                                            <tr>
                                                <td style="padding-top:15px;">
                                                    <i>No payments found!</i>
                                                </td>	
                                            </tr>
                                            <?php	
                                            }
                                            }
                                            
                                            ?>
                                        </table>
                        <?php	
						}
						?>
                   	</td>
               	</tr>
            </table>
        </td>
    </tr>
    <tr>
    	<td style="padding-bottom:10px;">
        </td>
    </tr>
</table>