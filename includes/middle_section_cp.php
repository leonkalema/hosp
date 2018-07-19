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
                    	<?php require_once("../includes/leftmenu.php"); ?>
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
                                            	<b class="pagetitle">>> Control Panel</b>
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td style="padding-top:10px; text-align:left;">
                                            	<p>Welcome to the Control Panel of Hotel Catherine Website.</p>
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
						elseif($thispage[3] == "homepage.php")
						{
						?>
                        <table border="0" width="100%" cellpadding="2" cellspacing="2">
                                    	<tr>
                                        	<td align="left">
                                            	<b class="pagetitle">>> Home Page</b>
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td align="left" style="padding-top:5px;">
                                            	<form method="post" action="xmlactionx=" onsubmit="return Empty('pagecontent', 'Please enter webpage content', 'showerror') && saveWebPage('pagecontent', 'editid', 'showerror');">
                                                <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                                	<tr>
                                                    	<td align="left" style="padding-top:15px;">
                                                        	<div id="showerror"></div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td align="left" style="padding-top:15px;">
                                                        	<textarea cols="110" rows="20" name="pagecontent" id="pagecontent"><?php echo strip_tags($editpage['content']); ?></textarea>
                                                            <input type="hidden" name="editid" id="editid" value="<?php echo $editpage['id']; ?>" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td align="left" style="padding-top:15px;">
                                                        	<input type="submit" value="Save Changes" />
                                                        </td>
                                                    </tr>
                                                </table>
                                                </form>
                                          	</td>
                                        </tr>
                                    </table>
                        <?php		
						}
						elseif($thispage[3] == "about_us.php")
						{
						?>
                        <table border="0" width="100%" cellpadding="2" cellspacing="2">
                                    	<tr>
                                        	<td align="left">
                                            	<b class="pagetitle">>> About Us Page</b>
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td align="left" style="padding-top:5px;">
                                            	<form method="post" action="xmlactionx=" onsubmit="return Empty('pagecontent', 'Please enter webpage content', 'showerror') && saveWebPage('pagecontent', 'editid', 'showerror');">
                                                <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                                	<tr>
                                                    	<td align="left" style="padding-top:15px;">
                                                        	<div id="showerror"></div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td align="left" style="padding-top:15px;">
                                                        	<textarea cols="110" rows="20" name="pagecontent" id="pagecontent"><?php echo strip_tags($editpage['content']); ?></textarea>
                                                            <input type="hidden" name="editid" id="editid" value="<?php echo $editpage['id']; ?>" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td align="left" style="padding-top:15px;">
                                                        	<input type="submit" value="Save Changes" />
                                                        </td>
                                                    </tr>
                                                </table>
                                                </form>
                                          	</td>
                                        </tr>
                                    </table>
                        <?php		
						}
						elseif($thispage[3] == "online_booking.php" || $thispage[3] == "our_services.php")
						{
						?>
                        <table border="0" width="100%" cellpadding="2" cellspacing="2">
                                    	<tr>
                                        	<td align="left">
                                            	<?php
                                                if($thispage[3] == "online_booking.php")
												{
												?>
                                                <b class="pagetitle">>> Online Booking Page</b>
                                                <?php
												}
												elseif($thispage[3] == "our_services.php")
												{
												?>
                                                <b class="pagetitle">>> Our Services Page</b>
                                                <?php	
												}
												?>
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td align="left" style="padding-top:5px;">
                                            	<form method="post" action="xmlactionx=" onsubmit="return Empty('pagecontent', 'Please enter webpage content', 'showerror') && saveWebPage('pagecontent', 'editid', 'showerror');">
                                                <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                                	<tr>
                                                    	<td align="left" style="padding-top:15px;">
                                                        	<div id="showerror"></div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td align="left" style="padding-top:15px;">
                                                        	<textarea cols="110" rows="20" name="pagecontent" id="pagecontent"><?php echo strip_tags($editpage['content']); ?></textarea>
                                                            <input type="hidden" name="editid" id="editid" value="<?php echo $editpage['id']; ?>" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td align="left" style="padding-top:15px;">
                                                        	<input type="submit" value="Save Changes" />
                                                        </td>
                                                    </tr>
                                                </table>
                                                </form>
                                          	</td>
                                        </tr>
                                    </table>
                        <?php		
						}
						elseif($thispage[3] == "contact_us.php")
						{
						?>
                        <table border="0" width="100%" cellpadding="2" cellspacing="2">
                                    	<tr>
                                        	<td align="left">
                                            	<b class="pagetitle">>> Contact Us Page</b>
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td align="left" style="padding-top:5px;">
                                            	<form method="post" action="xmlactionx=" onsubmit="return Empty('pagecontent', 'Please enter webpage content', 'showerror') && saveWebPage('pagecontent', 'editid', 'showerror');">
                                                <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                                	<tr>
                                                    	<td align="left" style="padding-top:15px;">
                                                        	<div id="showerror"></div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td align="left" style="padding-top:15px;">
                                                        	<textarea cols="110" rows="20" name="pagecontent" id="pagecontent"><?php echo strip_tags($editpage['content']); ?></textarea>
                                                            <input type="hidden" name="editid" id="editid" value="<?php echo $editpage['id']; ?>" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    	<td align="left" style="padding-top:15px;">
                                                        	<input type="submit" value="Save Changes" />
                                                        </td>
                                                    </tr>
                                                </table>
                                                </form>
                                          	</td>
                                        </tr>
                                    </table>
                        <?php		
						}
						elseif($thispage[3] == "users.php")
						{
						?>
                        <table border="0" width="100%" cellpadding="2" cellspacing="2">
                                    	<tr>
                                        	<td align="left">
                                            	<b class="pagetitle">>> Manage Users</b>
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td align="left">
                                            	<table border="0" width="35%" cellpadding="2" cellspacing="4">
                                                	<tr>
                                                    	<td width="40%" class="blacktd">
                                                        	<a href="../ink_site/users.php?t=add" class="whitelinks">Add User</a>
                                                        </td>
                                                        <td class="blacktd">
                                                        	<a href="../ink_site/users.php?t=view" class="whitelinks">View/Edit/Delete Users</a>
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
												
												$edit = mysql_fetch_array(mysql_query("SELECT u.usern, u.rights, d.* FROM tbl_users u, tbl_users_details d WHERE u.id = '".$id."' && u.id = d.userid"));
											}
										?>
                                        <tr>
                                        	<td align="left">
                                            	<table border="0" width="100%" cellpadding="0" cellspacing="0">
                                                	<tr>
                                                    	<td align="left" style="padding-top:10px;">
                                                        	<?php
															if($_GET['edit'])
															{
															?>
                                                            	<b> Edit User - </b><?php echo $edit['names']; ?>
                                                            <?php	
															}
															else
															{
															?>
                                                            	<b> Add User</b>
                                                            <?php	
															}
															?>
                                                        </td>
                                                 	</tr>
                                             	</table>
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td align="left">
                                            	<table border="0" width="100%" cellpadding="0" cellspacing="0">
                                                	<tr>
                                                    	<td align="left" style="padding-top:0px;">
                                                            <span id="showerror"></span>
                                                      	</td>
                                                  	</tr>
                                                    <tr>
                                                    	<td align="left" style="padding-top:0px;">        
                                                            <form action="../includes/addoreditusers.php" autocomplete = "off" method="post" enctype="multipart/form-data" target="upload_target" onsubmit="return Empty('names', 'Please enter full names of user', 'names_error') <?php if(!$_GET['edit']) { ?>&& Empty('usern', 'Please enter username', 'usern_error') && Empty('passwd', 'Please enter password', 'passwd_error') <?php } ?> && startUpload();">
                                                            <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td>
                                                                        <table border="1" width="100%" cellpadding="2" cellspacing="2">
                                                                            <tr>
                                                                                <td width="11%" class="righttd">
                                                                                    Full names : &nbsp;
                                                                                </td>
                                                                                <td width="36%" class="mytd">
                                                                                    <input type="text" name="names" id="names" value="<?php echo $edit['names']; ?>" size="49" />
                                                                                </td>
                                                                                <td>
                                                                                    <span id="names_error"></span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="righttd">
                                                                                    Username : &nbsp;
                                                                                </td>
                                                                                <td class="mytd">
                                                                                    <input type="text" name="usern" id="usern" maxlength="15" value="<?php echo $usern[0]; ?>" size="49" onblur="return Empty('usern', 'Please enter username', 'usern_error') && checkUsername('usern', 'editid', 'usern_error');" />
                                                                                    <input type="hidden" name="usern_available" id="usern_available" value="<?php echo $valid; ?>" />
                                                                                </td>
                                                                                <td>
                                                                                     <a href="#" onclick="return Empty('usern', 'Please enter username', 'usern_error') && checkUsername('usern', 'editid', 'usern_error');" title="[ Check Availability ]" class="links">[ Check Availability ]</a> &nbsp; <span id="usern_error"></span>
                                                                                </td>
                                                                            </tr>
                                                                            <?php
                                                                            if($_GET['edit'])
                                                                            {
                                                                            ?>
                                                                            <tr>
                                                                                <td>
                                                                                </td>
                                                                                <td colspan="2" class="mytd">
                                                                                    <font color="red">NOTE: To maintain the same username, please dont type in any username in the username field!</font>
                                                                                </td>
                                                                            </tr>
                                                                            <?php		
                                                                            }
                                                                            ?>
                                                                            <tr>
                                                                                <td class="righttd"> 
                                                                                    Password : &nbsp;
                                                                                </td>
                                                                                <td class="mytd">
                                                                                    <input type="password" name="passwd" id="passwd" maxlength="20" value="<?php echo $edit['passwd']; ?>" size="49" onblur="return Empty('passwd', 'Please enter password', 'passwd_error') && checkPwLength('passwd', 'passwd_error');" />
                                                                                </td>
                                                                                <td>
                                                                                    <span id="passwd_error"></span>
                                                                                </td>
                                                                            </tr>
                                                                            <?php
                                                                            if($_GET['edit'])
                                                                            {
                                                                            ?>
                                                                            <tr>
                                                                                <td>
                                                                                </td>
                                                                                <td colspan="2" class="mytd">
                                                                                    <font color="red">NOTE: To maintain the old password, please dont type in any password in the password field!</font>
                                                                                </td>
                                                                            </tr>
                                                                            <?php		
                                                                            }
                                                                            ?>
                                                                            <tr>
                                                                                <td class="righttd">
                                                                                    Access Level : &nbsp;
                                                                                </td>
                                                                                <td class="mytd">
                                                                                    <input type="radio" name="access_level" id="access_level" <?php if ($_GET['edit']) { if($edit['rights'] == 6) { echo "checked=\"checked\""; } } else { echo "checked=\"checked\""; } ?> value="6" /> Hotel Manager Account
                                                                                    &nbsp;
                                                                                    <input type="radio" name="access_level" id="access_level" <?php if ($_GET['edit']) { if($edit['rights'] == 4) { echo "checked=\"checked\""; } } ?> value="4" /> Front Desk Account
                                                                                </td>
                                                                                <td>
                                                                                    
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="righttd">
                                                                                    Phone no : &nbsp;
                                                                                </td>
                                                                                <td class="mytd">
                                                                                    <input type="text" name="phoneno" id="phoneno" maxlength="10" onKeyDown="return onlyNumbers('phoneno', 'phoneno_error');" value="<?php echo $edit['phoneno']; ?>" size="49" />
                                                                                    <input type="hidden" name="task" id="task" value="1" />
                                                                                </td>
                                                                                <td>
                                                                                    <span id="phoneno_error"></span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="righttd">
                                                                                    Email : &nbsp;
                                                                                </td>
                                                                                <td class="mytd">
                                                                                    <input type="text" name="email" id="email" value="<?php echo $edit['email']; ?>" size="49" />
                                                                                </td>
                                                                                <td>
                                                                                    <span id="email_error"></span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3">
                                                                                    <iframe id="upload_target" name="upload_target" src="#" style="width:0;height:0;border:1px solid #fff;"></iframe>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="padding-top:5px; padding-bottom:5px;">
                                                                        <table border="1" width="100%" cellpadding="2" cellspacing="2">
                                                                            <tr>
                                                                                <td width="10%">
                                                                                </td>
                                                                                <td>
                                                                                    <?php
                                                                                    if($_GET['edit'])
                                                                                    {
                                                                                    ?>
                                                                                        <input type="hidden" name="editid" id="editid" value="<?php echo $id; ?>" />
                                                                                        <input type="submit" name="addoreditbutton" id="addoreditbutton" value="Save Changes" />
                                                                                    <?php	
                                                                                    }
                                                                                    else
                                                                                    {
                                                                                    ?>
                                                                                        <input type="hidden" name="editid" id="editid" value="0" />
                                                                                        <input type="submit" name="addoreditbutton" id="addoreditbutton" value="Add User" />
                                                                                    <?php
                                                                                    }
                                                                                    ?>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
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
										elseif($_GET['t'] == "view")
										{
											$qry = mysql_query("SELECT id, usern, rights FROM tbl_users WHERE rights != 8 ORDER BY rights");
											
											$num = mysql_num_rows($qry);
										?>
                                        <tr>
                                        	<td>
                                            	<table border="0" width="100%" cellpadding="0" cellspacing="0">
                                                	<tr>
                                                    	<td align="left" style="padding-top:10px;">
                                                        	<b>View/Edit/Delete Users</b>
                                                      	</td>
                                                 	</tr>
                                             	</table>
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td align="left" style="padding-top:15px;">
                                            	Number of entries: <b><?php echo $num; ?></b>
                                            </td>
                                        </tr>
										<?php
                                        if($num != 0)
										{
										?>
                                        <tr>
                                        	<td align="left" style="padding-top:15px;">
                                            	<table border="1" width="100%" cellpadding="0" cellspacing="0">
                                                	<tr>
                                                    	<td width="5%" class="tdheader">
                                                        	#
                                                        </td>
                                                        <td width="5%" class="tdheader">
                                                        	Edit
                                                        </td>
                                                        <td width="13%" align="left" class="tdheader">
                                                        	Username
                                                        </td>
                                                        <td width="12%" align="left" class="tdheader">
                                                        	Access Level
                                                        </td>
                                                        <td align="left" class="tdheader">
                                                        	Names
                                                        </td>
                                                        <td width="40%" align="left" class="tdheader">
                                                        	Other details
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
														
														if($result['rights'] == 2)
														{
															$thisuser = mysql_fetch_array(mysql_query("SELECT * FROM tbl_users_guests WHERE userid = '".$result['id']."'"));
														}
														else
														{
															$thisuser = mysql_fetch_array(mysql_query("SELECT * FROM tbl_users_details WHERE userid = '".$result['id']."'"));
														}
														
													?>
                                                    <tr class="<?php echo $row; ?>">
                                                    	<td class="tddata">
                                                        	<b><?php echo $counter; ?>.</b>
                                                        </td>
                                                        <td class="tddata">
                                                        	<a href="../ink_site/users.php?edit=<?php echo base64_encode($result[0]); ?>" title="Edit User - <?php echo $thisuser['names']; ?>" class="links">Edit</a>
                                                        </td>
                                                        <td align="left" class="tddata">
                                                        	<?php echo $result['usern']; ?>
                                                        </td>
                                                        <td align="left" class="tddata">
                                                        	<?php 
															if($result['rights'] == 6)
															{
																echo "Hotel Managers";	
															}
															elseif($result['rights'] == 4)
															{
																echo "Front Desk";	
															}
															elseif($result['rights'] == 2)
															{
																echo "Hotel Guest";	
															}
															?>
                                                        </td>
                                                        <td align="left" class="tddata">
                                                        	<?php echo $thisuser['names']; ?>
                                                        </td>
                                                        <td align="left" class="tddata">
                                                        	<?php
                                                            if($result['rights'] == 2)
                                                            {
                                                                echo "Registration date: ".date("jS/F/Y", $thisuser['date_added']);
                                                            }
                                                            else
                                                            {
                                                            ?>
                                                            <?php echo $thisuser['phoneno']; ?>
                                                            <br />
                                                            <?php echo $thisuser['email']; ?>
                                                            <?php
                                                            }    
                                                            ?>
                                                        </td>
                                                        <td class="tddata">
                                                        	<a href="#" onclick="return deleteEntity('../ink_site/users.php?d=<?php echo base64_encode($result['id']); ?>', 'User - <?php echo $thisuser['names']; ?>');" title="Delete User - <?php echo $thisuser['names']; ?>" class="links">Delete</a>
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
                                            	<i>No FAQs found!</i>
                                            </td>	
                                        </tr>
                                        <?php	
										}
										}
										?>
                                    </table>
                        <?php		
						}
						elseif($thispage[3] == "slideshow.php")
						{
						?>
                        <table border="0" width="100%" cellpadding="2" cellspacing="2">
                                    	<tr>
                                        	<td align="left">
                                            	<b class="pagetitle">>> Slideshow Section</b>
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td align="left">
                                            	<table border="0" width="35%" cellpadding="2" cellspacing="4">
                                                	<tr>
                                                    	<td width="40%" class="blacktd">
                                                        	<a href="../ink_site/slideshow.php?t=add" class="whitelinks">Add Picture</a>
                                                        </td>
                                                        <td class="blacktd">
                                                        	<a href="../ink_site/slideshow.php?t=view" class="whitelinks">View/Edit/Delete Pictures</a>
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
												
												$edit = mysql_fetch_array(mysql_query("SELECT * FROM tbl_slideshow WHERE id = '".$id."'"));
											}
										?>
                                        <tr>
                                        	<td align="left">
                                            	<table border="0" width="100%" cellpadding="0" cellspacing="0">
                                                	<tr>
                                                    	<td align="left" style="padding-top:10px;">
                                                        	<?php
															if($_GET['edit'])
															{
															?>
                                                            	<b> Edit Picture - </b><?php echo $edit['title']; ?>
                                                            <?php	
															}
															else
															{
															?>
                                                            	<b> Add Picture</b>
                                                            <?php	
															}
															?>
                                                        </td>
                                                 	</tr>
                                             	</table>
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td align="left">
                                            	<table border="0" width="100%" cellpadding="0" cellspacing="0">
                                                	<tr>
                                                    	<td align="left" style="padding-top:0px;">
                                                            <form action="../includes/addordeditphotos.php" autocomplete = "off" method="post" enctype="multipart/form-data" target="upload_target" onsubmit="return Empty('title', 'Please enter picture title', 'showerror') <?php if(!$_GET['edit']) { ?> && Empty('user_img', 'Please browse for picture', 'showerror')<?php } ?> && startUpload();">
                                                            <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td align="left" colspan="2" style="padding-top:5px;">
                                                                        <div id="showerror"></div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                	<td style="padding-top:15px;" width="10%" align="right">
                                                                    	Title: &nbsp;
                                                                    </td>
                                                                    <td style="padding-top:15px;">
                                                                    	<input type="text" name="title" id="title" size="60" value="<?php echo $edit['title']; ?>" />
                                                                    </td>
                                                                </tr>
                                                                <?php
															
																if($_GET['edit'] != "")
																{
																	$image = getimagesize("../file_loads/".$edit['picture']);
																?>
																<tr>	
																	<td style="padding-top:15px;" valign="top" align="right">
																		Pic: &nbsp;
																	</td>
																	<td style="padding-top:15px;">
																	</td>
																</tr>
																<tr>
																	<td style="padding-top:15px;" align="left" colspan="2">
																		<img src="../file_loads/<?php echo $edit['picture']; ?>" width="720px" height="300px" />
																		<br /><br />
																		<i><b>NOTE:</b> To maintain the same picture above, please dont browse for another!</i>
																		<br /><br />
																	</td>
																<?php	
																}
																?>
																<tr>
																	<td style="padding-top:15px;" valign="top" align="right">
																		<?php
																
																		if(!$_GET['edit'])
																		{
																		?>
																			Pic: &nbsp;
																		<?php
																		}
																		?>
																	</td>
																	<td style="padding-top:15px;" valign="top" align="left">
																		
																		<input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
																		<input type="file" name="user_img" id="user_img" size="38" onBlur="return Empty('user_img','Please browse for a picture','file_type') && checkImage('user_img','file_type');" />
																		<br>
																		<br />
																		<i>Please browse for file of .jpg or .gif formats: width 1009px X Height 376px</i>
																		<br>
																		<div id="file_type" style="padding-top:7px;">
																		</div>
																		<iframe id="upload_target" name="upload_target" src="#" style="width:0;height:0;border:1px solid #fff;"></iframe>
																	</td>
																</tr>
                                                                <tr>
                                                                    <td>
                                                                    </td>
                                                                    <td align="left" style="padding-top:15px;">
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
                                                                        <input type="submit" value="Add Picture" />
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
										elseif($_GET['t'] == "view")
										{
											$qry = mysql_query("SELECT * FROM tbl_slideshow");
											
											$num = mysql_num_rows($qry);
										?>
                                        <tr>
                                        	<td align="left">
                                            	<table border="0" width="100%" cellpadding="0" cellspacing="0">
                                                	<tr>
                                                    	<td style="padding-top:10px;">
                                                        	<b>View/Edit/Delete Pictures</b>
                                                      	</td>
                                                 	</tr>
                                             	</table>
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td align="left" style="padding-top:15px;">
                                            	Number of entries: <b><?php echo $num; ?></b>
                                            </td>
                                        </tr>
										<?php
                                        if($num != 0)
										{
										?>
                                        <tr>
                                        	<td style="padding-top:15px;">
                                            	<table border="0" width="100%" cellpadding="0" cellspacing="0">
                                                	<tr>
                                                    	<td width="5%" class="tdheader">
                                                        	#
                                                        </td>
                                                        <td width="5%" class="tdheader">
                                                        	Edit
                                                        </td>
                                                        <td width="5%" align="center" class="tdheader">
                                                            Featured
                                                        </td>
                                                        <td align="left" class="tdheader">
                                                        	Title
                                                        </td>
                                                        <td width="12%" class="tdheader">
                                                        	View Picture
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
													?>
                                                    <tr class="<?php echo $row; ?>">
                                                    	<td class="tddata">
                                                        	<b><?php echo $counter; ?>.</b>
                                                        </td>
                                                        <td class="tddata">
                                                        	<a href="../ink_site/slideshow.php?edit=<?php echo base64_encode($result['id']); ?>" title="Edit picture - <?php echo $result['title']; ?>" class="links">Edit</a>
                                                        </td>
                                                        <td align="center" class="tddata">
                                                        	<input type="checkbox" <?php if($result['featured'] == 1) { echo "checked=\"checked\""; } ?> name="feature<?php echo $result['id']; ?>" id="feature<?php echo $result['id']; ?>" value="<?php echo $result['id']; ?>" onclick="return featurePicture('<?php echo $result['id']; ?>', '<?php echo $result['title']; ?>', 'feature<?php echo $result['id']; ?>');" />
                                                        </td>
                                                        <td align="left" class="tddata">
                                                        	<?php echo $result['title']; ?>
                                                        </td>
                                                         <td class="tddata" align="center">
                                                        	<a href="#" onclick="return showContent('slideshow', '<?php echo base64_encode($result['id']); ?>', 'contentarea<?php echo $result['id']; ?>');" class="links" title="View picture - <?php echo $result['title']; ?>">View</a>                                                    
                                                        </td>
                                                        <td class="tddata">
                                                        	<a href="#" onclick="return deleteEntity('../ink_site/slideshow.php?d=<?php echo base64_encode($result['id']); ?>', 'picture - <?php echo $result['title']; ?>');" title="Delete picture - <?php echo $result['title']; ?>" class="links">Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr class="<?php echo $row; ?>">
                                                        <td colspan="6" class="tddata">
                                                            <div id="contentarea<?php echo $result['id']; ?>"></div>
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
                                            	<i>No pictures found!</i>
                                            </td>	
                                        </tr>
                                        <?php	
										}
										}
										?>
                                    </table>
                        <?php
						}
						elseif($thispage[3] == "room_types.php")
						{
						?>
                        <table border="0" width="100%" cellpadding="2" cellspacing="2">
                                            <tr>
                                                <td align="left">
                                                    <b class="pagetitle">>> Manage Room Types</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left">
                                                    <table border="0" width="40%" cellpadding="2" cellspacing="4">
                                                        <tr>
                                                            <td class="blacktd">
                                                                <a href="../ink_site/room_types.php?t=add" class="whitelinks">Add Room Type</a>
                                                            </td>
                                                            <td class="blacktd">
                                                                <a href="../ink_site/room_types.php?t=view" class="whitelinks">View/Edit/Delete Room Types</a>
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
                                                    
                                                    $edit = mysql_fetch_array(mysql_query("SELECT * FROM tbl_roomtypes WHERE id = '".$id."'"));
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
                                                                    <b> Edit Room Type - </b><?php echo $edit['names']; ?>
                                                                <?php	
                                                                }
                                                                else
                                                                {
                                                                ?>
                                                                    <b> Add Room Type</b>
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
                                                                <form method="post" action="xmlactionx=" autocomplete = "off" onsubmit="return Empty('names', 'Please enter names of Room Type', 'showerror') && Empty('roomrate', 'Please enter Room Rate in Uganda Shillings', 'showerror') && addoreditRoomTypes('names', 'roomrate', 'editid', 'showerror');">
                                                                <table border="1" width="100%" cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td colspan="2" style="padding-top:5px;">
                                                                            <div id="showerror"></div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-top:15px;" width="13%" align="right">
                                                                            Names: &nbsp;
                                                                        </td>
                                                                        <td style="padding-top:15px;">
                                                                            <input type="text" name="names" id="names" size="30" value="<?php echo $edit['names']; ?>" />
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-top:15px;" align="right">
                                                                            Room Rate: &nbsp;
                                                                        </td>
                                                                        <td style="padding-top:15px;">
                                                                            <input type="text" name="roomrate" id="roomrate" size="30" value="<?php echo $edit['roomrate']; ?>" onKeyDown="return onlyNumbers('roomrate', 'showerror');" /> <b>Ugx</b>
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
                                                                            <input type="submit" value="Add Room Type" />
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
                                            elseif($_GET['t'] == "view")
                                            {
                                                $qry = mysql_query("SELECT * FROM tbl_roomtypes ORDER BY roomrate");
                                                
                                                $num = mysql_num_rows($qry);
                                            ?>
                                            <tr>
                                                <td>
                                                    <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td style="padding-top:10px;">
                                                                <b>View/Edit/Delete Room Types</b>
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
                                                    <table border="1" width="80%" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td width="5%" class="tdheader">
                                                                #
                                                            </td>
                                                            <td width="5%" class="tdheader">
                                                                Edit
                                                            </td>
                                                            <td width="40%" class="tdheader">
                                                                Names
                                                            </td>
                                                            <td class="tdheader">
                                                                Room Rate
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
                                                        ?>
                                                        <tr class="<?php echo $row; ?>">
                                                            <td class="tddata">
                                                                <b><?php echo $counter; ?>.</b>
                                                            </td>
                                                            <td class="tddata">
                                                                <a href="../ink_site/room_types.php?edit=<?php echo base64_encode($result['id']); ?>" title="Edit Room Type - <?php echo $result['names']; ?>" class="links">Edit</a>
                                                            </td>
                                                            <td class="tddata">
                                                                <?php echo $result['names']; ?>
                                                            </td>
                                                            <td class="tddata">
                                                                <?php echo "Ugx ".number_format($result['roomrate'], "0", "", ",")."/="; ?>
                                                            </td>
                                                            <td class="tddata">
                                                                <a href="#" onclick="return deleteEntity('../ink_site/room_types.php?d=<?php echo base64_encode($result['id']); ?>', 'Room Type - <?php echo $result['names']; ?>');" title="Delete Room Type - <?php echo $result['names']; ?>" class="links">Delete</a>
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
                                            }
                                            
                                            ?>
                                        </table>
                        <?php	
						}
						elseif($thispage[3] == "rooms.php")
						{
						?>
                        <table border="0" width="100%" cellpadding="2" cellspacing="2">
                                            <tr>
                                                <td align="left">
                                                    <b class="pagetitle">>> Manage Hotel Rooms</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left">
                                                    <table border="0" width="40%" cellpadding="2" cellspacing="4">
                                                        <tr>
                                                            <td class="blacktd">
                                                                <a href="../ink_site/rooms.php?t=add" class="whitelinks">Add Room</a>
                                                            </td>
                                                            <td class="blacktd">
                                                                <a href="../ink_site/rooms.php?t=view" class="whitelinks">View/Edit/Delete Rooms</a>
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
                                                    
                                                    $edit = mysql_fetch_array(mysql_query("SELECT * FROM tbl_rooms WHERE id = '".$id."'"));
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
                                                                    <b> Edit room - </b><?php echo $edit['roomnumber']; ?>
                                                                <?php	
                                                                }
                                                                else
                                                                {
                                                                ?>
                                                                    <b> Add room</b>
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
                                                                <form method="post" action="xmlactionx=" autocomplete = "off" onsubmit="return Empty('roomnumber', 'Please enter room number', 'showerror') && Empty('roomtypeid', 'Please select room type', 'showerror') && addoreditRooms('roomnumber', 'roomtypeid', 'editid', 'showerror');">
                                                                <table border="1" width="100%" cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td colspan="2" style="padding-top:5px;">
                                                                            <div id="showerror"></div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-top:15px;" width="13%" align="right">
                                                                            Room Number: &nbsp;
                                                                        </td>
                                                                        <td style="padding-top:15px;">
                                                                            <input type="text" name="roomnumber" id="roomnumber" size="30" value="<?php echo $edit['roomnumber']; ?>" />
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-top:15px;" width="10%" align="right">
                                                                            Room type: &nbsp;
                                                                        </td>
                                                                        <td style="padding-top:15px;">
                                                                            <?php
                                                                            
																			$t_qry = mysql_query("SELECT id, names FROM tbl_roomtypes ORDER BY roomrate");
																			
																			$t_num = mysql_num_rows($t_qry);
																			
																			if($t_num != 0)
																			{
																			?>
                                                                            	<select name="roomtypeid" id="roomtypeid">
                                                                                <option value=""> - Select Room Type -</option>
																				<?php
																				while($roomtypes = mysql_fetch_array($t_qry))
																				{
																				?>
                                                                                <option value="<?php echo $roomtypes['id']; ?>"><?php echo $roomtypes['names']; ?></option>
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
																			?>
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
                                                                            <input type="submit" value="Add Room" />
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
                                            elseif($_GET['t'] == "view")
                                            {
                                                $qry = mysql_query("SELECT * FROM tbl_rooms ORDER BY roomnumber");
                                                
                                                $num = mysql_num_rows($qry);
                                            ?>
                                            <tr>
                                                <td>
                                                    <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td style="padding-top:10px;">
                                                                <b>View/Edit/Delete Rooms</b>
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
                                                    <table border="1" width="80%" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td width="5%" class="tdheader">
                                                                #
                                                            </td>
                                                            <td width="5%" class="tdheader">
                                                                Edit
                                                            </td>
                                                            <td class="tdheader">
                                                                Room Number
                                                            </td>
                                                            <td class="tdheader">
                                                                Room Type
                                                            </td>
                                                            <td width="20%" class="tdheader">
                                                                Room Features
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
                                                        ?>
                                                        <tr class="<?php echo $row; ?>">
                                                            <td class="tddata">
                                                                <b><?php echo $counter; ?>.</b>
                                                            </td>
                                                            <td class="tddata">
                                                                <a href="../ink_site/rooms.php?edit=<?php echo base64_encode($result['id']); ?>" title="Edit Hotel Room - <?php echo $result['roomnumber']; ?>" class="links">Edit</a>
                                                            </td>
                                                            <td class="tddata">
                                                                <a href="#" onclick="return showContent('roomfeatures', '<?php echo base64_encode($result['id']); ?>', 'contentarea<?php echo $result['id']; ?>');" title="View Room Features of - <?php echo $result['roomnumber']; ?>" class="links"><?php echo $result['roomnumber']; ?></a>
                                                            </td>
                                                            <td class="tddata">
                                                                <?php
																
																$roomtype = mysql_fetch_array(mysql_query("SELECT names FROM tbl_roomtypes WHERE id = '".$result['roomtypeid']."'"));
																
																echo $roomtype['names'];
																
																?>
                                                            </td>
                                                            <td class="tddata">
                                                                <a href="../ink_site/room_features.php?r=<?php echo base64_encode($result['id']); ?>&t=view" class="links" title="Manage Hotel Room <?php echo $result['roomnumber']; ?> Features">Manage Feature</a>
                                                            </td>
                                                            <td class="tddata">
                                                                <a href="#" onclick="return deleteEntity('../ink_site/rooms.php?d=<?php echo base64_encode($result['id']); ?>', 'Hotel Room - <?php echo $result['roomnumber']; ?>');" title="Delete Hotel Room - <?php echo $result['roomnumber']; ?>" class="links">Delete</a>
                                                            </td>
                                                        </tr>
                                                        <tr class="<?php echo $row; ?>">
                                                        	<td colspan="2" class="tddata">
                                                        	</td>
                                                            <td colspan="3" class="tddata">
                                                            	<div id="contentarea<?php echo $result['id']; ?>"></div>
                                                        	</td>
                                                            <td class="tddata">
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
                                                    <i>No rooms found!</i>
                                                </td>	
                                            </tr>
                                            <?php	
                                            }
                                            }
                                            
                                            ?>
                                        </table>
                        <?php	
						}
						elseif($thispage[3] == "room_features.php")
						{
						?>
                        <table border="0" width="100%" cellpadding="2" cellspacing="2">
                                            <tr>
                                                <td align="left">
                                                    <b class="pagetitle">>> Manage Room Features for Room - </b> <?php echo $room['roomnumber']; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left">
                                                    <table border="0" width="40%" cellpadding="2" cellspacing="4">
                                                        <tr>
                                                            <td class="blacktd">
                                                                <a href="../ink_site/room_features.php?r=<?php echo base64_encode($roomid); ?>&t=add" class="whitelinks">Add Feature</a>
                                                            </td>
                                                            <td class="blacktd">
                                                                <a href="../ink_site/room_features.php?r=<?php echo base64_encode($roomid); ?>&t=view" class="whitelinks">View/Edit/Delete Features</a>
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
                                                    
                                                    $edit = mysql_fetch_array(mysql_query("SELECT * FROM tbl_rooms WHERE id = '".$id."'"));
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
                                                                    <b> Edit feature for Room - </b><?php echo $room['roomnumber']; ?>
                                                                <?php	
                                                                }
                                                                else
                                                                {
                                                                ?>
                                                                    <b> Add feature for Room - </b><?php echo $room['roomnumber']; ?>
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
                                                                <form action="../includes/addoreditroomfeatures.php" autocomplete = "off" method="post" enctype="multipart/form-data" target="upload_target"  onsubmit="return startUpload();">
                                                                <table border="1" width="100%" cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td colspan="2" style="padding-top:5px;">
                                                                            <div id="showerror"></div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding-top:15px;" width="13%" align="right" valign="top">
                                                                            Features: &nbsp;
                                                                        </td>
                                                                        <td style="padding-top:15px;" valign="top">
                                                                            <?php
                                                                            
																			$f_qry = mysql_query("SELECT id, names FROM tbl_roomsetup");
																			
																			$f_num = mysql_num_rows($f_qry);
																			
																			if($f_num != 0)
																			{
																			?>
                                                                            	<?php
																				$count = 1;
																				
																				while($features = mysql_fetch_array($f_qry))
																				{
																				$checkedstatus = mysql_num_rows(mysql_query("SELECT id FROM tbl_roomfeatures WHERE roomid = '".$roomid."' && featureid = '".$features['id']."'"));
																				
																				?>
                                                                                <input type="checkbox" name="feature<?php echo $count; ?>" id="feature<?php echo $count; ?>" <?php if($checkedstatus != 0) { echo "checked=\"checked\""; } ?> value="<?php echo $features['id']; ?>" /> &nbsp;<?php echo $features['names']; ?><br /><br />
                                                                                <?php	
																				$count++;
																				}
																				?>
                                                                            <?php	
																			}
																			else
																			{
																			?>
                                                                                <i>No room features found!</i>
                                                                                <input type="hidden" name="feature" id="feature" value="feature0" />
                                                                            <?php		
																			}
																			?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="3">
                                                                            NOTE: Current room features will be over written<iframe id="upload_target" name="upload_target" src="#" style="width:0;height:0;border:1px solid #fff;"></iframe>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                        </td>
                                                                        <td style="padding-top:15px;">
                                                                            <input type="hidden" name="roomid" id="roomid" value="<?php echo $roomid; ?>" />
                                                                            
                                                                            <input type="hidden" name="featurecount" id="featurecount" value="<?php echo $f_num; ?>" />
																			<?php
                                                                            if($_GET['edit'])
                                                                            {
                                                                            ?>
                                                                            <input type="submit" value="Save Changes" />
                                                                            <?php	
                                                                            }
                                                                            else
                                                                            {
                                                                            ?>
                                                                            <input type="submit" value="Add Features" />
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
                                            elseif($_GET['t'] == "view")
                                            {
                                                $qry = mysql_query("SELECT * FROM tbl_roomfeatures WHERE roomid = '".$roomid."'");
                                                
                                                $num = mysql_num_rows($qry);
                                            ?>
                                            <tr>
                                                <td>
                                                    <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td style="padding-top:10px;">
                                                                <b>View/Edit/Delete Features</b>
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
                                                    <table border="0" width="70%" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td width="5%" class="tdheader">
                                                                #
                                                            </td>
                                                            <td width="5%" class="tdheader">
                                                                Edit
                                                            </td>
                                                            <td class="tdheader">
                                                                Room Number
                                                            </td>
                                                            <td width="40%" class="tdheader">
                                                                Room Features
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
                                                        ?>
                                                        <tr class="<?php echo $row; ?>">
                                                            <td class="tddata">
                                                                <b><?php echo $counter; ?>.</b>
                                                                <?php
																$room = mysql_fetch_array(mysql_query("SELECT roomnumber FROM tbl_rooms WHERE id = '".$result['roomid']."'"));
																?>
                                                            </td>
                                                            <td class="tddata">
                                                                <a href="../ink_site/room_features.php?r=<?php echo base64_encode($roomid); ?>&edit=<?php echo base64_encode($result['id']); ?>" title="Edit Feature - <?php echo $feature['names']; ?> - for Room - <?php echo $room['roomnumber']; ?>" class="links">Edit</a>
                                                            </td>
                                                            <td class="tddata">
                                                                <?php echo $room['roomnumber']; ?>
                                                            </td>
                                                            <td class="tddata">
                                                                <?php
																
																$feature = mysql_fetch_array(mysql_query("SELECT names FROM tbl_roomsetup WHERE id = '".$result['featureid']."'"));
																
																echo $feature['names'];
																
																?>
                                                            </td>
                                                            <td class="tddata">
                                                                <a href="#" onclick="return deleteEntity('../ink_site/room_features.php?r=<?php echo base64_encode($roomid); ?>&d=<?php echo base64_encode($result['id']); ?>', ' Feature - <?php echo $feature['names']; ?> - from Room - <?php echo $room['roomnumber']; ?>');" title="Delete  Features for Room - <?php echo $room['roomnumber']; ?>" class="links">Delete</a>
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
                                                    <i>No rooms features found!</i>
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