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
						elseif($thispage[3] == "room_rates.php")
						{
						?>
                        <table border="0" width="100%" cellpadding="2" cellspacing="2">
                                            <tr>
                                                <td align="left">
                                                    <b class="pagetitle">>> Hotel Room Rates</b>
                                                </td>
                                            </tr>
                                            <?php	
                                            	 $qry = mysql_query("SELECT * FROM tbl_roomtypes ORDER BY roomrate");
                                                
                                                $num = mysql_num_rows($qry);
                                            ?>
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
                                                    <table border="1" width="80%" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td width="5%" class="tdheader">
                                                                #
                                                            </td>
                                                            <td width="40%" class="tdheader">
                                                                Names
                                                            </td>
                                                            <td class="tdheader">
                                                                Room Rate
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
                                                        ?>
                                                        <tr class="<?php echo $row; ?>">
                                                            <td class="tddata">
                                                                <b><?php echo $counter; ?>.</b>
                                                            </td>
                                                            <td class="tddata">
                                                                <?php echo $result['names']; ?>
                                                            </td>
                                                            <td class="tddata">
                                                                <?php echo "Ugx ".number_format($result['roomrate'], "0", "", ",")."/="; ?>
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
                                                    <i>No room types found!</i>
                                                </td>	
                                            </tr>
                                            <?php	
                                            }
                                            
                                            ?>
                                        </table>
                        <?php	
						}
						elseif($thispage[3] == "manage_deposits.php")
						{
						?>
                        <table border="0" width="100%" cellpadding="2" cellspacing="2">
                                            <tr>
                                                <td align="left">
                                                    <b class="pagetitle">>> Manage Mobile Money Deposits</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left">
                                                    <table border="1" width="100%" cellpadding="2" cellspacing="4">
                                                        <tr>
                                                            <td class="blacktd">
                                                                <a href="#" class="whitelinks">How To Pay</a>
                                                            </td>
                                                            <td class="blacktd">
                                                                <a href="../ink_guest/manage_deposits.php?t=add" class="whitelinks">Add Deposit</a>
                                                            </td>
                                                            <td class="blacktd">
                                                                <a href="../ink_guest/manage_deposits.php?t=pending" class="whitelinks">View Pending Deposits</a>
                                                            </td>
                                                            <td class="blacktd">
                                                                <a href="../ink_guest/manage_deposits.php?t=approved" class="whitelinks">View Approved Deposits</a>
                                                            </td>
                                                            <td class="blacktd">
                                                                <a href="../ink_guest/manage_deposits.php?t=view" class="whitelinks">View All Deposits</a>
                                                            </td>
                                                            <td class="blacktd">
                                                                <a href="../ink_guest/manage_deposits.php?t=status" class="whitelinks">Account Status</a>
                                                            </td>
                                                        </tr>
                                                    </table> 
                                                </td>
                                            </tr>
                                            <?php
                                            if($_GET['t'] == "add" || $_GET['edit'])
                                            {
                                                if($_GET['edit'])
                                                {
                                                    $id = base64_decode($_GET['edit']);
                                                    
                                                    $edit = mysql_fetch_array(mysql_query("SELECT * FROM tbl_payments WHERE id = '".$id."'"));
                                                }
                                            ?>
                                            <tr>
                                                <td>
                                                    <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td style="padding-top:10px;">
                                                                <?php
                                                                if($_GET['edit'])
                                                                {
                                                                ?>
                                                                    <b> Edit Deposit - </b><?php echo $edit['names']; ?>
                                                                <?php	
                                                                }
                                                                else
                                                                {
                                                                ?>
                                                                    <b> Add Deposit</b>
                                                                <?php	
                                                                }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td style="padding-top:0px;">
                                                                <form method="post" action="xmlactionx=" autocomplete = "off" onsubmit="return Empty('amount', 'Please enter Amount to Deposit', 'showerror') && addoreditDeposits('refno', 'amount', 'transactionfees', 'showerror');">
                                                                <table border="1" width="100%" cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td colspan="2" style="padding-top:5px;">
                                                                            <div id="showerror"></div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-top:15px;" width="15%" align="right">
                                                                           <b>Reference No.</b>: &nbsp;
                                                                        </td>
                                                                        <td style="padding-top:15px;">
                                                                            <?php require_once("../includes/run_ref.php"); ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-top:15px;" align="right">
                                                                            Amount: &nbsp;
                                                                        </td>
                                                                        <td style="padding-top:15px;">
                                                                            <input type="text" name="amount" id="amount" size="30" value="<?php echo $edit['amount']; ?>" onKeyDown="return onlyNumbers('amount', 'showerror');" /> <b>Ugx</b>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-top:15px;" align="right">
                                                                            Transaction Fees: &nbsp;
                                                                        </td>
                                                                        <td style="padding-top:15px;">
                                                                            <input type="hidden" name="transactionfees" id="transactionfees" value="5000" />
                                                                            <b>Ugx 5,000/=</b>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                        </td>
                                                                        <td style="padding-top:15px;">
                                                                            <?php
                                                                            if($_GET['edit'])
                                                                            {
                                                                            ?>
                                                                            <input type="hidden" name="editid" id="editid" value="<?php echo $id; ?>" />
                                                                            <input type="submit" value="Save Changes" />
                                                                            <?php	
                                                                            }
                                                                            else

                                                                            {
                                                                            ?>
                                                                            <input type="hidden" name="editid" id="editid" value="0" />
                                                                            <input type="submit" value="Add Mobile Money Deposit" />
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <?php	
                                            }
                                            elseif($_GET['t'] == "pending")
                                            {
                                                $qry = mysql_query("SELECT * FROM tbl_payments WHERE userid = '".$_SESSION['pid']."' && status = 0 ORDER BY dateposted DESC");
                                                
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
                                                            <td width="13%" class="tdheader">
                                                                Ref No
                                                            </td>
                                                            <td width="17%" class="tdheader">
                                                                Deposit
                                                            </td>
                                                            <td width="15%" class="tdheader">
                                                                Transation Fees
                                                            </td>
                                                            <td width="16%" align="center" class="tdheader">
                                                                Submit Deposit
                                                            </td>
                                                            <td align="center" class="tdheader">
                                                                Approval Status
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
                                                                <?php echo $result['refno']; ?>
                                                            </td>
                                                            <td class="tddata">
                                                                <?php echo "Ugx ".number_format($deposited, "0", "", ",")."/="; ?>
                                                            </td>
                                                            <td class="tddata">
                                                                <?php echo "Ugx ".number_format($result['transactionfees'], "0", "", ",")."/="; ?>
                                                            </td>
                                                            <td align="center" class="tddata">
                                                               <?php
																if($result['senddeposit'] == 1)
																{
																	echo "<font color = \green\">SENT</font>";	
																}
																else
																{
																?>
                                                                <a href="#" onclick="return submitDeposit('../ink_guest/manage_deposits.php?r=pending&s=<?php echo base64_encode($result['id']); ?>', 'Deposit - <?php echo $result['refno']; ?>');" title="Submit Deposit - <?php echo $result['refno']; ?>" class="links">Submit Deposit</a>
                                                                <?php
																}
																	
																?> 
                                                            </td>
                                                            <td align="center" class="tddata">
                                                                <?php
																if($result['status'] == 1)
																{
																	echo "<font color = \green\">Yes</font>";	
																}
																else
																{
																	echo "<font color = \"red\">No</font>";	
																}
																	
																?>
                                                            </td>
                                                            <td class="tddata">
                                                                <?php echo date("jS/F/Y", $result['dateposted']); ?>
                                                            </td>
                                                            <td class="tddata">
                                                                <?php
																if($result['senddeposit'] != 1)
																{
																?>
																	<a href="#" onclick="return deleteEntity('../ink_guest/manage_deposits.php?r=pending&d=<?php echo base64_encode($result['id']); ?>', 'Deposit - <?php echo $result['refno']; ?>');" title="Delete Deposit - <?php echo $result['refno']; ?>" class="links">Delete</a>
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
                                                $qry = mysql_query("SELECT * FROM tbl_payments WHERE userid = '".$_SESSION['pid']."' && status = 1 ORDER BY dateposted DESC");
                                                
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
                                                            <td width="13%" class="tdheader">
                                                                Ref No
                                                            </td>
                                                            <td width="17%" class="tdheader">
                                                                Deposit
                                                            </td>
                                                            <td width="15%" class="tdheader">
                                                                Transation Fees
                                                            </td>
                                                            <td align="center" class="tdheader">
                                                                Approval Status
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
                                                                <?php echo $result['refno']; ?>
                                                            </td>
                                                            <td class="tddata">
                                                                <?php echo "Ugx ".number_format($deposited, "0", "", ",")."/="; ?>
                                                            </td>
                                                            <td class="tddata">
                                                                <?php echo "Ugx ".number_format($result['transactionfees'], "0", "", ",")."/="; ?>
                                                            </td>
                                                            <td align="center" class="tddata">
                                                                <?php
																if($result['status'] == 1)
																{
																	echo "<font color = \green\">Yes</font>";	
																}
																else
																{
																	echo "<font color = \"red\">No</font>";	
																}
																	
																?>
                                                            </td>
                                                            <td class="tddata">
                                                                <?php echo date("jS/F/Y", $result['dateposted']); ?>
                                                            </td>
                                                            <td class="tddata">
                                                                <?php
																if($result['senddeposit'] != 1)
																{
																?>
																	<a href="#" onclick="return deleteEntity('../ink_guest/manage_deposits.php?r=approved&d=<?php echo base64_encode($result['id']); ?>', 'Deposit - <?php echo $result['refno']; ?>');" title="Delete Deposit - <?php echo $result['refno']; ?>" class="links">Delete</a>
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
											elseif($_GET['t'] == "view")
                                            {
                                                $qry = mysql_query("SELECT * FROM tbl_payments WHERE userid = '".$_SESSION['pid']."' ORDER BY dateposted DESC");
                                                
                                                $num = mysql_num_rows($qry);
                                            ?>
                                            <tr>
                                                <td>
                                                    <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td style="padding-top:10px;">
                                                                <b>View All Deposits</b>
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
                                                            <td width="13%" class="tdheader">
                                                                Ref No
                                                            </td>
                                                            <td width="17%" class="tdheader">
                                                                Deposit
                                                            </td>
                                                            <td width="15%" class="tdheader">
                                                                Transation Fees
                                                            </td>
                                                            <td width="16%" align="center" class="tdheader">
                                                                Submit Deposit
                                                            </td>
                                                            <td align="center" class="tdheader">
                                                                Approval Status
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
                                                                <?php echo $result['refno']; ?>
                                                            </td>
                                                            <td class="tddata">
                                                                <?php echo "Ugx ".number_format($deposited, "0", "", ",")."/="; ?>
                                                            </td>
                                                            <td class="tddata">
                                                                <?php echo "Ugx ".number_format($result['transactionfees'], "0", "", ",")."/="; ?>
                                                            </td>
                                                            <td align="center" class="tddata">
                                                               <?php
																if($result['senddeposit'] == 1)
																{
																	echo "<font color = \green\">SENT</font>";	
																}
																else
																{
																?>
                                                                <a href="#" onclick="return submitDeposit('../ink_guest/manage_deposits.php?r=view&s=<?php echo base64_encode($result['id']); ?>', 'Deposit - <?php echo $result['refno']; ?>');" title="Submit Deposit - <?php echo $result['refno']; ?>" class="links">Submit Deposit</a>
                                                                <?php
																}
																	
																?> 
                                                            </td>
                                                            <td align="center" class="tddata">
                                                                <?php
																if($result['status'] == 1)
																{
																	echo "<font color = \green\">Yes</font>";	
																}
																else
																{
																	echo "<font color = \"red\">No</font>";	
																}
																	
																?>
                                                            </td>
                                                            <td class="tddata">
                                                                <?php echo date("jS/F/Y", $result['dateposted']); ?>
                                                            </td>
                                                            <td class="tddata">
                                                                <?php
																if($result['senddeposit'] != 1)
																{
																?>
																	<a href="#" onclick="return deleteEntity('../ink_guest/manage_deposits.php?r=view&d=<?php echo base64_encode($result['id']); ?>', 'Deposit - <?php echo $result['refno']; ?>');" title="Delete Deposit - <?php echo $result['refno']; ?>" class="links">Delete</a>
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
											elseif($_GET['t'] == "status")
                                            {
                                                $qry = mysql_query("SELECT * FROM tbl_accounts WHERE userid = '".$_SESSION['pid']."'");
                                                
                                                $balance = mysql_fetch_array($qry);
                                            ?>
                                            <tr>
                                                <td>
                                                    <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td style="padding-top:10px;">
                                                                <b>Account Status</b>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding-top:20px;">
                                                            	Balance: <b style="color:green;"><?php echo "Ugx ".number_format($balance['amount'], "0", "", ",")."/="; ?></b>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <?php
                                            }
                                            
                                            ?>
                                        </table>
                        <?php	
						}
						elseif($thispage[3] == "reserve_room.php")
						{
							$qry = mysql_query("SELECT * FROM tbl_accounts WHERE userid = '".$_SESSION['pid']."'");
                                                
                            $balance = mysql_fetch_array($qry);
						?>
                        <table border="0" width="100%" cellpadding="2" cellspacing="2">
                                            <tr>
                                                <td align="left">
                                                    <b class="pagetitle">>> Reserve A Room</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td style="padding-top:0px;">
                                                                <form method="post" action="xmlactionx=" autocomplete = "off" onsubmit="return Empty('startdate', 'Please enter Start Date', 'showerror') && Empty('noofdays', 'Please enter number of days', 'showerror') && && Empty('roomtypeid', 'Please select Room Type', 'showerror') && reserveRoom('startdate', 'noofdays', 'roomtypeid', 'showarea');">
                                                                <table border="1" width="100%" cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td colspan="2" style="padding-top:5px;">
                                                                            <div id="showerror"></div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-top:15px;" width="15%" align="right">
                                                                           Account Balance: &nbsp;
                                                                        </td>
                                                                        <td style="padding-top:15px;">
                                                                            <input type="hidden" name="accountbalanceid" id="accountbalanceid" value="<?php echo $balance['id']; ?>" />
                                                                            <b style="color:green;"><?php echo "Ugx ".number_format($balance['amount'], "0", "", ",")."/="; ?></b>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-top:15px;" align="right">
                                                                           Start Date: &nbsp;
                                                                        </td>
                                                                        <td style="padding-top:15px;">
                                                                            <input type="text" name="startdate" id="startdate" size="30" value="<?php if($_GET['edit']) { echo date("m/j/Y", $edit['startdate']); } ?>" />
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-top:15px;" align="right">
                                                                           Number of Days: &nbsp;
                                                                        </td>
                                                                        <td style="padding-top:15px;">
                                                                            <input type="text" name="noofdays" id="noofdays" size="30" maxlength="2" value="<?php echo $edit['noofdays']; ?>" onKeyDown="return onlyNumbers('noofdays', 'showerror');" />
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-top:15px;" align="right">
                                                                            Room Type: &nbsp;
                                                                        </td>
                                                                        <td style="padding-top:15px;">
                                                                           <?php	
																				$qry = mysql_query("SELECT * FROM tbl_roomtypes ORDER BY roomrate");
																				
																				$num = mysql_num_rows($qry);
																				
																				if($num != 0)
																				{
																				?>
                                                                                <select name="roomtypeid" id="roomtypeid">
                                                                                	<option value=""> - Select Room Type & Rate Below - </option>
                                                                                    <?php
																					while($roomtype = mysql_fetch_array($qry))
																					{
																					?>
                                                                                    <option value="<?php echo $roomtype['id']; ?>"><?php echo $roomtype['names']." @ Ugx".number_format($roomtype['roomrate'], "0", "", ",")."/="; ?></option>
                                                                                    <?php
																					}
																					?>
                                                                                </select>
                                                                                <?php		
																				}
																				else
																				{
																				?>
                                                                                <i>No room types found!</i>
                                                                                <input type="hidden" name="roomtypeid" id="roomtypeid" value="" />
                                                                                <?php	
																				}
																			?> &nbsp;  <a href="#" onclick="return Empty('startdate', 'Please enter Start Date', 'showerror') && Empty('noofdays', 'Please enter number of days', 'showerror') && Empty('roomtypeid', 'Please select Room Type', 'showerror') && showStayDuration('accountbalanceid', 'startdate', 'noofdays', 'roomtypeid', 'showarea');" title="Check Reservation" class="links">Check Reservation</a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-top:0px;" colspan="2" align="left">
                                                                            <div id="showarea"></div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                        </td>
                                                                        <td style="padding-top:15px;">
                                                                            <?php
                                                                            if($_GET['edit'])
                                                                            {
                                                                            ?>
                                                                            <input type="hidden" name="editid" id="editid" value="<?php echo $id; ?>" />
                                                                            <input type="submit" value="Save Changes" />
                                                                            <?php	
                                                                            }
                                                                            else

                                                                            {
                                                                            ?>
                                                                            <input type="hidden" name="editid" id="editid" value="0" />
                                                                            <input type="submit" value="Reserve Now" />
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
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