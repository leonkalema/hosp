<?php

	$thispage = explode("/", $_SERVER['SCRIPT_NAME'], 6);
	
?>
<table border="0" width="100%" cellpadding="2" cellspacing="2">
	<tr>
    	<td align="left" style="padding-bottom:10px;">
        	<a href="../ink_site/index.php" class="cp">CONTROL PANEL</a>
        </td>
    </tr>
    <tr>
    	<td align="left" class="<?php if($thispage[3] == "users.php") { echo "menuselected"; } else { echo "menunotselected"; } ?>" onclick="return document.location.href = '../ink_site/users.php?t=view';" title="Go to - Manage Users Page">
        	Manage Users
        </td>
    </tr>
    <tr>
    	<td align="left" class="<?php if($thispage[3] == "room_types.php") { echo "menuselected"; } else { echo "menunotselected"; } ?>" onclick="return document.location.href = '../ink_site/room_types.php?t=view';" title="Go to - Manage Room Types Page">
        	Manage Room Types
        </td>
    </tr>
    <tr>
    	<td align="left" class="<?php if($thispage[3] == "rooms.php") { echo "menuselected"; } else { echo "menunotselected"; } ?>" onclick="return document.location.href = '../ink_site/rooms.php?t=view';" title="Go to - Manage Hotel Rooms Page">
        	Manage Hotel Rooms
        </td>
    </tr>
    <tr>
    	<td align="left" class="<?php if($thispage[3] == "slideshow.php") { echo "menuselected"; } else { echo "menunotselected"; } ?>" onclick="return document.location.href = '../ink_site/slideshow.php?t=view';" title="Go to - Slideshow Section">
        	Manage Slideshow
        </td>
    </tr>
    <tr>
    	<td align="left" class="<?php if($thispage[3] == "homepage.php") { echo "menuselected"; } else { echo "menunotselected"; } ?>" onclick="return document.location.href = '../ink_site/homepage.php';" title="Go to - Home Page">
        	Home Page
        </td>
    </tr>
    <tr>
    	<td align="left" class="<?php if($thispage[3] == "about_us.php") { echo "menuselected"; } else { echo "menunotselected"; } ?>" onclick="return document.location.href = '../ink_site/about_us.php';" title="Go to - About Us Page">
        	About Us Page
        </td>
    </tr>
    <tr>
    	<td align="left" class="<?php if($thispage[3] == "our_services.php") { echo "menuselected"; } else { echo "menunotselected"; } ?>" onclick="return document.location.href = '../ink_site/our_services.php';" title="Go to - Our Services Page">
        	Our Services Page
        </td>
    </tr>
    <tr>
    	<td align="left" class="<?php if($thispage[3] == "online_booking.php") { echo "menuselected"; } else { echo "menunotselected"; } ?>" onclick="return document.location.href = '../ink_site/online_booking.php';" title="Go to - Online Booking Page">
        	Online Booking Page
        </td>
    </tr>
    <tr>
    	<td align="left" class="<?php if($thispage[3] == "contact_us.php") { echo "menuselected"; } else { echo "menunotselected"; } ?>" onclick="return document.location.href = '../ink_site/contact_us.php';" title="Go to - Contact Us Page">
        	Contact Us Page
        </td>
    </tr>
</table>