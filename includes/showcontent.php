<?php

	@session_start();
	
	require_once("../includes/func_list.php");
	
	///DATA
	$task = $_POST['task'];
	
	$id = base64_decode($_POST['contentid']);
	
	if($task == "slideshow")
	{
		$site = mysql_fetch_array(mysql_query("SELECT picture FROM tbl_slideshow WHERE id = '".$id."'"));
	}
	elseif($task == "gallery")
	{
		$site = mysql_fetch_array(mysql_query("SELECT picture FROM tbl_photos WHERE id = '".$id."'"));
	}
	elseif($task == "roomfeatures")
	{
		$f_qry = mysql_query("SELECT * FROM tbl_roomfeatures WHERE roomid = '".$id."'");
		
		$f_num = mysql_num_rows($f_qry);
	}
	
?>
<table border="0" width="100%" cellpadding="2" cellspacing="5">
	<tr>
    	<td align="left">
        	<?php 
			if($task == "slideshow")
			{
				$image = getimagesize("../file_loads/".$site['picture']);
			?>
            	<img src="../file_loads/<?php echo $site['picture']; ?>" width="720" height="340" />
            <?php
			}
			elseif($task == "gallery")
			{
				$image = getimagesize("../file_loads/".$site['picture']);
			?>
            	<img src="../file_loads/<?php echo $site['picture']; ?>" width="680" height="550" />
            <?php
			}
			elseif($task == "roomfeatures")
			{
			?>
            	<table border="1" width="100%" cellpadding="2" cellspacing="2">
				<?php
                if($f_num != 0)
				{
					$count = 1;
					
					while($features = mysql_fetch_array($f_qry))
					{
					?>
                    <tr>
                    	<td width="4%">
                        	<b><?php echo $count; ?></b>
                        </td>
                        <td>
                        	<?php 
							
							$entry = mysql_fetch_array(mysql_query("SELECT names FROM tbl_roomsetup WHERE id = '".$features['featureid']."'"));
							
							echo $entry['names']; 
							
							?>
                        </td>
                    </tr>
                	<?php
					$count++;
					
					}
				}
				else
				{
				?>
                <tr>
                	<td>
                    	<i>No features added for this room!</i>
                    </td>
                </tr>
                <?php
				}
				?>
                </table>
            <?php
			}
			else
			{
				echo $site['content']; 
			}	
			?>
        </td>
    </tr>
    <tr>
    	<td align="center" style="padding-top:10px;">
        	<a href="#" onClick="return closeThis('contentarea<?php echo $id; ?>');" title="Hide This" class="links">Close</a>
        </td>
    </tr>
</table>