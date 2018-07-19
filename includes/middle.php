<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr>
    	<td>
        	<table border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
                	<td valign="top" width="75%" align="left">
                        <?php
						if($thispage[3] == "index.php")
						{
						?>
						<table border="0" width="100%" cellpadding="0" cellspacing="0">
                            <tr>
                                <td align="left">
                                    <span style="font-size:14px">Welcome to <b>Hotel Catherine</b></span>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-top:6px" class="justifythis">
                                    <?php echo $homepage[0]; ?>
                                </td>
                            </tr>
                        </table>
                        <?php
						}
						elseif($thispage[3] == "about_us.php")
						{
						?>
						<table border="0" width="100%" cellpadding="0" cellspacing="0">
                            <tr>
                                <td align="left">
                                    <b style="color:#04578B;">About Us</b></span>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-top:6px" class="justifythis">
                                    <?php echo $homepage[0]; ?>
                                </td>
                            </tr>
                        </table>
                        <?php
						}
						elseif($thispage[3] == "services.php")
						{
						?>
						<table border="0" width="100%" cellpadding="0" cellspacing="0">
                            <tr>
                                <td align="left">
                                    <b style="color:#04578B;">Our Services</b></span>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-top:6px" class="justifythis">
                                    <?php echo $homepage[0]; ?>
                                </td>
                            </tr>
                        </table>
                        <?php
						}
						elseif($thispage[3] == "booking.php")
						{
						?>
						<table border="0" width="100%" cellpadding="0" cellspacing="0">
                            <tr>
                                <td align="left">
                                    <b style="color:#04578B;">Online Booking</b></span>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-top:6px" class="justifythis">
                                    <?php echo $homepage[0]; ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-top:6px" class="justifythis">
                                    <b>For new clients:</b> please follow this <a href="../start/registration.php" title="Registration link" class="links">Registration link</a> to the short registration process to start Online Booking
                                    <br /><br />
                                    <b>For returning clients:</b> simply log in into the website using the form on the right
                                </td>
                            </tr>
                        </table>
                        <?php
						}
						elseif($thispage[3] == "contact_us.php")
						{
						?>
						<table border="0" width="100%" cellpadding="0" cellspacing="0">
                            <tr>
                                <td align="left">
                                    <b style="color:#04578B;">Contact Us</b></span>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-top:6px" class="justifythis">
                                    [ Google Maps ]
                                </td>
                            </tr>
                        </table>
                        <?php
						}
						elseif($thispage[3] == "registration.php")
						{
						?>
						<table border="0" width="100%" cellpadding="0" cellspacing="0">
                            <tr>
                                <td align="left">
                                    <b style="color:#04578B;">Online Booking Registration</b></span>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-top:6px" class="justifythis">
                                    <form method="post" action="xmlregx" autocomplete = "off" onSubmit="return Empty('names', 'Please enter your names', 'system_error') && Empty('phoneno', 'Please enter your phone number', 'system_error') && registerUser('names', 'phoneno', 'system_error');">
                                    <table border="1" width="100%" cellpadding="5" cellspacing="6">
                                        <tr>
                                            <td colspan="2">
                                                <div id="system_error"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="14%" align="right">
                                                Your Names: &nbsp;
                                            </td>
                                            <td>
                                                <input type="text" name="names" id="names" size="44" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right">
                                                Phone Number: &nbsp;
                                            </td>
                                            <td>
                                                <input type="text" name="phoneno" id="phoneno" size="44" maxlength="10" onKeyDown="return onlyNumbers('phoneno', 'system_error');"/> <font color="red">Phone Number must be 10 Characters in Length, format 07xxxxxxxx</font>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td align="left">
                                                <input type="submit" value="Register Now" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td align="left" style="padding-top:10px;">
                                                <strong> TIP:</strong> Your password is the same as your phone number, please change once logged in <img src='../images/no.gif' name = 'img1' align = 'absmiddle' width='18' height = '18' alt='image'>
                                            </td>
                                        </tr>
                                    </table>
                                    </form>
                                </td>
                            </tr>
                        </table>
                        <?php
						}
						?>
                    </td>
                    <td width="1%">
                    </td>
                    <td valign="top">
                        <table border="0" width="100%" cellpadding="0" cellspacing="0">
                            <tr>
                                <td align="left">
                                    <span style="font-size:14px"><b>Contact Us</b></span>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-top:6px" class="justifythis">
                                    <?php echo $contactpage[0]; ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-top:6px" align="left">
                                    <span style="font-size:14px"><b>Website Login</b></span>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-top:6px" class="justifythis">
                                    <form method="post" action="xmlloginx" autocomplete = "off" onSubmit="return Empty('usern', 'Please enter username', 'error_msg') && Empty('passwd', 'Please enter password', 'error_msg') && loginUser('usern', 'passwd', 'error_msg');">
                                    <table border="0" width="250px" cellpadding="5" cellspacing="6">
                                        <tr>
                                            <td colspan="2">
                                                <div id="error_msg"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="31%">
                                                Username: &nbsp;
                                            </td>
                                            <td>
                                                <input type="text" name="usern" id="usern" size="22" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Password: &nbsp;
                                            </td>
                                            <td>
                                                <input type="password" name="passwd" id="passwd" size="22" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td align="left">
                                                <input type="submit" value="Log In" />
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
       	</td>
   	</tr>
</table>