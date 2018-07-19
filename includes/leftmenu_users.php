<?php

	$thispage = explode("/", $_SERVER['SCRIPT_NAME'], 6);
	
	if($_SESSION['rights'] == 6)
	{
		$indexurl = "../ink_managers/index.php";
	}
	elseif($_SESSION['rights'] == 4)
	{
		$indexurl = "../ink_frontdesk/index.php";
	}
	if($_SESSION['rights'] == 2)
	{
		$indexurl = "../ink_guest/index.php";
	}
	
?>
<table border="0" width="100%" cellpadding="2" cellspacing="2">
	<tr>
    	<td align="left" style="padding-bottom:10px;">
        	<a href="<?php echo $indexurl; ?>" class="cp">DASH BOARD</a>
        </td>
    </tr>
    <?php
    if($_SESSION['rights'] == 6)
	{
		$indexurl = "../ink_managers/index.php";
	}
	elseif($_SESSION['rights'] == 4)
	{
	?>
    <tr>
    	<td align="left" class="<?php if($thispage[3] == "manage_payments.php") { echo "menuselected"; } else { echo "menunotselected"; } ?>" onclick="return document.location.href = '../ink_frontdesk/manage_payments.php?t=pending';" title="Go to - Manage Mobile Money Payments Page">
        	Manage Mobile Money Payments
        </td>
    </tr>
    <tr>
    	<td align="left" class="<?php if($thispage[3] == "room_types.php") { echo "menuselected"; } else { echo "menunotselected"; } ?>" onclick="return document.location.href = '../ink_frontdesk/room_types.php?t=view';" title="Go to - Manage Room Types Page">
        	Manage Room Bookings
        </td>
    </tr>
    <tr>
    	<td align="left" class="<?php if($thispage[3] == "hotel_rooms.php") { echo "menuselected"; } else { echo "menunotselected"; } ?>" onclick="return document.location.href = '../ink_frontdesk/hotel_rooms.php';" title="Go to - View Hotel Rooms Status Page">
        	View Hotel Rooms Status
        </td>
    </tr>
    <?php
	}
	elseif($_SESSION['rights'] == 2)
	{
	?>
    <tr>
    	<td align="left" class="<?php if($thispage[3] == "room_rates.php") { echo "menuselected"; } else { echo "menunotselected"; } ?>" onclick="return document.location.href = '../ink_guest/room_rates.php';" title="Go to - Hotel Room Rates Page">
        	Hotel Room Rates
        </td>
    </tr>
    <tr>
    	<td align="left" class="<?php if($thispage[3] == "manage_deposits.php") { echo "menuselected"; } else { echo "menunotselected"; } ?>" onclick="return document.location.href = '../ink_guest/manage_deposits.php?t=view';" title="Go to - Manage Mobile Money Deposits Page">
        	Manage Mobile Money Deposits
        </td>
    </tr>
    <tr>
    	<td align="left" class="<?php if($thispage[3] == "reserve_room.php") { echo "menuselected"; } else { echo "menunotselected"; } ?>" onclick="return document.location.href = '../ink_guest/reserve_room.php';" title="Go to - Reserve A Room Page">
        	Reserve A Room
        </td>
    </tr>
    <tr>
    	<td align="left" class="<?php if($thispage[3] == "past_reservations.php") { echo "menuselected"; } else { echo "menunotselected"; } ?>" onclick="return document.location.href = '../ink_guest/past_reservations.php';" title="Go to - Past Reservations Page">
        	Past Reservations
        </td>
    </tr>
    <tr>
    	<td align="left" class="<?php if($thispage[3] == "change_password.php") { echo "menuselected"; } else { echo "menunotselected"; } ?>" onclick="return document.location.href = '../ink_guest/change_password.php';" title="Go to - Change Password Page">
        	Change Password
        </td>
    </tr>
    <?php
	}
    ?>
</table>